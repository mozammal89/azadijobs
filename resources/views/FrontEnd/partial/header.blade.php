<header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">

                    <!-- website logo Start-->
                    @include('FrontEnd.partial.header_logo')
                    <!-- website logo End -->
                    
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">                  
                        	@if(Auth::check())
                        	<a href="{{route('logout')}}" class="site-button">Logout</a>

	                        	@else
	                            <a id="reg" href="#" class="site-button"><i class="fa fa-user"></i> Sign Up</a>

		                            @if (Route::has('register'))
		                            <a id="jp" class="btn btn-primary" style="display: none;color: #fff" href="{{ route('register.jobprovider') }}">Job Provider</a>
		                            <a id="js" class="btn btn-warning" style="display: none;color: #fff" href="{{ route('registration.jobseeker') }}">Job Seeker</a>
		                        	@endif

	                        	<a href="{{ route('login') }}" class="site-button"><i class="fa fa-lock"></i> login</a>
                            @endif
                            

                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                           	<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="sub-menu">
								<a href="#">Categories <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('browseAllCat')}}" class="dez-page">Browes Categories</a></li>
								</ul>
							</li>
							<li class="sub-menu">
								<a href="#">Jobs <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('browseAllJobs')}}" class="dez-page">Browse Jobs</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Trainings <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('training')}}" class="dez-page">Training Lists</a></li>
									
								</ul>
							</li>
							<li class="sub-menu">
								<a href="#">Clients <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('browseAllClients')}}" class="dez-page">Browse Clients</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{route('browseAllCat')}}" class="dez-page">Categories</a></li>
									<li><a href="{{route('browseAllJobs')}}" class="dez-page">Jobs</a></li>
									<li><a href="{{route('training')}}" class="dez-page">Trainings</a></li>
									<!-- <li><a href="#" class="dez-page">Portfolio</a>
										<ul class="sub-menu">
											<li><a href="#" class="dez-page">Portfolio Grid 2 </a></li>
											<li><a href="#" class="dez-page">Portfolio Grid 3 </a></li>
											<li><a href="#" class="dez-page">Portfolio Grid 4 </a></li>
										</ul>
									</li> -->
									<li><a href="{{route('browseAllClients')}}" class="dez-page">Clients</a></li>

									@if(Auth::check())
                        				<li><a href="{{route('logout')}}" class="dez-page">Logout</a></li>

                        				@else
                        				<li><a id="regNew" href="#" class="dez-page"> Sign Up</a></li>

				                            @if (Route::has('register'))
				                            <li><a id="jpNew" class="dez-page" style="display: none;" href="{{ route('register.jobprovider') }}">Job Provider</a></li>
				                            <li><a id="jsNew" class="dez-page" style="display: none;" href="{{ route('registration.jobseeker') }}">Job Seeker</a></li>
				                        	@endif

			                        	<li><a href="{{ route('login') }}" class="dez-page">Login</a></li>

		                            @endif

									<!-- <li><a href="#" class="dez-page">Register</a></li> -->

									
								</ul>
							</li>
							<li>
								@if(Auth::check())
								<a href="#">Profile<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									
									@if(Auth::user()->role_id==3)

									<li><a href="{{route('profile.jobprovider')}}" class="dez-page">Profile</a></li>
									<li><a href="{{route('provider.jpsetting')}}" class="dez-page">Setting</a></li>

										@else		

										<li><a href="{{route('seeker.jobseekerProfile')}}" class="dez-page">Profile</a></li>
										<li><a href="{{route('seeker.jobseekerCv')}}" class="dez-page">View Resume</a></li>
										<li><a href="{{route('seeker.jobseekerCvUpload')}}" class="dez-page">Upload Resume</a></li>	
										<li><a href="{{route('seeker.jsChangePassword')}}" class="dez-page">Change Password</a></li>

										@endif

									@endif
								</ul>
							</li>
						</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		    $(document).ready(function(){
		      $("#reg").click(function(){
		        $("#js").css("display","");
		        $("#jp").css("display","");
		        $("#reg").css("display","none");
		      })
		    });
		</script>
		<script>
		    $(document).ready(function(){
		      $("#regNew").click(function(){
		        $("#jsNew").css("display","");
		        $("#jpNew").css("display","");
		        $("#regNew").css("display","none");
		      })
		    });
		</script>
    </header>