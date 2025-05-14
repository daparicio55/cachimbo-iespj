<?php

namespace Database\Seeders;

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
    }
}
