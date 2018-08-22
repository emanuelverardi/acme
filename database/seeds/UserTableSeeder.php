<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = Role::where('name', 'user')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $employee = new User();
        $employee->name = 'User';
        $employee->email = 'user@user';
        $employee->password = bcrypt('user');
        $employee->save();
        $employee->roles()->attach($role_user);

        $manager = new User();
        $manager->name = 'Admin';
        $manager->email = 'admin@admin';
        $manager->password = bcrypt('admin');
        $manager->save();
        $manager->roles()->attach($role_admin);
    }
}
