<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Traje;
use App\Traits\CalificacioneTrait;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
            $periodo = $request->periodo;
        } catch (\Throwable $th) {
            return redirect()->route('dashboard.resultados.index')->with('error', 'El periodo no existe');
        }
        return view('resultados.show', compact('datos','trajes','periodo'));
    }

    public function imprimir(Request $request){
        try {
            //code..
            $name = Auth::user()->name;
            $periodo = Periodo::findOrFail($request->periodo);
            $trajes = Traje::orderBy('id','asc')->get();
            $datos = $this->getCalificacione($request->periodo);

            $pdf = Pdf::loadView('resultados.imprimir',compact('trajes','datos','periodo'))->setPaper('A4');
            return $pdf->download( Str::slug($name,'-').'-'.$periodo->nombre.'.pdf');
            //return view('resultados.imprimir',compact('trajes','datos','periodo'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('dashboard.resultados.index')->with('error','no se puede imprimir la calificacion');
        }
    }

}
