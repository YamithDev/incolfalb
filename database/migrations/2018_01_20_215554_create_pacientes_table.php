<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pacientes', function(Blueprint $table){
			$table->bigIncrements('id');
			$table->string('orden')->unique();
			$table->enum('tipo_documento',['cc', 'ti', 'ce', 'pp']);
			$table->string('documento');
			$table->string('nombre');
			$table->integer('edad');
			$table->enum('sexo', ['M', 'F']);
			$table->date('fecha_nacimiento');
			$table->string('programa');
			$table->string('regimen');
			$table->string('ips');
			$table->string('basica');
			$table->enum('tipo_sangre', ['O+','O-','A+','A-','B+','B-','AB+','AB-']);
			$table->string('profesion');
			$table->string('direccion');
			$table->string('email')->unique();
			$table->string('tel_celular');
			$table->string('tel_fijo');
			$table->string('departamento_residencia');
			$table->string('municipio_residencia');
			$table->string('contacto_familiar');
			$table->enum('condicion', [
				'obeso no ancioso sin patologia',
				'obeso no ancioso con patologia',
				'obeso ancioso sin patologia',
				'obeso ancioso con patologia',
				'diabético no ancioso',
				'diabético ancioso'
			]);
			$table->text('patologia')->nullable();
			$table->text('antecedentes_familiares')->nullable();
			$table->integer('peso');
			$table->string('perimetro_abdominal');
			$table->string('ruta')->nullable();
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
		Schema::dropIfExists('pacientes');
	}
}
