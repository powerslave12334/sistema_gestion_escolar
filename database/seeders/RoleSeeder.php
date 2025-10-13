<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'ADMINISTRADOR']);
        Role::create(['name'=>'DIRECTOR/O GENERAL']);
        Role::create(['name'=>'DIRECTORA/O ACADEMICA']);
        Role::create(['name'=>'DIRECTORA/O ADMINISTRATIVO']);
        Role::create(['name'=>'DOCENTE']);
        Role::create(['name'=>'ESTUDIANTE']);
        Role::create(['name'=>'CAJERA/O']);
        Role::create(['name'=>'SECRETARIO/A']);
        Role::create(['name'=>'REGENTE ESCOLAR']);
    }
}
