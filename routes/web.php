<?php

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pacientes', 'PacienteController@index')->name('pacientes.index');
Route::get('/pacientes/{paciente}', 'PacienteController@show')->where('paciente','[0-9]+')->name('pacientes.show');
Route::get('/pacientes/nuevo', 'PacienteController@create')->name('pacientes.create');
Route::post('/pacientes', 'PacienteController@store')->name('pacientes.store');
Route::get('/pacientes/{paciente}/edit', 'PacienteController@edit')->name('pacientes.edit');
Route::put('/pacientes/{paciente}', 'PacienteController@update')->name('pacientes.update');
Route::delete('/pacientes/{paciente}', 'PacienteController@destroy')->name('pacientes.destroy');
Route::resource('medicos', 'MedicoController');
Route::resource('citas', 'CitaController');
Route::resource('busquedas', 'BusquedaController');
Route::resource('reportes', 'ReporteController');
Auth::routes();
