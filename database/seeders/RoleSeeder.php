<?php

namespace Database\Seeders;

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
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Profesor']);

       Permission::create(['name' => 'profesor.categories.index'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'profesor.categories.alumnos'])->syncRoles([$role1, $role2]);;
       Permission::create(['name' => 'profesor.categories.evaluacion'])->syncRoles([$role1, $role2]);;
       Permission::create(['name' => 'profesor.categories.rendir'])->syncRoles([$role1, $role2]);;

       Permission::create(['name' => 'profesor.tags.index'])->syncRoles([$role1, $role2]);;
       Permission::create(['name' => 'profesor.tags.alumnos'])->syncRoles([$role1, $role2]);;
       Permission::create(['name' => 'profesor.tags.evaluacion'])->syncRoles([$role1, $role2]);;
       Permission::create(['name' => 'profesor.tags.rendir'])->syncRoles([$role1, $role2]);;
       
    }
}
