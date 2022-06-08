@extends('layouts.app')
@section('title',"Medicos")
@section('content')
	<div class="card">
		<div class="card-header text-center">
        <h4 class="title">Ficha Medicos</h4>
    </div>
		<table class="table table-responsive table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>NOMBRE</th>
					<th>DOCUMENTO</th>
					<th class="text-center">EMAIL</th>
					<th>PROFESION</th>
					<th>TELEFONO</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				@foreach($medicos as $medico)
					<tr>
						<td>{{$medico->id}}</td>
						<td>{{$medico->nombre}}</td>
						<td>{{$medico->documento}}</td>
						<td>{{$medico->email}}</td>
						<td>{{$medico->profesion}}</td>
						<td>{{$medico->tel_celular}}</td>
						<td class="td-actions text-center" style="margin:0;padding:0;">
							<a style="margin:0;padding:0;" href="{{ route('medicos.show', $medico->id)}}" rel="tooltip" data-toggle="tooltip" data-placement="top" class="btn btn-info btn-simple btn-md" value="1" data-original-title="Detalle Medico">
								<i class="ti-user"></i>
							</a>
							<a style="margin:0;padding:0;" href="{{route('medicos.edit', $medico->id)}}" rel="tooltip" data-toggle="tooltip" data-placement="top" class="btn btn-warning btn-simple btn-md" value="1" data-original-title="Editar Medico">
								<i class="ti-pencil-alt"></i>
							</a>
							<a style="margin:0;padding:0;" href="{{route('medicos.destroy', $medico->id)}}" rel="tooltip" data-toggle="tooltip" data-placement="left" class="btn btn-danger btn-simple btn-md" value="1" data-original-title="Eliminar Medico">
								<i class="ti-close"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{{ $medicos->links() }}
		</div>
	</div>
	<div class="floating animated bounceInRight text-right">
	  <button rel="tooltip" class="btn btn-warning btn-fab btn-icon" id="btn_cr" data-toggle="tooltip" data-placement="left" title="" style="background:#fc7323 !important;" data-original-title="Crear Medico">
	    <i class="material-icons">add</i>
	 	</button>
		</div>
@endsection
	
