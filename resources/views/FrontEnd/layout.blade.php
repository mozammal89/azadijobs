<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Azadi Jobs - HTML Template" />
	<meta property="og:title" content="Azadi Jobs - HTML Template" />
	<meta property="og:description" content="Azadi Jobs - HTML Template" />
	<meta property="og:image" content="Azadi Jobs - HTML Template" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{asset('FrontEnd/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('FrontEnd/images/logo1.png')}}" />
	
	<!-- PAGE TITLE HERE -->
	<title>@yield('title','Azadi Jobs')</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/templete.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/skin/skin-1.css')}}">
	<link rel="stylesheet" href="{{asset('FrontEnd/plugins/datepicker/css/bootstrap-datetimepicker.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Revolution Navigation Style -->

	@stack('css')

</head>
<body id="bg">
<div class="page-wraper">

	<!-- header -->
    @include('FrontEnd.partial.header')
    <!-- header END -->

    <!-- Main Content Start -->
    @yield('content')
	<!-- Main Content End   -->

	<!-- Footer Start -->
    @include('FrontEnd.partial.footer')
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('FrontEnd/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('FrontEnd/plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('FrontEnd/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('FrontEnd/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('FrontEnd/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('FrontEnd/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('FrontEnd/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('FrontEnd/plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
<script src="{{asset('FrontEnd/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->


@stack('js')

</body>

</html>