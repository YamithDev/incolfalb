@extends('layouts.app')
@section('title','Bienvenido')
@section('content')
<div class="container">
	<div class="row">
		<div class="card col-md-8 col-md-offset-2">
			<div class="card-content">
				<div class="panel-heading text-center">
					<h1 class="title logo animated bounceInLeft" style="animation-duration: 1s;">
							Bienvenido
					</h1>
				</div>
				<div class="panel-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif

						<div class="logo text-center">
							<img class="animated fadeInUp" src="{{ asset('img/logo.png') }}" alt="_logo" style="animation-duration: 1.5s;">
						</div>
						<div class="logo text-center animated fadeInDown" style="animation-duration: 1s;">
							<h4 class="title">Incolfalab, Tu Asistente Ideal</h4>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
