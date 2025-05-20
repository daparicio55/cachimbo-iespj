<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\User;
use Illuminate\Http\Request;

class JuradoController extends Controller
{
    //
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'jurado');
        })->orderBy('id','desc')
        ->get();
        return view('jurados.index',compact('users'));
    }

    public function create()
    {
        $periodos = Periodo::orderBy('nombre','desc')
        ->where('activo',1)
        ->get();
        return view('jurados.create',compact('periodos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'periodo' => 'required|exists:periodos,id'
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $user->assignRole('Jurado');
            $user->periodos()->attach($request->periodo);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('dashboard.jurados.index')->with('error', 'Error al crear el jurado. Intente nuevamente.');
        }
        return redirect()->route('dashboard.jurados.index')->with('success', 'Jurado creado exitosamente.');
    }

    public function destroy($id)
    {
        try {
            //code...
            $user = User::findOrFail($id);
            $user->delete();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('dashboard.jurados.index')->with('error', 'Error al eliminar el jurado. Intente nuevamente.');
        }
        return redirect()->route('dashboard.jurados.index')->with('success', 'Jurado eliminado exitosamente.');
    }
}
