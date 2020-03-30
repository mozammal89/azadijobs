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
							<li class="active">
								<a href="#">Home <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#" class="dez-page">Home 1</a></li>
									<li><a href="#" class="dez-page">Home 2</a></li>
								</ul>
							</li>
							<li>
								<a href="#">For Candidates <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#" class="dez-page">Browse Job</a></li>
									<li><a href="#" class="dez-page">companies</a></li>
									<li><a href="#" class="dez-page">Job Detail</a></li>
								</ul>
							</li>
							<li>
								<a href="#">For Employers <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#" class="dez-page">Browse Candidates</a></li>
									<li><a href="#" class="dez-page">Submit Resume</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#" class="dez-page">About Us</a></li>
									<li><a href="#" class="dez-page">Coming Soon</a></li>
									<li><a href="#" class="dez-page">Error 404</a></li>
									<li><a href="#" class="dez-page">Portfolio</a>
										<ul class="sub-menu">
											<li><a href="#" class="dez-page">Portfolio Grid 2 </a></li>
											<li><a href="#" class="dez-page">Portfolio Grid 3 </a></li>
											<li><a href="#" class="dez-page">Portfolio Grid 4 </a></li>
										</ul>
									</li>
									<li><a href="#" class="dez-page">Login</a></li>
									<li><a href="#" class="dez-page">Register</a></li>
									<li><a href="#" class="dez-page">Contact Us</a></li>

									@if(Auth::check())

									<li><a href="{{route('logout')}}" class="dez-page">Logout</a></li>

									@endif

									
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

										<li><a href="{{route('profile.jobseeker')}}" class="dez-page">Profile</a></li>
										<li><a href="{{route('jobseeker.cv')}}" class="dez-page">View CV</a></li>	

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
    </header>