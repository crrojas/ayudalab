<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'Un usuario administrador de institucion';
        $role_employee->save();
        $role_manager = new Role();
        $role_manager->name = 'superadmin';
        $role_manager->description = 'Un usuario administrador del sistema';
        $role_manager->save();
    }
}
