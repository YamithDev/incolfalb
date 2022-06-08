@extends('layouts.app')
@section('title','Página No encontrada')
@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="card">
			<div class="card-header text-center">
				<h4>Página No Encontrada</h4>
			</div>
			<div class="card-content">
				<img class="img-responsive" src="{{ asset('img/404.jpg') }}" alt="_error">
				<p>Lo sentimos la página que está solicitando, no ha sido encontrada</p>
			</div>
		</div>
	</div>
@endsection