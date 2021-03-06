		<meta charset="utf-8" />

		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logo4.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo3.png') }}">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

		<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/now-ui-dashboard.css?v=1.0.0') }}" rel="stylesheet" />

		<!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />

		<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>

		<link href="{{ asset('css/all.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/montserrat.css') }}" rel="stylesheet" />

		<script type ='text/javascript'>
		$(document).ready(function(){

			$('.container-fluid').hide(50);
		  $('.sidebar-wrapper').hide(50);

			$('.sidebar-wrapper').slideDown(4000);
			$('.container-fluid').fadeIn(1000);
		});
		</script>
