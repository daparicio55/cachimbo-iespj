<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Traits\CalificacioneTrait;
use Illuminate\Http\Request;

class FinalController extends Controller
{
    Use CalificacioneTrait;
    public function index(){
        $periodos = Periodo::orderBy('nombre','desc')
        ->get();
        return view('finales.index',compact('periodos'));
    }

    public function show(Request $request){
        $request->validate([
            'periodo' => 'required|exists:periodos,id',
        ]);

        $resultados = $this->getFinales($request->periodo);
        $periodo = Periodo::findOrFail($request->periodo);

        //return $resultados;
        return view('finales.show',compact('periodo','resultados'));
    }
}
