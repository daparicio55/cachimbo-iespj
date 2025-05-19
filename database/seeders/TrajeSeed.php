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
            'video_path' => '/resources/videos/especialidad.mp4'
        ]);
        Traje::create([
            'nombre' => 'Traje de Baño',
            'video_path' => '/resources/videos/trajebanio.mp4'
        ]);
        Traje::create([
            'nombre' => 'Traje de Noche - Gala',
            'video_path' => '/resources/videos/galanoche.mp4'
        ]);
    }
}
