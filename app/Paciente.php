<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $fillable = [
		'orden',
		'tipo_documento',
		'documento',
		'nombre',
		'edad',
		'sexo',
		'fecha_nacimiento',
		'programa',
		'regimen',
		'ips',
		'basica',
		'tipo_sangre',
		'profesion',
		'direccion',
		'email',
		'tel_celular',
		'tel_fijo',
		'departamento_residencia',
		'municipio_residencia',
		'contacto_familiar',
		'condicion',
		'patologia',
		'antecedentes_familiares',
		'peso',
		'perimetro_abdominal',
		'ruta'
	];

}
