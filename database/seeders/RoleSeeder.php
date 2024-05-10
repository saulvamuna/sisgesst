<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Evaluador']);
        $role3 = Role::create(['name' => 'Gestor de empresas']);


        // PERMISSIONS OF BOTH
        Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2, $role3]);


        // COMPAÑIAS
        Permission::create(['name' => 'Crear Compañías'])->syncRoles([$role1]);
        Permission::create(['name' => 'Editar Compañías'])->syncRoles([$role1]);



        // PROCESOS
        Permission::create(['name' => 'Crear Procesos'])->syncRoles([$role1]);
        Permission::create(['name' => 'Editar Procesos'])->syncRoles([$role1]);
        Permission::create(['name' => 'Eliminar Procesos'])->syncRoles([$role1]);


        // ACTIVIDADES
        Permission::create(['name' => 'Crear Actividades'])->syncRoles([$role1]);
        Permission::create(['name' => 'Editar Actividades'])->syncRoles([$role1]);
        Permission::create(['name' => 'Eliminar Actividades'])->syncRoles([$role1]);


        // TAREAS
        Permission::create(['name' => 'Crear Tareas'])->syncRoles([$role1]);
        Permission::create(['name' => 'Editar Tareas'])->syncRoles([$role1]);
        Permission::create(['name' => 'Eliminar Tareas'])->syncRoles([$role1]);


        // ADMINISTRADOR
        Permission::create(['name' => 'Administrador'])->syncRoles([$role1]);
        Permission::create(['name' => 'Desactivar Empresa'])->syncRoles([$role1]);

    }
}
