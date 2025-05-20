<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Traje;
use App\Traits\CalificacioneTrait;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    Use CalificacioneTrait;

    public function index()
    {
        $periodos = Periodo::orderBy('nombre','desc')
        ->get();
        return view('resultados.index',compact('periodos'));
    }

    public function show(Request $request)
    {
        $request->validate([
            'periodo' => 'required|exists:periodos,id',
        ]);
        try {
            //code...
            $trajes = Traje::orderBy('id','asc')->get();
            $datos = $this->getCalificacione($request->periodo);
            
        } catch (\Throwable $th) {
            return $th->getMessage();
            return redirect()->route('dashboard.resultados.index')->with('error', 'El periodo no existe');
        }
        return view('resultados.show', compact('datos','trajes'));
    }
}
