@extends('layouts.app')
@section('title',"Detalle | Paciente")
@section('content')
	<div class="col-md-12">
		<div class="card">
			<div class="card-header text-center">
				<h4>{{ $paciente->nombre }}</h4>
			</div>
			<div class="card-content">
				<div class="container-fluid">
					<div class="form-group col-md-3">
						<label class="control-label"># de Orden</label>
						<input type="text" name="orden" class="form-control" value="{{ $paciente->orden }}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Tipo de Documento</label>
						<input type="text" name="tipo_documento" class="form-control" value="{{ $paciente->tipo_documento }}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label"># Documento</label>
						<input type="number" min="0" class="form-control" name="documento" value="{{$paciente->documento}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Nombre</label>
						<input type="text" class="form-control" name="nombre" value="{{$paciente->nombre}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Edad</label>
						<input type="number" class="form-control" name="edad" value="{{$paciente->edad}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Sexo</label>
						<input type="text" name="sexo" class="form-control" value="{{ $paciente->sexo }}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Fecha de Nacimiento</label>
						<input type="date" name="fecha_nacimiento" class="form-control datetimepicker" placeholder="Seleccione Fecha de nacimiento" value="{{$paciente->fecha_nacimiento}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Programa</label>
						<input type="text" name="progama" class="form-control" value="{{$paciente->programa}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Regimen</label>
						<input type="text" name="regimen" class="form-control" value="{{$paciente->regimen}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">IPS</label>
						<input type="text" name="ips" class="form-control" value="{{$paciente->ips}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Basica</label>
						<input type="text" name="basica" class="form-control" value="{{$paciente->basica}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Tipo de Sangre</label>
						<input type="text" name="tipo_sangre" class="form-control" value="{{ $paciente->tipo_sangre }}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Profesion</label>
						<input type="text" class="form-control" name="profesion" value="{{$paciente->profesion}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Dirección</label>
						<input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Correo Electrónico</label>
						<input type="email" class="form-control" name="email" value="{{$paciente->email}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Telefono Celular</label>
						<input type="text" class="form-control" name="tel_celular" value="{{$paciente->tel_celular}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Telefono fijo</label>
						<input type="text" class="form-control" name="tel_fijo" value="{{$paciente->tel_fijo}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Departamento de Residencia</label>
						<input type="text" class="form-control" name="departamento_residencia" value="{{$paciente->departamento_residencia}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Municipio de Residencia</label>
						<input type="text" class="form-control" name="municipio_residencia" value="{{$paciente->municipio_residencia}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Contacto Familiar</label>
						<input type="text" class="form-control" name="contacto_familiar" value="{{$paciente->contacto_familiar}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Condición</label>
						<input type="text" class="form-control" name="condicion" value="{{$paciente->condicion}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Patología</label>
						<input type="text" class="form-control" name="patologia" value="{{$paciente->patologia}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Antecedentes Familiares</label>
						<input type="text" class="form-control" name="antecedentes_familiares" value="{{$paciente->antecedentes_familiares}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Peso</label>
						<input type="text" class="form-control" name="peso" value="{{$paciente->peso}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label">Perímetro Abdominal</label>
						<input type="text" class="form-control" name="perimetro_abdominal" value="{{$paciente->perimetro_abdominal}}" readonly>
					</div>
					<div class="form-group col-md-3">
						<a style="margin-top: 25px;" class="btn btn-success" target="_blank" download="Historia-clinica" href="{{ $paciente->ruta }}" >
							<i class="ti-download"></i>  Descargar Historia
						</a>
					</div>
				</div>
			</div>
			<div class="card-footer text-center">
				<a href="{{ url('/pacientes') }}" class="btn btn-warning btn-fill btn-wd text-center btn-move-left" readonly>
					<i class="ti-arrow-left"></i>  Volver
				</a>
			</div>
		</div>
	</div>
@endsection