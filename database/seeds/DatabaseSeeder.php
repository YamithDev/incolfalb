<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call(PacientesTableSeeder::class);
    // La creación de datos de roles debe ejecutarse primero
    $this->call(RoleTableSeeder::class);
    // Los usuarios necesitarán los roles previamente generados
    $this->call(UsersTableSeeder::class);
  }
}
