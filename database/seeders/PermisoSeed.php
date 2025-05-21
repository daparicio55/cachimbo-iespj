<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permisos = [
            ['name' => 'dashboard', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.calificar.index', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.calificar.edit', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.calificar.update', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'dashboard.participantes.index', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.participantes.create', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.participantes.store', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.participantes.destroy', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'dashboard.jurados.index', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.jurados.create', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.jurados.store', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.jurados.destroy', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'dashboard.resultados.index', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.resultados.show', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.resultados.imprimir', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'dashboard.finales.index', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.finales.show', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'dashboard.finales.imprimir', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
        ];
        foreach ($permisos as $permiso) {
            Permission::create($permiso);
        }
    }
}
