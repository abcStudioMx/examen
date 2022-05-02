<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'Supervisor']);
        $role3=Role::create(['name'=>'Usuario']);

        Permission::create(['guard_name'=>'web','name'=>'admin.home','descrition'=>'Menu Dashboard'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['guard_name'=>'web','name'=>'empleados.home','descrition'=>'Menu empleados'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['guard_name'=>'web','name'=>'empleados.editar','descrition'=>'Editar empleado'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['guard_name'=>'web','name'=>'empleados.eliminar','descrition'=>'Eliminar empleado'])->syncRoles([$role1,$role2]);
        Permission::create(['guard_name'=>'web','name'=>'empleados.nomina','descrition'=>'Calcular nomina empleado'])->syncRoles([$role1,$role2]);
        Permission::create(['guard_name'=>'web','name'=>'empleados.boton.actualizar','descrition'=>'Boton de actualizar datos empleado'])->syncRoles([$role1,$role2]);

        Permission::create(['guard_name'=>'web','name'=>'descarga.menu','descrition'=>'Menu Descarga de archivos'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['guard_name'=>'web','name'=>'descarga.pdf','descrition'=>'Boton descarga PDF'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['guard_name'=>'web','name'=>'descarga.excel','descrition'=>'Boton descarga Excel'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['guard_name'=>'web','name'=>'permisos.menu','descrition'=>'Menu de permisos'])->syncRoles([$role1]);
        Permission::create(['guard_name'=>'web','name'=>'permisos.agregar','descrition'=>'Agregar Perfil'])->syncRoles([$role1]);
        Permission::create(['guard_name'=>'web','name'=>'permisos.editar','descrition'=>'Editar perfil'])->syncRoles([$role1]);
        Permission::create(['guard_name'=>'web','name'=>'permisos.borrar','descrition'=>'Borrar perfil'])->syncRoles([$role1]);
        Permission::create(['guard_name'=>'web','name'=>'permisos.asignar','descrition'=>'Asignar perfil a usuario'])->syncRoles([$role1]);

    }
}
