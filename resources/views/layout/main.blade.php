<!doctype html>
<html lang="en">

<head>
	@include('headers.main')
	<title>CnP - @yield('title')</title>
</head>

<body>
	<div class="wrapper">
         <div class="sidebar" data-color="blue">
             <!--
         Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
     -->
							@include('layout.sidebar')
		</div>

	<div class="main-panel">
		@include('layout.topbar')

		<div class="panel-header panel-header-lg">
				<canvas id="bigDashboardChart"></canvas>
			</div>

			<div class="content">
				<div class="container-fluid">
						@yield('main-content')
					</div>
				</div>

				<footer class="footer">
					<div class="container-fluid">
						@include('layout.footer')
					</div>
				</footer>
			</div>

		</div>
</body>

</html>
