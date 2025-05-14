<?php

namespace Database\Seeders;

use App\Models\Traje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array01 = [
            [
                'grupo_nombre' => 'Belleza – Pertinencia del traje',
                'items' => [
                    [
                        'nombre' => 'Apariencia Física',
                        'puntaje_maximo' => 25
                    ],
                    [
                        'nombre' => 'Presentación (peinado, maquillaje)',
                        'puntaje_maximo' => 10,
                    ],
                    [
                        'nombre' => 'Vestuario',
                        'puntaje_maximo' => 20
                    ]
                ]
            ],
            [
                'grupo_nombre' => 'Elegancia',
                'items' => [
                    [
                        'nombre' => 'Dominio del escenario',
                        'puntaje_maximo' => 15
                    ],
                    [
                        'nombre' => 'Expresión / Actitud',
                        'puntaje_maximo' => 15
                    ],
                    [
                        'nombre' => 'Carisma',
                        'puntaje_maximo' => 15
                    ]
                ]
            ]
        ];

        $array02 = [
            [
                'grupo_nombre' => 'Cultura',
                'items' => [
                    [
                        'nombre' => 'Respuestas precisas',
                        'puntaje_maximo' => 15
                    ],
                    [
                        'nombre' => 'Facilidad de palabra',
                        'puntaje_maximo' => 15
                    ]
                ]
            ],
            [
                'grupo_nombre' => 'Belleza',
                'items' => [
                    [
                        'nombre' => 'Apariencia Física',
                        'puntaje_maximo' => 10
                    ],
                    [
                        'nombre' => 'Presentación (peinado, maquillaje)',
                        'puntaje_maximo' => 10,
                    ],
                    [
                        'nombre' => 'Vestuario',
                        'puntaje_maximo' => 20
                    ]
                ]
            ],
            [
                'grupo_nombre' => 'Elegancia',
                'items' => [
                    [
                        'nombre' => 'Dominio del escenario',
                        'puntaje_maximo' => 10
                    ],
                    [
                        'nombre' => 'Expresión / Actitud',
                        'puntaje_maximo' => 15
                    ],
                    [
                        'nombre' => 'Carisma',
                        'puntaje_maximo' => 10
                    ]
                ]
            ]
        ];

        $trajes = Traje::where('nombre','Traje de Especialidad')
        ->orWhere('nombre','Traje de Baño')
        ->get();
        foreach ($trajes as $traje){
            foreach ($array01 as $grupo){
                foreach ($grupo['items'] as $item) {
                    # code...
                    $traje->items()->create([
                        'grupo_nombre' => $grupo['grupo_nombre'],
                        'nombre' => $item['nombre'],
                        'descripcion' => null,
                        'puntaje_maximo' => $item['puntaje_maximo']
                    ]);
                }
            }
        }
        //el segundo array
        $traje_noche = Traje::find(3);
        foreach ($array02 as $grupo){
            foreach ($grupo['items'] as $item) {
                # code...
                $traje_noche->items()->create([
                    'grupo_nombre' => $grupo['grupo_nombre'],
                    'nombre' => $item['nombre'],
                    'descripcion' => null,
                    'puntaje_maximo' => $item['puntaje_maximo']
                ]);
            }
        }

    }
}
