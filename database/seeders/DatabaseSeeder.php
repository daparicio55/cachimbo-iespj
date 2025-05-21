<?php

namespace Database\Seeders;

use App\Models\Calificacione;
use App\Models\Participante;
use App\Models\Periodo;
use App\Models\Programa;
use App\Models\Traje;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeed::class,
            UserSeed::class,
            TrajeSeed::class,
            ProgramaSeed::class,
            PeriodoSeed::class,
            ItemSeed::class,
            ParticipanteSeed::class,
            PermisoSeed::class,
        ]);

        //relacionar los usuarios con los periodos
        $periodo = Periodo::where('activo', true)
        ->first();
        $users = User::whereHas('roles',function($query){
            $query->where('name','Jurado');
        })->get();
        foreach ($users as $user) {
            $user->periodos()->attach($periodo->id);
        }

        $participantes = Participante::get();
        $trajes = Traje::get();
        $jurados = User::whereHas('roles',function($query){
            $query->where('name','Jurado');
        })->get();
        foreach ($participantes as $participante) {

            foreach ($trajes as $traje) {
                # code...
                foreach ($traje->items as $item) {
                    # code...
                    foreach ($jurados as $jurado) {
                        # code...
                        Calificacione::create([
                            'puntos' => rand(0,$item->puntaje_maximo),
                            'participante_id' => $participante->id,
                            'item_id' => $item->id,
                            'periodo_id' => 1,
                            'user_id' => $jurado->id,
                        ]);
                    }
                }
            }
        }



    }
}
