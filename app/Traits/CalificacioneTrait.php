<?php

namespace App\Traits;

use App\Models\Calificacione;
use App\Models\Participante;
use App\Models\Programa;
use App\Models\Traje;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait CalificacioneTrait
{
    public function getFinales($periodo_id)
    {
        $resultados = [];
        $a = [];
        $jurados = User::whereHas('roles', function ($query) {
            $query->where('name', 'jurado');
        })->whereHas('periodos', function ($query) use ($periodo_id) {
            $query->where('periodos.id', $periodo_id);
        })->get();

        foreach ($jurados as $key => $jurado) {
            # code...
            $resultados [] = $this->getCalificacione($periodo_id, $jurado->id);
        }
        $b = [];
        
        foreach ($resultados as  $programas) {
            # code...
            $programa = 0;
            foreach ($programas as $programa ){
                $a[$programa['programa']][$programa['participantes']['varon']['id']][] = $programa['participantes']['promedio_varon'];
                $a[$programa['programa']][$programa['participantes']['mujer']['id']][] = $programa['participantes']['promedio_mujer'];
            }

        }

        //vamos hacer un solo array
        $array_varon = [];
        $array_mujer = [];
        foreach ($a as $key_programa => $value) {
            # code...
            foreach ($value as $key_participante => $value_participante) {
                # code...
                $participante = Participante::findOrFail($key_participante);
                if($participante->sexo == 'Varon'){
                    $array_varon[] = [
                        'programa' => $key_programa,
                        'participante' => $participante->apellidos . ' ' . $participante->nombres,
                        'sexo' => $participante->sexo,
                        'suma' => number_format(round(array_sum($value_participante), 2), 2, '.'),
                    ];
                }
                if($participante->sexo == 'Mujer'){
                    $array_mujer[] = [
                        'programa' => $key_programa,
                        'participante' => $participante->apellidos . ' ' . $participante->nombres,
                        'sexo' => $participante->sexo,
                        'suma' => number_format(round(array_sum($value_participante), 2), 2, '.'),
                    ];
                }
                
            }
        }

        $hombre_ordenado = collect($array_varon)->sortByDesc(function ($item) {
            return $item['suma'];
        })->values()->all();

        $mujer_ordenado = collect($array_mujer)->sortByDesc(function ($item) {
            return $item['suma'];
        })->values()->all();
        return [
            'varones' => $hombre_ordenado,
            'mujeres' => $mujer_ordenado,
        ];
        
    }


    public function getCalificacione($periodo_id,$user_id = null )
    {
        if ($user_id == null) {
            $user_id = Auth::user()->id;
        }
        $programas = Programa::get();
        $trajes = Traje::orderBy('id','asc')->get();
        $datos = [];
        foreach ($programas as $programa) {
            # code...
            $a_varon = Participante::where('programa_id', $programa->id)
                ->where('periodo_id', $periodo_id)
                ->where('sexo', 'varon')
                ->first();
            $a_mujer = Participante::where('programa_id', $programa->id)
                ->where('periodo_id', $periodo_id)
                ->where('sexo', 'mujer')
                ->first();

            $array_puntos_varon = [];
            $array_puntos_mujer = [];

            $suma_varon = 0;
            $suma_mujer = 0;

            foreach ($trajes as $traje) {
                # code...
                $puntos_varon = Calificacione::whereHas('item', function ($query) use ($traje) {
                    $query->where('traje_id', $traje->id);
                })
                    ->where('participante_id', $a_varon->id)
                    ->where('user_id', $user_id)
                    ->where('periodo_id', $periodo_id)
                    ->get();

                $puntos_mujer = Calificacione::whereHas('item', function ($query) use ($traje) {
                    $query->where('traje_id', $traje->id);
                })
                    ->where('participante_id', $a_mujer->id)
                    ->where('user_id', $user_id)
                    ->where('periodo_id', $periodo_id)
                    ->get();
                $array_puntos_mujer[] = [
                    'traje' => $traje->nombre,
                    'puntos' => $puntos_mujer->sum('puntos'),
                ];
                $suma_mujer += $puntos_mujer->sum('puntos');

                $array_puntos_varon[] = [
                    'traje' => $traje->nombre,
                    'puntos' => $puntos_varon->sum('puntos'),
                ];
                $suma_varon += $puntos_varon->sum('puntos');
            }


            $a = [
                'id' => $programa->id,
                'programa' => $programa->nombre,
                'participantes' => [
                    'varon' => $a_varon,
                    'puntos_varon' => $array_puntos_varon,
                    'suma_varon' => $suma_varon,
                    'promedio_varon' => number_format(round($suma_varon / count($array_puntos_varon), 2), 2, '.'),
                    'mujer' => $a_mujer,
                    'puntos_mujer' => $array_puntos_mujer,
                    'suma_mujer' => $suma_mujer,
                    'promedio_mujer' => number_format(round($suma_mujer / count($array_puntos_varon), 2), 2, '.'),
                ]
            ];
            $datos[] = $a;
        }
        return $datos;
    }
}
