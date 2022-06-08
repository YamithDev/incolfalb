@extends('layouts.app')
@section('title',"Editar | Paciente")
@section('content')
	<div class="col-md-12">
		<div class="card">
			<div class="card-header text-center">
				<h4>Editar Paciente</h4>
			</div>
			<form action="{{ route("pacientes.update","{$paciente->id}") }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ method_field('PUT') }}
				{!! csrf_field() !!}
				<fieldset>
					<div class="card-content">
						<div class="container-fluid">
							<div class="form-group col-md-3">
								<label class="control-label"># de Orden</label>
								<input type="text" name="orden" class="form-control" value="{{$paciente->orden}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Tipo de Documento</label>
								<select name="tipo_documento" class="btn btn-info">
									<option value="">seleccione</option>
									<option value="CC">CEDULA</option>
									<option value="TI">TARJETA DE IDENTIDAD</option>
									<option value="CE">CEDULA DE EXTRANJERIA</option>
									<option value="PP">PASAPORTE</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label class="control-label"># Documento</label>
								<input type="number" min="0" class="form-control" name="documento" value="{{$paciente->documento}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Nombre</label>
								<input type="text" class="form-control" name="nombre" value="{{$paciente->nombre}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Edad</label>
								<input type="number" class="form-control" name="edad" value="{{$paciente->edad}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Sexo</label><br>
								<select name="sexo" class="btn btn-info">
									<option value="">seleccione</option>
									<option value="M">MASCULINO</option>
									<option value="F">FEMENINO</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Tipo de Sangre</label>
								<select name="tipo_sangre" class="btn btn-info">
									<option value="">seleccione</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Fecha de Nacimiento</label>
								<input type="date" name="fecha_nacimiento" class="form-control datetimepicker" placeholder="Seleccione Fecha de nacimiento" value="{{$paciente->fecha_nacimiento}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Programa</label>
								<input type="text" name="programa" class="form-control" value="{{$paciente->programa}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Regimen</label>
								<input type="text" name="regimen" class="form-control" value="{{$paciente->regimen}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">IPS</label>
								<input type="text" name="ips" class="form-control" value="{{$paciente->ips}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Basica</label>
								<input type="text" name="basica" class="form-control" value="{{$paciente->basica}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Profesion</label>
								<input type="text" class="form-control" name="profesion" value="{{$paciente->profesion}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Dirección</label>
								<input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Correo Electrónico</label>
								<input type="email" class="form-control" name="email" value="{{$paciente->email}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Telefono Celular</label>
								<input type="text" class="form-control" name="tel_celular" value="{{$paciente->tel_celular}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Telefono fijo</label>
								<input type="text" class="form-control" name="tel_fijo" value="{{$paciente->tel_fijo}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Departamento de Residencia</label>
								<input type="text" class="form-control" name="departamento_residencia" value="{{$paciente->departamento_residencia}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Municipio de Residencia</label>
								<input type="text" class="form-control" name="municipio_residencia" value="{{$paciente->municipio_residencia}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Contacto Familiar</label>
								<input type="text" class="form-control" name="contacto_familiar" value="{{$paciente->contacto_familiar}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Condición</label>
								<select name="condicion">
									<option value="">seleccione</option>
									<option value="obeso no ancioso sin patologia">obeso no ancioso sin patologia</option>
									<option value="obeso no ancioso con patologia">obeso no ancioso con patologia</option>
									<option value="obeso ancioso sin patologia">obeso ancioso sin patologia</option>
									<option value="obeso ancioso con patologia">obeso ancioso con patologia</option>
									<option value="diabético no ancioso">diabético no ancioso</option>
									<option value="diabético ancioso">diabético ancioso</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Patología</label>
								<input type="text" class="form-control" name="patologia" value="{{$paciente->patologia}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Antecedentes Familiares</label>
								<input type="text" class="form-control" name="antecedentes_familiares" value="{{$paciente->antecedentes_familiares}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Peso</label>
								<input type="text" class="form-control" name="peso" value="{{$paciente->peso}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Perímetro Abdominal</label>
								<input type="text" class="form-control" name="perimetro_abdominal" value="{{$paciente->perimetro_abdominal}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Subir Historia</label>
								<input type="file" name="ruta" placeholder="Seleccione archivo" class="form-control-file">
							</div>
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="{{ url('/pacientes') }}" class="btn btn-warning btn-fill btn-wd text-center btn-move-left" >
							<i class="ti-arrow-left"></i>  Volver
						</a>
						<button type="submit" class="btn btn-success btn-fill btn-wd text-center btn-rotate" id="editPaciente"><i class="ti-save"></i>  Guardar
						</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@endsection