<?php

namespace Database\Seeders;

use App\Models\Traje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrajeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Traje::create([
            'nombre' => 'Traje de Especialidad',
        ]);
        Traje::create([
            'nombre' => 'Traje de Baño',
        ]);
        Traje::create([
            'nombre' => 'Traje de Noche - Gala',
        ]);
    }
}
