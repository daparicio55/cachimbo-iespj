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
    }
}
