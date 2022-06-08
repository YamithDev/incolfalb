<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
      'remember_token' => str_random(10),
      'tipo_documento'=> $faker->randomElement($array = array ('cc', 'ti', 'ce', 'pp')),
			'documento' => $faker->randomNumber($nbDigits = 6, $strict = true),
			'nombre'=> $faker->name,
      'edad'=> $faker->randomNumber($nbDigits = 2, $strict = false),
			'sexo'=> $faker->randomElement($array = array ('M','F')),
			'sexo'=> $faker->randomElement($array = array ('M','F')),
			'fecha_nacimiento'=> $faker->date($format = 'Y-m-d'),
			'tipo_sangre'=> $faker->randomElement($array = array ('O+','O-','A+','A-','B+','B-','AB+','AB-')),
			'profesion'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'direccion'=> $faker->streetAddress,
			'dpto_residencia'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'mun_residencia'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
			'tel_celular'=> $faker->e164PhoneNumber,
			'tel_fijo'=> $faker->tollFreePhoneNumber,
			'ruta'=> $faker->imageUrl($width = 640, $height = 480)
      
    ];
});
