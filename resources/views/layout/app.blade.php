<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/png">
	<title>Rumahkorea</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	
	<link href="{{asset('global_assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet" />
	

  	@stack('after_style')


	<!-- Core JS files -->
	<script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('assets/js/app.js')}}"></script>
	<!-- /theme JS files -->
	<script src="{{asset('global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/datatables_data_sources.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/form_select2.js')}}"></script>

	<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('global_assets/js/demo_pages/picker_date.js')}}"></script>

	<!-- Input upload picture -->
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}" defer></script>
	<script type="text/javascript" src="{{asset('global_assets/js/demo_pages/uploader_bootstrap.js')}}" defer></script>
	<!-- /Input upload picture -->

	<!-- datepicker JS files -->
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/pickers/anytime.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
	<script type="text/javascript"  src="{{asset('global_assets/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/pickers/pickadate/legacy.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/plugins/notifications/jgrowl.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('global_assets/js/demo_pages/picker_date.js')}}"></script>
	<!-- /datepicker JS files -->
<!-- CKeditor JS files -->
	<script src="{{asset('global_assets/js/plugins/editors/ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/editor_ckeditor.js')}}"></script>
	<!-- /Ckeditor JS files -->

	<script src="{{asset('global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/styling/switch.min.js')}}"></script>

	<script src="{{asset('global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  	@stack('after_script')
	<script>
		$(document).ready(function () {
			var alertSuccess = '{{session('alertSuccess')}}'
			if (alertSuccess) {
				swal(alertSuccess, {
					icon: "success",
					timer: 2000,
				});
			}
		});
		$(document).ready(function () {
			var alertSuccess = '{{session('alertSuccessNoTimer')}}'
			if (alertSuccess) {
				swal(alertSuccess, {
					icon: "success",
					timer: false,
				});
			}
		});
		$(document).ready(function () {
			var alertWarning = '{{session('alertWarning')}}'
			if (alertWarning) {
				swal(alertWarning, {
					icon: "warning",
					timer: false,
				});
			}
		});
		
	</script>


</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="{{route('home')}}" class="d-inline-block">
				<!-- <img src="../../../../global_assets/images/logo_light.png" alt=""> -->
			  <img src="{{asset('frontend/template/img/logoruko.png')}}" style="height: 40px" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<span>{{Auth::user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{route('profile.index')}}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
							<i class="icon-switch2"></i>Logout
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">
    @include('layout.sidebar')


		<!-- Main content -->
		<div class="content-wrapper">
			@if (session('status'))
				<div class="alert bg-success text-white alert-styled-left alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<span class="font-weight-semibold">Well done!</span> {{ session('status') }}
				</div>
			@endif
			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						@yield('title')
					</div>
				</div>
				
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							@yield('breadcrumb')							
						</div>
					</div>
					
				</div>
			</div>
			<!-- /page header -->
			<!-- Content area -->
			<div class="content">
        		@yield('content')
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; {{\Carbon\Carbon::now()->format('Y')}} <a href="http://rumahkorea.id/">rumahkorea.id</a> 
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<!-- <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	{{-- @include('sweetalert::alert') --}}
</body>
</html>
