<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>webdesigna.es - Clubfutbol</title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset("assets/css/icons/icomoon/styles.css")}}" type="text/css" rel="stylesheet">
	<link href="{{ asset("assets/css/icons/fontawesome/styles.min.css")}}" type="text/css" rel="stylesheet">
	<link href="{{ asset("assets/css/bootstrap.css")}}" type="text/css" rel="stylesheet">
	<link href="{{ asset("assets/css/core.css")}}" type="text/css" rel="stylesheet">
	<link href="{{ asset("assets/css/components.css")}}" type="text/css" rel="stylesheet">
	<link href="{{ asset("assets/css/colors.css")}}" type="text/css" rel="stylesheet">
	<link href="{{ asset("assets/css/smoke.min.css")}}" type="text/css" rel="stylesheet">
</head>
<body onload="initialize()">
	   @yield('sidebar')
		<div class="content-wrapper">
			<div class="content">
				@if (session('info'))
						<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">  {{ session('info')}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
						</div>
				@endif
				{{-- @if (count($errors))
				<div class="row">
					<div class="col-12">
						<div class="alert alert-danger no-border">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				@endif --}}
		   		@yield('content')
			</div>
		</div>
	</div>
<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset("assets/js/plugins/loaders/pace.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/core/libraries/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/core/libraries/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/loaders/blockui.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("assets/js/plugins/tables/datatables/datatables.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/tables/datatables/extensions/responsive.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/tables/datatables/extensions/buttons.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("assets/js/core/libraries/jquery_ui/interactions.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/forms/selects/select2.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("assets/js/plugins/forms/styling/uniform.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("assets/js/plugins/ui/moment/moment.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/pickers/daterangepicker.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/pickers/pickadate/picker.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins/pickers/pickadate/picker.date.js")}}"></script>

<script type="text/javascript" src="{{ asset("assets/js/plugins/ui/fab.min.js")}}"></script>

<script type="text/javascript" src="{{ asset("assets/js/core/app.js")}}"></script>

{{-- <script type="text/javascript" src="{{ asset("assets/js/pages/datatables_responsive.js")}}"></script> --}}
<script type="text/javascript" src="{{ asset("assets/js/pages/datatables_extension_buttons_html5.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/pages/form_select2.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/pages/form_inputs.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/pages/picker_date.js")}}"></script>
<script type="text/javascript" src="{{ asset("assets/js/pages/extra_fab.js")}}"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmKx5U8g6NtxV7OwjmRDF_fsR0hdp_gYw&libraries=places" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset("assets/js/plugins/ui/ripple.min.js")}}"></script>

</body>
</html>

{{-- var e = $(".to-top");
    $(window).scroll(function(t) {
        var n = $(this).scrollTop();
        n > 500 ? e.fadeIn() : e.fadeOut()
    }), e = $(".to-top").on("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800)
    }) --}}
