@extends('FrontEnd.layout')

@push('css')


@endpush


@section('content')
<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/FrontEnd/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Detail</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Job Detail</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
            @foreach($latestJobDetails as $latestJob)
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="/FrontEnd/images/blog/grid/pic1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Job Details</h4>
											<ul>
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Address</strong><span class="text-black-light">{{$latestJob->divisions->division_name}}</span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salary</strong>{{$latestJob->salary}}</li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experience</strong>{{$latestJob->experience}}</li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30">{{$latestJob->job_title}}</a>
								</h3>
								<ul class="job-info">
									<li><strong>Category</strong> {{$latestJob->category2->job_category_name}}</li>
									<li><strong>Deadline:</strong> {{$latestJob->application_deadline}}</li>
									<li><i class="ti-location-pin text-black m-r5"></i> {{$latestJob->divisions->division_name}} </li>
								</ul>
								<br>
								<h5 class="font-weight-600">Job Description</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $latestJob->job_context !!}</textarea>
								<br>
								<h5 class="font-weight-600">Job Responsibilities</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $latestJob->job_responsibilities !!}</textarea>
								<br>
								<h5 class="font-weight-600">Educational Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $latestJob->educational_requirements !!}</textarea>
								<br>
								<h5 class="font-weight-600">Additional Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $latestJob->additional_requirements !!}</textarea>
								<br>


								<a href="#" class="site-button">Apply This Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
            <!-- Job Detail -->
			<!-- Our Jobs -->
			
			<div class="section-full content-inner">
				<div class="container">
					<div class="row">
						@foreach($jobDetails as $all_jobs)
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">{{$all_jobs->job_title}}</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li><i class="ti-location-pin"></i> {{$all_jobs->divisions->division_name}}</li>
                                            <br>
                                            <li><i class="ti-shield"></i><a href="#">{{$all_jobs->experience}}</a></li>
                                            <br>                  
                                            <li><i class="ti-money"></i><a href="#">{{$all_jobs->salary}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                     
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- Our Jobs END -->
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush