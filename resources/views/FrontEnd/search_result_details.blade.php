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
							<li><a href="{{route('index')}}">Home</a></li>
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
            <form action="{{route('provider.jpPostDetails',$all_JobPost->id)}}" method="post">
            @csrf
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
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Address</strong><span class="text-black-light">{{$all_JobPost->divisions->division_name}}</span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salary</strong>{{$all_JobPost->salary}}</li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experience</strong>{{$all_JobPost->experience}}</li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30">{{$all_JobPost->job_title}}</a>
								</h3>
								<ul class="job-info">
									<li><strong>Category</strong> {{$all_JobPost->category2->job_category_name}}</li>
									<li><strong>Deadline:</strong> {{$all_JobPost->application_deadline}}</li>
									<li><i class="ti-location-pin text-black m-r5"></i> {{$all_JobPost->divisions->division_name}} </li>
								</ul>
								<br>
								<h5 class="font-weight-600">Job Description</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $all_JobPost->job_context !!}</textarea>
								<br>
								<h5 class="font-weight-600">Job Responsibilities</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $all_JobPost->job_responsibilities !!}</textarea>
								<br>
								<h5 class="font-weight-600">Educational Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $all_JobPost->educational_requirements !!}</textarea>
								<br>
								<h5 class="font-weight-600">Additional Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<textarea class="textarea_editor form-control" rows="5" style="background-color: white; border: none;" readonly="">{!! $all_JobPost->additional_requirements !!}</textarea>
								<br>


								<a href="{{route('seeker.applyjobs',$all_JobPost->id)}}" class="site-button">Apply This Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
            <!-- Job Detail -->
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush