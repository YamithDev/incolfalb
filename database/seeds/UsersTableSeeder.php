<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{

  public function run()
  {
    $role_user = Role::where('name', 'medico')->first();
    $role_admin = Role::where('name', 'admin')->first();

    $user = new User();
    $user->name = 'Medico';
    $user->email = 'user@example.com';
    $user->password = bcrypt('secret');
    $user->save();
    $user->roles()->attach($role_user);
    
    $user = new User();
    $user->name = 'Admin';
    $user->email = 'admin@example.com';
    $user->password = bcrypt('secret');
    $user->save();
    $user->roles()->attach($role_admin);
  }
}
