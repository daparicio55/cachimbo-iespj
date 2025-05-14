<?php

namespace App\Http\Controllers;

use App\Models\Traje;
use Illuminate\Http\Request;

class CalificacioneController extends Controller
{
    //
    public function calficar($id)
    {
        $traje = Traje::find($id);
        return view('calificaciones.calificar', compact('traje'));
    }
}
