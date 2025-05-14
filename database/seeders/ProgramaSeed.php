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
            ],
            [
                'nombre' => 'Asistencia Administrativa',
                'descripcion' => 'Asistencia Administrativa',
            ],
            [
                'nombre' => 'Producción Agropecuaria',
                'descripcion' => 'Producción Agropecuaria',
            ],
            [
                'nombre' => 'Electrónica Industrial',
                'descripcion' => 'Electrónica Industrial',
            ],
            [
                'nombre' => 'Enfermería Técnica',
                'descripcion' => 'Enfermería Técnica',
            ],
            [
                'nombre' => 'Laboratorio Clínico y Anatomia Patológica',
                'descripcion' => 'Laboratorio Clínico y Anatomia Patológica',
            ],
            [
                'nombre' => 'Mecatrónica Automotriz',
                'descripcion' => 'Mecatrónica Automotriz',
            ]
        ];

        foreach ($programas as $programa) {
            Programa::create([
                'nombre' => $programa['nombre'],
                'descripcion' => $programa['descripcion'],
            ]);
        }
    }
}
