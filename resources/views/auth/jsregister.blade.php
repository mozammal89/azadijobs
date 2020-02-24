<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Azadi Jobs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/normalize.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/main.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/form/all-type-forms.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3>Registration for Job Seeker</h3>
                
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{route('register.jobseeker')}}" id="loginForm" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="seeker_name" required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="seeker_address" required="">
                                </div>
                                
                                <div class="form-group col-lg-12">                                        
                                                                      
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="form-select-list">
                                            <label>Interested Area</label>
                                            <select class="form-control custom-select-value" name="interested_area">
                                                <option value="1">Govt Job</option>
                                                <option value="2">Private Job</option>
                                                <option value="3">IIT</option>
                                                <option value="4">Finance</option>
                                                <option value="5">CSE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="phn_number">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="seeker_email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                                
                                
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © 2020. All rights reserved. Powered by <a href="https://www.softbd.com">Soft Tech Innovation Ltd</a></p>
            </div>
        </div>   
    </div>
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
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/tab.js')}}"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/main.js')}}"></script>
   
</body>

</html>





