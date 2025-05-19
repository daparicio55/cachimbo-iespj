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
                'color' => 'blue'
            ],
            [
                'nombre' => 'Asistencia Administrativa',
                'descripcion' => 'Asistencia Administrativa',
                'url_path' => '/resources/imgs/asistencia.png',
                'color' => 'red'
            ],
            [
                'nombre' => 'Producción Agropecuaria',
                'descripcion' => 'Producción Agropecuaria',
                'url_path' => '/resources/imgs/agropecuaria.png',
                'color' => 'green'
            ],
            [
                'nombre' => 'Electrónica Industrial',
                'descripcion' => 'Electrónica Industrial',
                'url_path' => '/resources/imgs/electronica.png',
                'color' => 'yellow'
            ],
            [
                'nombre' => 'Enfermería Técnica',
                'descripcion' => 'Enfermería Técnica',
                'url_path' => '/resources/imgs/enfermeria.png',
                'color' => 'cyan'
            ],
            [
                'nombre' => 'Laboratorio Clínico y Anatomia Patológica',
                'descripcion' => 'Laboratorio Clínico y Anatomia Patológica',
                'url_path' => '/resources/imgs/lcap.png',
                'color' => 'purple'
            ],
            [
                'nombre' => 'Mecatrónica Automotriz',
                'descripcion' => 'Mecatrónica Automotriz',
                'url_path' => '/resources/imgs/mecatronica.png',
                'color' => 'orange'
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
