<?php

use Faker\Generator as Faker;

$factory->define(App\Paciente::class, function (Faker $faker) {
    return [
			'tipo_documento'=> $faker->randomElement($array = array ('cc', 'ti', 'ce', 'pp')),
			'documento' => $faker->randomNumber($nbDigits = 6, $strict = true),
			'nombre'=> $faker->name,
			'edad'=> $faker->randomNumber($nbDigits = 2, $strict = false),
			'sexo'=> $faker->randomElement($array = array ('M','F')),
			'fecha_nacimiento'=> $faker->date($format = 'Y-m-d'),
			'programa'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'regimen'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'ips'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'basica'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'tipo_sangre'=> $faker->randomElement($array = array ('O+','O-','A+','A-','B+','B-','AB+','AB-')),
			'profesion'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'direccion'=> $faker->streetAddress,
			'email'=> $faker->safeEmail,
			'tel_celular'=> $faker->e164PhoneNumber,
			'tel_fijo'=> $faker->tollFreePhoneNumber,
			'departamento_residencia'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'municipio_residencia'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'contacto_familiar'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'condicion'=> $faker->randomElement($array = array (
				'obeso no ancioso sin patologia',
				'obeso no ancioso con patologia',
				'obeso ancioso sin patologia',
				'obeso ancioso con patologia',
				'diabético no ancioso',
				'diabético ancioso'
			)),
			'patologia'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'antecedentes_familiares'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'peso'=> $faker->randomNumber($nbDigits = 6, $strict = true),
			'perimetro_abdominal'=> $faker->randomNumber($nbDigits = 6, $strict = true),
			'orden'=> $faker->randomNumber($nbDigits = 6, $strict = true),
			'ruta'=> $faker->imageUrl($width = 640, $height = 480)
    ];
});
