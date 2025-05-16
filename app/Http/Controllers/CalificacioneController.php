<?php

namespace App\Http\Controllers;

use App\Models\Item;
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
        $items_calificacion = $this->getItemsCalificacion($id); 
        $programa = Programa::find($request->programa_id);
        $traje = Traje::find($id);
        //return $items_calificacion;
        return view('calificaciones.edit',compact('traje','programa','items_calificacion') );
    }

    public function update(Request $request, $id){
        return $request->all();
    }

    public function getItemsCalificacion($id)
    {
        $items_calificacion = [];
        $grupos = Item::where('traje_id',$id)
        ->groupBy('grupo_nombre')
        ->select('grupo_nombre')
        ->get();

        foreach($grupos as $grupo){
            $items = Item::where('traje_id',$id)
            ->where('grupo_nombre',$grupo->grupo_nombre)
            ->get();
            foreach($items as $item){
                $items_calificacion[$grupo->grupo_nombre][] = [
                    'id' => $item->id,
                    'nombre' => $item->nombre,
                    'descripcion' => $item->descripcion,
                    'puntaje_maximo' => $item->puntaje_maximo,
                ];
            }
        }
        return $items_calificacion;
    }
}
