<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zuniga Gravel and Sand Trading</title>
<<<<<<< HEAD
		<link rel="icon" href="images/favicon.png" type = "image/x-icon" />
=======
		<link rel="icon" href="{{ asset('images/favicon.png') }}" type = "image/x-icon" />
>>>>>>> 045746a82f1cd9f71355dd03e90c38dbce3c9bcd
		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- plugins:css -->
<<<<<<< HEAD
		<link rel="stylesheet" href="/vendors/feather/feather.css">
		<link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
		<link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
		<!-- endinject -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Plugin css for this page -->
		<link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
		<link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="/css/vertical-layout-light/style.css">
=======
		<link rel="stylesheet" href="{{ asset('/vendors/feather/feather.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendors/ti-icons/css/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendors/css/vendor.bundle.base.css') }}">
		<!-- endinject -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Plugin css for this page -->
		<link rel="stylesheet" href="{{ asset('/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{ asset('/vendors/ti-icons/css/themify-icons.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="{{ asset('/css/vertical-layout-light/style.css') }}">
>>>>>>> 045746a82f1cd9f71355dd03e90c38dbce3c9bcd
		<!-- endinject -->
		{{-- <script defer src="/js/alpinejs@3.10.3.min.js"></script> --}}
		<script
			src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js"
			defer
		></script>

		<meta name="csrf-token" content="{{ csrf_token() }}">
<<<<<<< HEAD

		{{-- -_- --}}
		<script type="text/javascript">
			const d = (_) => console.log(_);
		</script>
=======
>>>>>>> 045746a82f1cd9f71355dd03e90c38dbce3c9bcd
	</head>
	<body>
		@include('layouts.includes.navbar')
		<div class="container-fluid page-body-wrapper mt-3" >
			<nav class="sidebar sidebar-fixed sidebar-offcanvas" id="sidebar" >
				<ul class="nav" onclick="myFunction(event)" id='navList'>
					@include('layouts.admin-includes.sidebar')
				</ul>
			</nav>
			@yield('content')
		</div>
<<<<<<< HEAD
		<script src="/vendors/js/vendor.bundle.base.js"></script>
		<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
		<script src="/vendors/chart.js/Chart.min.js"></script>
		<script src="/vendors/datatables.net/jquery.dataTables.js"></script>
		<script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
		<script src="/js/dataTables.select.min.js"></script>
		<script src="/js/off-canvas.js"></script>
		<script src="/js/hoverable-collapse.js"></script>
		<script src="/js/template.js"></script>
		<script src="/js/settings.js"></script>
		<script src="/js/todolist.js"></script>
		<script src="/js/dashboard.js"></script>
		<script src="/js/Chart.roundedBarCharts.js"></script>
		<script type="text/javascript" src="/js/axios.min.js" ></script>
		{{-- <script type="text/javascript">
			var axios = axios.create({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')		
				}
			})
		</script> --}}
=======
		<script src="{{ asset('/vendors/js/vendor.bundle.base.js') }}"></script>
		<script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
		<script src="{{ asset('/vendors/chart.js/Chart.min.js') }}"></script>
		<script src="{{ asset('/vendors/datatables.net/jquery.dataTables.js') }}"></script>
		<script src="{{ asset('/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
		<script src="{{ asset('/js/dataTables.select.min.js') }}"></script>
		<script src="{{ asset('/js/off-canvas.js') }}"></script>
		<script src="{{ asset('/js/hoverable-collapse.js') }}"></script>
		<script src="{{ asset('/js/template.js') }}"></script>
		<script src="{{ asset('/js/settings.js') }}"></script>
		<script src="{{ asset('/js/todolist.js') }}"></script>
		<script src="{{ asset('/js/dashboard.js') }}"></script>
		<script src="{{ asset('/js/Chart.roundedBarCharts.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/axios.min.js') }}" ></script>

		@stack('scripts')
>>>>>>> 045746a82f1cd9f71355dd03e90c38dbce3c9bcd
	</body>
</html>