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
            'nombres' => 'Wilinton',
            'apellidos' => 'López Tuesta',
            'sexo' => 'Varon',
            'programa_id' => 1,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Nadia Jacquelin',
            'apellidos' => 'Gutiérrez Puscán',
            'sexo' => 'Mujer',
            'programa_id' => 1,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Jhanpier',
            'apellidos' => 'Diaz Rojas',
            'sexo' => 'Varon',
            'programa_id' => 2,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Melissa',
            'apellidos' => 'López Pizarro',
            'sexo' => 'Mujer',
            'programa_id' => 2,
            'periodo_id' => 1,
        ]);

        Participante::create([
            'nombres' => 'Manuel',
            'apellidos' => 'Valle Quintana',
            'sexo' => 'Varon',
            'programa_id' => 3,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Elenita',
            'apellidos' => 'Neyra Román',
            'sexo' => 'Mujer',
            'programa_id' => 3,
            'periodo_id' => 1,
        ]);

        Participante::create([
            'nombres' => 'Cleimer',
            'apellidos' => 'Oblitas Muñoz',
            'sexo' => 'Varon',
            'programa_id' => 4,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Mayra Belén',
            'apellidos' => 'Quistan Ramos',
            'sexo' => 'Mujer',
            'programa_id' => 4,
            'periodo_id' => 1,
        ]);

        Participante::create([
            'nombres' => 'Juan Carlos',
            'apellidos' => 'López Meléndez',
            'sexo' => 'Varon',
            'programa_id' => 5,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Teiny Odal',
            'apellidos' => 'Pompa Aguilar',
            'sexo' => 'Mujer',
            'programa_id' => 5,
            'periodo_id' => 1,
        ]);

        Participante::create([
            'nombres' => 'Darickson Jhoe',
            'apellidos' => 'Puerta Mas',
            'sexo' => 'Varon',
            'programa_id' => 6,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Flor de María',
            'apellidos' => 'López Coronel',
            'sexo' => 'Mujer',
            'programa_id' => 6,
            'periodo_id' => 1,
        ]);

        Participante::create([
            'nombres' => 'Huber Mauricio',
            'apellidos' => 'Ventura Riva',
            'sexo' => 'Varon',
            'programa_id' => 7,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Greysi Jhuliza',
            'apellidos' => 'Urbina Monteza',
            'sexo' => 'Mujer',
            'programa_id' => 7,
            'periodo_id' => 1,
        ]);
    }
}
