@extends('layouts.app')
@section('title',"Pacientes")
@section('content')
	<div class="card">
		<div class="card-header text-center">
        <h4 class="title">Ficha Pacientes</h4>
    </div>
		<div class="col-sm-4 col-sm-offset-8">
			@if (Session::has('message'))
				<h4 class="text-right alert alert-success animated fadeInLeft" style="text-transform: capitalize;color:white;">{{ Session::get('message') }}</h4>
			@endif
		</div>		
    @if ($pacientes->isNotEmpty())
		<table class="table table-responsive table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>ORDEN</th>
					<th>NOMBRE</th>
					<th>DOCUMENTO</th>
					<th class="text-center">IPS</th>
					<th>CONDICION</th>
					<th>TELEFONO</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pacientes as $paciente)
					<tr>
						<td>{{ $paciente->id }}</td>
						<td>{{$paciente->orden}}</td>
						<td>{{$paciente->nombre}}</td>
						<td>{{$paciente->documento}}</td>
						<td>{{$paciente->ips}}</td>
						<td>{{$paciente->condicion}}</td>
						<td>{{$paciente->tel_celular}}</td>
						<td class="td-actions text-center" style="margin:0;padding:0;">
							<a style="margin:0;padding:0;" href="{{route("pacientes.show","{$paciente->id}")}}" rel="tooltip" data-toggle="tooltip" data-placement="top" class="btn btn-info btn-simple btn-md" data-original-title="Detalle Paciente">
								<i class="ti-user"></i>
							</a>
							<a style="margin:0;padding:0;" href="{{route("pacientes.edit","{$paciente->id}")}}" rel="tooltip" data-toggle="tooltip" data-placement="top" class="btn btn-warning btn-simple btn-md" data-original-title="Editar Paciente">
								<i class="ti-pencil-alt"></i>
							</a>
							<form action="{{ route("pacientes.destroy","{$paciente->id}") }}" method="post">
								{{ method_field('DELETE') }}
								{!! csrf_field() !!}
								<button type="submit" style="margin:0;padding:0;" rel="tooltip" data-toggle="tooltip" data-placement="left" class="btn btn-danger btn-simple btn-md" data-original-title="Eliminar Paciente">
								<i class="ti-close"></i>
								</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<h4 class="title text-center">No hay Pacientes registrados aun...</h4>
		@endif
	</div>
	<div class="text-center">
		{{ $pacientes->links() }}
	</div>


		<div class="floating animated bounceInRight text-right">
		  <a rel="tooltip" href="{{ route("pacientes.create") }}" class="btn btn-warning btn-fab btn-icon" id="btn_cr" data-toggle="tooltip" data-placement="left" title="" style="background:#fc7323 !important;" data-original-title="Crear Paciente">
		    <i class="material-icons">add</i>
		 	</a>
	 	</div>
	
@endsection
	
