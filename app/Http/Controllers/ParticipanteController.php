<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Periodo;
use App\Models\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ParticipanteController extends Controller
{
    //
    public function index()
    {
        $participantes = Participante::orderBy('id','desc')
        ->get();
        return view('participantes.index',compact('participantes'));
    }
    
    public function create(){
        $programas = Programa::orderby('nombre','asc')->get();
        $periodos = Periodo::where('activo',1)->orderby('nombre','asc')->get();
        return view('participantes.create',compact('programas','periodos','periodos'));
    }

    public function store(Request $request){
        $request->validate([
            'nombres'=>'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'sexo' => 'required|in:Varon,Mujer',
            'programa' => 'required|exists:programas,id',
            'periodo' => 'required|exists:periodos,id',
        ]);

        try {
            //code...
            $participante = Participante::create([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'sexo' => $request->sexo,
                'programa_id' => $request->programa,
                'periodo_id' => $request->periodo,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
            return Redirect::route('dashboard.participantes.create')->with('error','Error al crear el participante');
        }
        return Redirect::route('dashboard.participantes.index')->with('success','Participante creado correctamente');
    }

    public function destroy($id){
        try {
            //code...
            $participante = Participante::findOrFail($id);
            $participante->delete();
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
            return Redirect::route('dashboard.participantes.index')->with('error','Error al eliminar el participante');
        }
        return Redirect::route('dashboard.participantes.index')->with('success','Participante eliminado correctamente');
    }
}
