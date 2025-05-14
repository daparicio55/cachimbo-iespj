<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Traje;
use Illuminate\Http\Request;

class CalificacioneController extends Controller
{
    //
    public function index($id)
    {
        $traje = Traje::find($id);
        $programas = Programa::orderby('nombre','asc')->get();
        return view('calificaciones.index', compact('traje','programas'));
    }
    public function edit(Request $request, $id)
    {
        return $request->all();
    }
}
