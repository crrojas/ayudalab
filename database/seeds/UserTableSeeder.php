<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Role;
use App\Institucion;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_superadmin  = Role::where('name', 'superadmin')->first();

        $admin = new User();
        $admin->name = "Admin Comedor";
        $admin->email = "admin@comedor.cl";
        $admin->password = bcrypt("muysecreta");
        $admin->id_institucion = 1;
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin = new User();
        $admin->name = "Admin Hogar Belen";
        $admin->email = "admin@hogarbelen.cl";
        $admin->password = bcrypt("muysecreta");
        $admin->id_institucion = 2;
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin = new User();
        $admin->name = "Admin Cifan";
        $admin->email = "admin@cifan.cl";
        $admin->password = bcrypt("muysecreta");
        $admin->id_institucion = 3;
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin = new User();
        $admin->name = "Admin H. Bella Existencia";
        $admin->email = "admin@bellaexistencia.cl";
        $admin->password = bcrypt("muysecreta");
        $admin->id_institucion = 4;
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
