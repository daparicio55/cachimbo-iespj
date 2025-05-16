<?php

namespace App\Http\Controllers;

use App\Models\Calificacione;
use App\Models\Item;
use App\Models\Participante;
use App\Models\Periodo;
use App\Models\Programa;
use App\Models\Traje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $programa = Programa::find($request->programa_id);
        $traje = Traje::find($id);
        $items_calificacion = $this->getItemsCalificacion($id,$programa->id);
        //return $items_calificacion;
        return view('calificaciones.edit',compact('traje','programa','items_calificacion') );
    }

    public function update(Request $request, $id){
        //obtener jurados
        $jurado = Auth::user();
        $periodo = Periodo::where('activo',1)->first();
        $programa = Programa::findOrFail($request->programa);
        $mujer = $this->getParticipante('Mujer',$programa->id,$periodo->id);
        $varon = $this->getParticipante('Varon',$programa->id,$periodo->id);
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
            return Redirect::route('dashboard.calificar.index',$id)->with('error','Error al guardar las calificaciones');
        }
        return Redirect::route('dashboard.calificar.index',$id)->with('success','Calificaciones guardadas correctamente');
    }

    public function getItemsCalificacion($id,$programa_id)
    {
        $items_calificacion = [];
        $grupos = Item::where('traje_id',$id)
        ->groupBy('grupo_nombre')
        ->select('grupo_nombre')
        ->get();
        $periodo = Periodo::where('activo',1)->first();

        foreach($grupos as $grupo){
            $items = Item::where('traje_id',$id)
            ->where('grupo_nombre',$grupo->grupo_nombre)
            ->get();
            foreach($items as $item){

                $mujer = $this->getParticipante('Mujer',$programa_id,$periodo->id);
                $varon = $this->getParticipante('Varon',$programa_id,$periodo->id);

                $calificacion_mujer = Calificacione::where('participante_id',$mujer->id)
                ->where('user_id',Auth::user()->id)
                ->where('periodo_id',$periodo->id)
                ->where('item_id',$item->id)
                ->first();
                $calificacion_varon = Calificacione::where('participante_id',$varon->id)
                ->where('user_id',Auth::user()->id)
                ->where('periodo_id',$periodo->id)
                ->where('item_id',$item->id)
                ->first();

                $items_calificacion[$grupo->grupo_nombre][] = [
                    'id' => $item->id,
                    'nombre' => $item->nombre,
                    'descripcion' => $item->descripcion,
                    'puntaje_maximo' => $item->puntaje_maximo,
                    'puntos_varon' => $calificacion_varon ? $calificacion_varon->puntos : 0,
                    'puntos_mujer' => $calificacion_mujer ? $calificacion_mujer->puntos : 0,
                ];
            }
        }
        return $items_calificacion;
    }

    public function getParticipante($sexo,$programa_id,$periodo_id){
        $participante = Participante::where('programa_id',$programa_id)
        ->where('sexo',$sexo)
        ->where('periodo_id',$periodo_id)
        ->first();
        return $participante;
    }
}
