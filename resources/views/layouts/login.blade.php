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
		
		<div class="wrapper wrapper-full-page">
      <div class="full-page login-page" data-image="">
        <div class="content">
          <div class="container">
             @yield('content')
          </div>
        </div>
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