<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			// $table->enum('tipo_documento',['cc', 'ti', 'ce', 'pp']);
			// $table->string('documento');
			// $table->string('nombre');
			// $table->integer('edad');
			// $table->enum('sexo', ['M', 'F']);
			// $table->date('fecha_nacimiento');
			// $table->enum('tipo_sangre', ['O+','O-','A+','A-','B+','B-','AB+','AB-']);
			// $table->string('profesion');
			// $table->string('direccion');
			// $table->string('dpto_residencia');
			// $table->string('mun_residencia');
			// $table->string('tel_celular');
			// $table->string('tel_fijo');
			// $table->string('ruta');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
