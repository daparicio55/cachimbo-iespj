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
            'nombres' => 'Luis Jhulinio',
            'apellidos' => 'SANCHEZ CHINGUEL',
            'sexo' => 'Varon',
            'programa_id' => 1,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Angge Tatiana',
            'apellidos' => 'VELA BUSTAMANTE',
            'sexo' => 'Mujer',
            'programa_id' => 1,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Yoshua Jano',
            'apellidos' => 'LOZANO HERNANDEZ',
            'sexo' => 'Varon',
            'programa_id' => 2,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Maria Jimena',
            'apellidos' => 'SANCHEZ DIAZ',
            'sexo' => 'Mujer',
            'programa_id' => 2,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Elber Fredey',
            'apellidos' => 'YAGKUG NUGKUM',
            'sexo' => 'Varon',
            'programa_id' => 3,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Fatima Rocio',
            'apellidos' => 'SAAVEDRA TEJADA',
            'sexo' => 'Mujer',
            'programa_id' => 3,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Sebastian Wilfredo',
            'apellidos' => 'AGURTO RAMOS',
            'sexo' => 'Varon',
            'programa_id' => 4,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Jhenifer Cleidi',
            'apellidos' => 'OBLITAS TRIGOSO',
            'sexo' => 'Mujer',
            'programa_id' => 4,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Gleiser',
            'apellidos' => 'ZUMAETA CUCHCA',
            'sexo' => 'Varon',
            'programa_id' => 5,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Llely Rocio',
            'apellidos' => 'TORRES ZUTA',
            'sexo' => 'Mujer',
            'programa_id' => 5,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Euler Jose',
            'apellidos' => 'TUNJAR ASPAJO',
            'sexo' => 'Varon',
            'programa_id' => 6,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Veronica',
            'apellidos' => 'CASTAÑEDA ZUMAETA',
            'sexo' => 'Mujer',
            'programa_id' => 6,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Jesus Eugenio',
            'apellidos' => 'LOPEZ TUESTA',
            'sexo' => 'Varon',
            'programa_id' => 7,
            'periodo_id' => 1,
        ]);
        Participante::create([
            'nombres' => 'Doris Giovanny',
            'apellidos' => 'TRIGOSO ROJAS',
            'sexo' => 'Mujer',
            'programa_id' => 7,
            'periodo_id' => 1,
        ]);
    }
}
