@extends('FrontEnd.layout')

@section('content')


<div class="page-content">
		<!-- Section Banner -->
		@foreach($coverImage as $all_cover_iamge)
		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(/cover_images/{{$all_cover_iamge->image}}) ">
		@endforeach

	
            <div class="container">
                <div class="dez-bnr-inr-entry align-m ">
					<div class="find-job-bx">
						<!-- <p class="site-button button-sm">Find Jobs, Employment & Career Opportunities</p> -->
						<h2 style="color: springgreen !important">Search Between More Then <br/> <span class="text-primary">{{$countJobPost}}</span> Open Jobs.</h2>
						<form class="dezPlaceAni" method="post" action="{{route('searchResult')}}">
							@csrf
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<!-- <label></label> -->
										<div class="input-group">
											<input type="text" class="form-control" name="job_title" placeholder="Job Title">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<select class="form-control custom-select-value" name="division_name">
                                            <option value="">Select Division</option>
                                        @foreach($search_division as $all_divisions)
                                            <option value="{{$all_divisions->id}}">{{$all_divisions->division_name}}</option>
                                        @endforeach            
                                        </select>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<select class="form-control custom-select-value" name="job_category_name">
                                            <option value="">Select Category</option>
                                        @foreach($search_job_category as $all_cats)
                                            <option value="{{$all_cats->id}}">{{$all_cats->job_category_name}}</option>
                                        @endforeach            
                                        </select>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<button type="submit" class="site-button btn-block">Find Job</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>

        </div>
		<!-- Section Banner END -->
        <!-- About Us -->
		<div class="section-full job-categories content-inner-2 bg-white" style="background-image:url(../images/pattern/pic1.html);">
			<div class="container">
				<div class="section-head d-flex head-counter clearfix">
					<div class="mr-auto">
						<h2 class="m-b5">Popular Categories</h2>
						<h6 class="fw3">20+ Catetories work wating for you</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">1800</h2>
						<h6 class="fw3">Jobs Posted</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">4500</h2>
						<h6 class="fw3">Tasks Posted</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">1500</h2>
						<h6 class="fw3">Freelancers</h6>
					</div>
				</div>
				
				<div class="row sp20">
					@foreach($jobCategory as $all_job_category)
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="fas fa-palette"></i></div>
								<a href="#" class="dez-tilte">{{$all_job_category->job_category_name}}</a>
								<p class="m-a0">Open Positions</p>
								<div class="rotate-icon"><i class="ti-location-pin"></i></div> 
							</div>
						</div>				
					</div>
					@endforeach
				
					<div class="col-lg-12 text-center m-t30">
						<a href="{{route('browseAllCat')}}" class="site-button button-md">All Categories <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us END -->
		<!-- Call To Action -->
		
		<!-- Call To Action END -->
		
		<!-- Call To Action -->
		<div class="section-full bg-white content-inner-2" style="margin-top: 5px !important; padding-top: 5px !important">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
					<div class="mr-auto">
						<h2 class="m-b5">Recent Jobs</h2>
						<h6 class="fw4 m-b0">20+ Recently Added Jobs</h5>
					</div>
					<div class="align-self-end">
						<a href="{{route('browseAllJobs')}}" class="site-button button-sm">Browse All Jobs <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						@foreach($jobPost as $all_job_post)
						<ul class="post-job-bx">
							<li>
								<a href="{{route('post.jobdetails',$all_job_post->id)}}">
									<div class="d-flex m-b30">
										<div class="job-post-company">
											<span><img src="{{asset('FrontEnd/images/logo/icon1.png')}}"/></span>
										</div>
										<div class="job-post-info">
											<h4>{{$all_job_post->job_title}}</h4>
											<ul>
												<li><i class="fa fa-map-marker"></i>{{$all_job_post->divisions->division_name}}</li>
												<li><i class="fa fa-bookmark-o"></i>{{$all_job_post->employment_status}}</li>
												<li><i class="fa fa-clock-o"></i>{{$all_job_post->application_deadline}}</li>
											</ul>
										</div>
									</div>
									<div class="d-flex">
										<div class="job-time mr-auto">
											<span>{{$all_job_post->employment_status}}</span>
										</div>
										<!-- <div class="salary-bx">
											<span>{{$all_job_post->salary}}</span>
										</div> -->
									</div>
									<!-- <span class="post-like fa fa-heart-o"></span> -->
								</a>							
							</li>
						</ul>
						@endforeach
						<!-- <div class="m-t30">
							<div class="d-flex">
								<a class="site-button button-sm mr-auto" href="#"><i class="ti-arrow-left"></i> Prev</a>
								<a class="site-button button-sm" href="#">Next <i class="ti-arrow-right"></i></a>
							</div>
						</div> -->
					</div>
					<div class="col-lg-3">
						<div class="sticky-top">
							@foreach($adsManagement as $all_ads)
							<div class="quote-bx">
								<div class="quote-info">
									<img src="/ads_images/{{$all_ads->image}}" alt="" width="100%" style="height: 300px !important">
									<h4>{{$all_ads->ads_cat_name}}</h4>
									<p>{{$all_ads->ads_cat_title}}</p>
									<a href="{{$all_ads->ads_ref_url}}" target="_blank" class="site-button">View Ad</a>
								</div>
							</div>
							<br>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
		<!-- Our Latest Blog -->
		<!-- Our Job -->
		<div class="section-full bg-white content-inner-2" style="margin-top: 5px !important; padding-top: 5px !important">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
					<div class="mr-auto">
						<h2 class="m-b5">Some Clients</h2>
						<h6 class="fw4 m-b0">20+ New Clients Addes</h5>
					</div>
					<div class="align-self-end">
						<a href="{{route('browseAllClients')}}" class="site-button button-sm">Browse All Clients <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                    	@foreach($jobProvider as $all_job_provider)
                      <div class="col-md-3" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                           
                            <!--Image-->
                            <figure> <img alt="" src="/images/{{$all_job_provider->provider_image}}" height="30%" width="30%"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>{{$all_job_provider->com_name}}</h5>
                              </a>
                            </div>
                            <!--Data-->
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <h5>{{$all_job_provider->com_address}}</h5>
                            </div>
                            <div class="mt"> <a href="{{$all_job_provider->com_web_link}}" target="_blank" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <div class="col-md-3" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                           
                            <!--Image-->
                            <figure> <img alt="" src="/images/{{$all_job_provider->provider_image}}" height="30%" width="30%"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>{{$all_job_provider->com_name}}</h5>
                              </a>
                            </div>
                            <!--Data-->
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <h5>{{$all_job_provider->com_address}}</h5>
                            </div>
                            <div class="mt"> <a href="{{$all_job_provider->com_web_link}}" target="_blank" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
			</div>
		</div>
		<!-- Our Job END -->	
		<!-- Our Latest Blog -->
	</div>



@endsection