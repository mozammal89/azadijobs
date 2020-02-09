<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Azadi Jobs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('BackEnd/img/favicon.ico')}}">
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
   
  
    <link rel="stylesheet" href="{{asset('BackEnd/css/bootstrap.min.css')}}">
 
    <link rel="stylesheet" href="{{asset('BackEnd/css/font-awesome.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('BackEnd/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/owl.transitions.css')}}">
   
    <link rel="stylesheet" href="{{asset('BackEnd/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('BackEnd/css/normalize.css')}}">
 
    <link rel="stylesheet" href="{{asset('BackEnd/css/meanmenu.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('BackEnd/css/main.css')}}">
  
    <link rel="stylesheet" href="{{asset('BackEnd/css/educate-custon-icon.css')}}">
   
    <link rel="stylesheet" href="{{asset('BackEnd/css/morrisjs/morris.css')}}">
   
    <link rel="stylesheet" href="{{asset('BackEnd/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
 
    <link rel="stylesheet" href="{{asset('BackEnd/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/metisMenu/metisMenu-vertical.css')}}">
   
    <link rel="stylesheet" href="{{asset('BackEnd/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/calendar/fullcalendar.print.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('BackEnd/css/style.css')}}">
 
    <link rel="stylesheet" href="{{asset('BackEnd/css/responsive.css')}}">
 
    <script src="{{asset('BackEnd/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
   
    <!-- Start Sidebar -->
    @include('BackEnd.partial.sidebar')
    <!-- End Sidebar -->


    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
       <!-- Start Top Menu -->
       @include('BackEnd.partial.topmenu')
       <!-- End Top Menu -->
       
       <!-- Start Body  -->
       @yield('content')
       <!-- End Body -->

        <!-- Start Footer -->
        @include('Backend.partial.footer')
        <!-- End Footer -->
    </div>
     <!-- End Welcome area -->

    <!-- jquery
        ============================================ -->
    <script src="{{asset('BackEnd/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('BackEnd/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('BackEnd/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('BackEnd/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/main.js')}}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/tawk-chat.js')}}"></script>
</body>

</html>