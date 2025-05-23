<?php

namespace Database\Seeders;

use App\Models\Traje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Pest\Laravel\put;

class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array01 = [
            [
                'nombre' => 'Representatividad profesional',
                'descripcion' => 'Reflejo claro del campo técnico o profesional',
                'puntaje_maximo' => 25
            ],
            [
                'nombre' => 'Creatividad y diseño',
                'descripcion' => 'Diseño funcional, uso de elementos simbólicos',
                'puntaje_maximo' => 25

            ],
                        [
                'nombre' => 'Coherencia con el perfil técnico',
                'descripcion' => 'Relación con funciones del área de estudio',
                'puntaje_maximo' => 15

            ],
                        [
                'nombre' => 'Porte y seguridad ',
                'descripcion' => 'Postura, expresión corporal, actitud',
                'puntaje_maximo' => 20

            ],
                        [
                'nombre' => 'Presentación personal',
                'descripcion' => 'Cuidado de peinado, limpieza, armonía visual',
                'puntaje_maximo' => 15

            ]
        ];

        $array02 = [
            [
                'nombre' => 'Confianza y seguridad',
                'descripcion' => 'Naturalidad, actitud serena, contacto visual ',
                'puntaje_maximo' => 15
            ],
            [
                'nombre' => 'Expresión corporal y postura',
                'descripcion' => 'Movimiento armónico, equilibrio',
                'puntaje_maximo' => 25
            ],
            [
                'nombre' => 'Condición física',
                'descripcion' => 'Apariencia saludable, proporción corporal ',
                'puntaje_maximo' => 25
            ],
            [
                'nombre' => 'Presencia escénica',
                'descripcion' => 'Conexión con el público, carisma',
                'puntaje_maximo' => 20
            ],
            [
                'nombre' => 'Presentación del traje',
                'descripcion' => 'Ajuste, limpieza, adecuación del diseño',
                'puntaje_maximo' => 15
            ],
        ];

        $array03 = [
            [
                'nombre' => 'Elegancia y sofisticación del traje',
                'descripcion' => 'Calidad del diseño, detalles, colores',
                'puntaje_maximo' => 30
            ],
            [
                'nombre' => 'Estilo personal ',
                'descripcion' => 'Coherencia entre el traje y la personalidad',
                'puntaje_maximo' => 20
            ],
            [
                'nombre' => 'Seguridad y actitud',
                'descripcion' => 'Confianza, gracia al caminar ',
                'puntaje_maximo' => 25
            ],
            [
                'nombre' => 'Impacto visual ',
                'descripcion' => 'Primera impresion percepcion y efecto',
                'puntaje_maximo' => 10
            ],
            [
                'nombre' => 'Presentación final ',
                'descripcion' => 'Peinado, maquillaje, accesorios',
                'puntaje_maximo' => 15
            ],
        ];

        $array04 = [
            [
                'nombre' => 'Contenido y coherencia',
                'descripcion' => 'Respuesta lógica, organizada, bien desarrollada',
                'puntaje_maximo' => 30
            ],
            [
                'nombre' => 'Claridad y fluidez verbal',
                'descripcion' => '',
                'puntaje_maximo' => 20
            ],
            [
                'nombre'=>'Lenguaje corporal y seguridad',
                'descripcion'=>'Postura, contacto visual, confianza',
                'puntaje_maximo' => 20
            ],
            [
                'nombre'=>'Creatividad y profundidad',
                'descripcion'=>'Originalidad, impacto del mensaje, manejo de ideas',
                'puntaje_maximo' => 20 
            ],
            [
                'nombre'=>'Manejo del tiempo',
                'descripcion'=>'Respuesta dentro del tiempo estimado (30–60 segundos)',
                'puntaje_maximo' => 10
            ]
        ];

        $trajes = Traje::get();
       foreach ($trajes as $key => $traje) {
        # code...
            if ($traje->id == 1){
                $traje->items()->createMany($array01);
            }

            if ($traje->id == 2){
                $traje->items()->createMany($array02);
            }
            
            if ($traje->id == 3){
                $traje->items()->createMany($array03);
            }

            if ($traje->id == 4){
                $traje->items()->createMany($array04);
            }
        }
    }
}
