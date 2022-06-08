<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>@yield('title') - Incolfalb</title>
		<link rel="icon" href="{{asset("img/logo.png")}}">
		<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
		<link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
		<link rel="stylesheet" href="{{asset("css/paper-dashboard.css")}}">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{asset("css/themify-icons.css")}}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.6.2/sweetalert2.css" />
		<link rel="stylesheet" href="{{ asset("css/app.css") }}">
	</head>
	<body>
		<div class="wrapper">
			<div class="sidebar" data-background-color="brown" data-active-color="success">
				<div class="sidebar-wrapper">
					<div class="logo">
						<a href="#" class="simple-text logo-mini">
							AD
						</a>
						<a href="#" class="simple-text logo-normal">
							INCOLFALB
						</a>
					</div>
					<ul class="nav btn-izquierda">
						<li class="btn-move-left {{ Nav::isResource('/home') }}" data-contenido="home">
							<a href="{{url('/home')}}">
								<i class="ti-home"></i>
								<p>HOME</p>
							</a>
						<li class="btn-move-left {{ Nav::isResource('/pacientes') }}" data-contenido="pacientes">
							<a href="{{url('/pacientes')}}">
								<i class="ti-user"></i>
								<p>PACIENTES</p>
							</a>
						</li>
						<li class="btn-move-left {{ Nav::isResource('/medicos') }}" data-contenido="medicos">
							<a href="{{url('/medicos')}}">
								<i class="ti-clipboard"></i>
								<p>MEDICOS</p>
							</a>
						</li>
						<li class="btn-move-left {{ Nav::isResource('/citas') }}" data-contenido="citas">
							<a href="{{url('/citas')}}">
								{{-- <i class="fa fa-calendar-plus-o"></i> --}}
								<i class="ti-calendar"></i>
								<p>CITAS</p>
							</a>
						</li>
						<li class="btn-move-left {{ Nav::isResource('/busquedas') }}" data-contenido="consulta">
							<a href="{{ url('/busquedas') }}">
								{{-- <i class="fa fa-search"></i> --}}
								<i class="ti-search"></i>
								<p>BUSQUEDA Y CONSULTA</p>
							</a>
						</li>
						<li class="btn-move-left {{ Nav::isResource('/reportes') }}" data-contenido="reporte">
							<a href="{{ url('/reportes') }}">
								<i class="fa fa-file-pdf-o"></i>
								{{-- <i class="ti-more-alt"></i> --}}
								<p>REPORTE CITAS</p>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="main-panel">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-minimize">
							<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
						</div>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar bar1"></span>
								<span class="icon-bar bar2"></span>
								<span class="icon-bar bar3"></span>
							</button>
							<a class="navbar-brand" href="#">Incolfalb</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown btn-rotate">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="ti-settings"></i>
										<p>Administrador</p>
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Editar Informacion</a></li>
										<li><a href="#">Cambiar Contraseña</a></li>
										<li><a href="#">Salir</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<div class="content">
					<div class="container-fluid">
						<div class="row">
							@yield('content')
						</div>
					</div>
				</div>


				<footer class="footer">
					<div class="container-fluid">
						<div class="copyright pull-right">
							&copy; <script>document.write(new Date().getFullYear())</script>, by <a href="#">Yamid Cueto Mazo</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="{{asset('js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/bootstrap-checkbox-radio.js')}}"></script>
		<script src="{{asset('js/chartist.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
		<script src="{{asset('js/paper-dashboard.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.6.2/sweetalert2.min.js"></script>
		<script src="{{asset('js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('js/es6-promise-auto.min.js')}}"></script>
		<script src="{{asset('js/moment.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>
		<script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>	
		<script src="{{asset('js/bootstrap-switch-tags.js')}}"></script>
		<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('js/chartist.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-notify.js')}}"></script>
		<script src="{{asset('js/sweetalert2.js')}}"></script>
		<script src="{{asset('js/jquery-jvectormap.js')}}"></script>
		<script src="{{asset('js/jquery.bootstrap.wizard.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-table.js')}}"></script>
		<script src="{{asset('js/jquery.datatables.js')}}"></script>
		<script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/jquery.sharrre.js')}}"></script>
		<script src="{{asset('js/validaciones.js')}}"></script>
	</body>
</html>