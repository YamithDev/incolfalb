@extends('layouts.app')
@section('title',"Crear | Paciente")
@section('content')
	<div class="col-md-12">
		<div class="card">
			<div class="card-header text-center">
				<h4>Crear Paciente</h4>
			</div>
			<form action="{{ url('pacientes') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<fieldset>
					@if ($errors->any())
						<div id="ERROR_COPY" class="col-sm-4 col-sm-offset-8 alert alert-danger animated fadeInLeft" style=" color:white;">
							<h6 class="text-right" style="text-transform: capitalize;">Por favor corrige los Errores marcados con *</h6>
						</div>
					@endif
					<div class="card-content">
						<div class="container-fluid">
							<div class="form-group col-md-3">
								<label class="control-label"># de Orden</label>
								<input type="text" name="orden" class="form-control" placeholder="Número de orden" value="{{ old('orden') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('orden')}}" >
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Tipo de Documento</label>
								<select name="tipo_documento" class="btn btn-info" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('tipo_documento')}}">
									<option value="">seleccione</option>
									<option value="CC">CEDULA</option>
									<option value="TI">TARJETA DE IDENTIDAD</option>
									<option value="CE">CEDULA DE EXTRANJERIA</option>
									<option value="PP">PASAPORTE</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label class="control-label"># Documento</label>
								<input type="number" min="0" class="form-control" name="documento" placeholder="Número de documento" value="{{ old('documento') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('documento')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Nombre</label>
								<input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" value="{{ old('nombre') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('nombre')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Edad</label>
								<input type="number" min="0" class="form-control" name="edad" placeholder="edad" value="{{ old('edad') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('edad')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Sexo</label><br>
								<select name="sexo" class="btn btn-info" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('sexo')}}">
									<option value="">seleccione</option>
									<option value="M">MASCULINO</option>
									<option value="F">FEMENINO</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Tipo de Sangre</label>
								<select name="tipo_sangre" class="btn btn-info" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('tipo_sangre')}}">
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
								<input type="input" name="fecha_nacimiento" class="form-control datepicker" placeholder="Seleccione Fecha de nacimiento" value="{{ old('fecha_nacimiento') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('fecha_nacimiento')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Programa</label>
								<input type="text" name="programa" placeholder="programa" class="form-control" value="{{ old('programa') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('programa')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Regimen</label>
								<input type="text" name="regimen" placeholder="Régimen" class="form-control" value="{{ old('regimen') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('regimen')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">IPS</label>
								<input type="text" name="ips" placeholder="Ips" class="form-control" value="{{ old('ips') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('ips')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Basica</label>
								<input type="text" name="basica" placeholder="Básica" class="form-control" value="{{ old('basica') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('basica')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Profesion</label>
								<input type="text" class="form-control" name="profesion" placeholder="Profesión" value="{{ old('profesion') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('profesion')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Dirección</label>
								<input type="text" class="form-control" name="direccion" placeholder="Direccción" value="{{ old('direccion') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('direccion')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Correo Electrónico</label>
								<input type="email" class="form-control" placeholder="ejemplo@mail.com" name="email" value="{{ old('email') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('email')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Telefono Celular</label>
								<input type="text" class="form-control" name="tel_celular" placeholder="Telefono Celular" value="{{ old('tel_celular') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('tel_celular')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Telefono fijo</label>
								<input type="text" class="form-control" placeholder="Telefono Fijo" name="tel_fijo" value="{{ old('tel_fijo') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('tel_fijo')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Condición</label>
								<select name="condicion" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('condicion')}}">
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
								<label class="control-label">Departamento de Residencia</label>
								<input type="text" class="form-control" name="departamento_residencia" placeholder="Departamento" value="{{ old('departamento_residencia') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('departamento_residencia')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Municipio de Residencia</label>
								<input type="text" class="form-control" placeholder="Municipio" name="municipio_residencia" value="{{ old('municipio_residencia') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('municipio_residencia')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Contacto Familiar</label>
								<input type="text" class="form-control" placeholder="Contacto Familiar" name="contacto_familiar" value="{{ old('contacto_familiar') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('contacto_familiar')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Patología</label>
								<input type="text" class="form-control" name="patologia" placeholder="Patología" value="{{ old('patologia') }}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Antecedentes Familiares</label>
								<input type="text" class="form-control" name="antecedentes_familiares" placeholder="Antecedentes" value="{{ old('antecedentes_familiares') }}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Peso</label>
								<input type="text" class="form-control" name="peso" placeholder="peso" value="{{ old('peso') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('peso')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Perímetro Abdominal</label>
								<input type="text" class="form-control" name="perimetro_abdominal" placeholder="Perímetro Abdominal" value="{{ old('perimetro_abdominal') }}" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{{$errors->first('perimetro_abdominal')}}">
							</div>
							<div class="form-group col-md-3">
								<label class="control-label">Subir Historia</label>
								<input type="file" name="ruta" placeholder="Seleccione archivo" class="form-control-file">
							</div>
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="{{ url('/pacientes') }}" class="btn btn-warning btn-fill btn-wd text-center btn-move-left">
							<i class="ti-arrow-left"></i>Volver
						</a>
						<button type="submit" class="btn btn-success btn-fill btn-wd text-center btn-rotate" id="crearPaciente"><i class="ti-save"></i>  Guardar
						</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@endsection