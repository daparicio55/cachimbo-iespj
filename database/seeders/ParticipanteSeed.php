<?php

namespace Database\Seeders;

use App\Models\Participante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipanteSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participante::create([
            'nombres' => 'Juan',
            'apellidos' => 'Pérez',
            'sexo' => 'Varon',
            'programa_id' => 1,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Maria',
            'apellidos' => 'Gonzalez',
            'sexo' => 'Mujer',
            'programa_id' => 1,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Carlos',
            'apellidos' => 'Lopez',
            'sexo' => 'Varon',
            'programa_id' => 2,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Ana',
            'apellidos' => 'Martinez',
            'sexo' => 'Mujer',
            'programa_id' => 2,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Luis',
            'apellidos' => 'Hernandez',
            'sexo' => 'Varon',
            'programa_id' => 3,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Laura',
            'apellidos' => 'Ramirez',
            'sexo' => 'Mujer',
            'programa_id' => 3,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Pedro',
            'apellidos' => 'García',
            'sexo' => 'Varon',
            'programa_id' => 4,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Sofia',
            'apellidos' => 'Fernandez',
            'sexo' => 'Mujer',
            'programa_id' => 4,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Andres',
            'apellidos' => 'Torres',
            'sexo' => 'Varon',
            'programa_id' => 5,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Valentina',
            'apellidos' => 'Cruz',
            'sexo' => 'Mujer',
            'programa_id' => 5,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Diego',
            'apellidos' => 'Morales',
            'sexo' => 'Varon',
            'programa_id' => 6,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Camila',
            'apellidos' => 'Vasquez',
            'sexo' => 'Mujer',
            'programa_id' => 6,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Sebastian',
            'apellidos' => 'Jimenez',
            'sexo' => 'Varon',
            'programa_id' => 7,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Isabella',
            'apellidos' => 'Salazar',
            'sexo' => 'Mujer',
            'programa_id' => 7,
            'periodo_id' => 1,
        ]);
    }
}
