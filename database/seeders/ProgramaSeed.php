<?php

namespace Database\Seeders;

use App\Models\Programa;
use App\Models\Programas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programas = [
            [
                'nombre' => 'Arquitectura de Plataformas y Servicios de Información',
                'descripcion' => 'Arquitectura de Plataformas y Servicios de Información',
                'url_path' => '/resources/imgs/apsti.png',
                'color' => 'blue',
                'numero'=>4
            ],
            [
                'nombre' => 'Asistencia Administrativa',
                'descripcion' => 'Asistencia Administrativa',
                'url_path' => '/resources/imgs/asistencia.png',
                'color' => 'red',
                'numero'=>7
            ],
            [
                'nombre' => 'Producción Agropecuaria',
                'descripcion' => 'Producción Agropecuaria',
                'url_path' => '/resources/imgs/agropecuaria.png',
                'color' => 'green',
                'numero'=>2
            ],
            [
                'nombre' => 'Electrónica Industrial',
                'descripcion' => 'Electrónica Industrial',
                'url_path' => '/resources/imgs/electronica.png',
                'color' => 'yellow',
                'numero'=>1
            ],
            [
                'nombre' => 'Enfermería Técnica',
                'descripcion' => 'Enfermería Técnica',
                'url_path' => '/resources/imgs/enfermeria.png',
                'color' => 'cyan',
                'numero'=>3
            ],
            [
                'nombre' => 'Laboratorio Clínico y Anatomia Patológica',
                'descripcion' => 'Laboratorio Clínico y Anatomia Patológica',
                'url_path' => '/resources/imgs/lcap.png',
                'color' => 'purple',
                'numero'=>5
            ],
            [
                'nombre' => 'Mecatrónica Automotriz',
                'descripcion' => 'Mecatrónica Automotriz',
                'url_path' => '/resources/imgs/mecatronica.png',
                'color' => 'orange',
                'numero'=>6
            ]
        ];

        foreach ($programas as $programa) {
            Programa::create([
                'nombre' => $programa['nombre'],
                'descripcion' => $programa['descripcion'],
                'url_path' => $programa['url_path'],
                'color' => $programa['color']
            ]);
        }
    }
}
