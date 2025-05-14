<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrador = User::create([
            'name' => 'APARICIO PALOMINO, Davis Williams',
            'email' => 'daparicio@idexperujapon.edu.pe',
            'password' => bcrypt('L0g1t3ch_'),
        ]);
        $administrador->assignRole('Administrador');
        $jurado01 = User::create([
            'name' => 'ALVAREZ CARRILLO, Jairo',
            'email' => 'jurado01@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $jurado01->assignRole('Jurado');
        $jurado02 = User::create([
            'name' => 'ESCOBAR ESCOBAR, Pablo',
            'email' => 'jurado02@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $jurado02->assignRole('Jurado');
        $jurado03 = User::create([
            'name' => 'GARCIA GARCIA, Luis',
            'email' => 'jurado03@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $jurado03->assignRole('Jurado');
    }
}
