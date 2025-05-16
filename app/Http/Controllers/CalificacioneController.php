<?php

namespace App\Http\Controllers;

use App\Models\Calificacione;
use App\Models\Item;
use App\Models\Periodo;
use App\Models\Programa;
use App\Models\Traje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //obtener jurados
        $jurado = Auth::user();
        //return $jurado;
        //obtener el periodo activo
        $periodo = Periodo::where('activo',1)->first();
        //obtengo el traje
        //return $periodo;
        $traje = Traje::findOrFail($id);
        //obtener el programa
        //return $traje;
        $programa = Programa::findOrFail($request->programa);
        //return $programa;
        //luego de obtener el programa tengo que recuperar el id del participante varon y mujer
        $mujer = $programa->participantes()
        ->where('sexo','Mujer')
        ->where('periodo_id',$periodo->id)
        ->first();
        $varon = $programa->participantes()
        ->where('sexo','Varon')
        ->where('periodo_id',$periodo->id)
        ->first();
        //ahora tenemos que guardar las calificaciones
        $items = $request->id_item;
        $puntos_varon = $request->calificacion_varon;
        $puntos_mujer = $request->calificacion_mujer;
        //recorremos los items de calificacion
        try {
            //code...
            foreach($items as $key => $item){
            //obtenemos el id del item
            $varon_row = Calificacione::updateOrCreate([
                'participante_id' => $varon->id,
                'user_id' => $jurado->id,
                'periodo_id' => $periodo->id,
                'item_id' => $item,
            ],[
                'puntos' => $puntos_varon[$key],
            ]);
            $mujer_row = Calificacione::updateOrCreate([
                'participante_id' => $mujer->id,
                'user_id' => $jurado->id,
                'periodo_id' => $periodo->id,
                'item_id' => $item,
            ],[
                'puntos' => $puntos_mujer[$key],
            ]);
        }
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }





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
