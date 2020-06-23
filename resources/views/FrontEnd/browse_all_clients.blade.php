@extends('FrontEnd.layout')

@push('css')



@endpush

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(../FrontEnd/images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Browse Clients</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{route('index')}}">Home</a></li>
						<li>Browse Clients</li>
					</ul>
				</div>
				<!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
		<!-- Browse Jobs -->
		<div class="section-full bg-white browse-job content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<h5 class="widget-title font-weight-700 text-uppercase" style="background-color: #1e6982;height: 40px;padding-top: 6px;padding-left: 16px;color: #fff;border-radius: 5px;margin-bottom: 30px;" >All Clients</h5>
							<div class="container">
								<div class="row">
									@foreach($jobProvider as $all_job_provider)
									<div class="col-md-3" >
									<div class="item-box-blog" style="padding:0px;padding: 0px;margin-bottom: 15px;">
									<div class="item-box-blog-image" style="padding:20px">
										<!--Date-->
									
										<!--Image-->
										<figure> <img alt="" src="/images/{{$all_job_provider->provider_image}}"  style="width:100%; height:150px;"> </figure>
									</div>
									<div class="item-box-blog-body" style="text-align:left; background-color: #e6eafb;">
										<!--Heading-->
										<div class="item-box-blog-heading">
										<a href="#" tabindex="0">
											<h5>{{$all_job_provider->com_name}}</h5>
										</a>
										</div>
										<!--Data-->
										
										<!--Text-->
										<div class="item-box-blog-text" style="margin-left:10px;">
										<p style="margin-bottom:0px;"><span><i class="fa fa-phone-square" aria-hidden="true"></i>

 										</span> {{$all_job_provider->phn_number}}</p>

										 <p style="margin-bottom:0px;"><span><i class="fa fa-envelope" aria-hidden="true"></i>

 										</span> {{$all_job_provider->email}}</p>

										<p style="margin-bottom:0px;"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
 										</span> {{$all_job_provider->com_address}}</p>
										</div>
										<!--Read More Button-->
									</div>
									</div>
									</div>
									@endforeach
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Browse Jobs END -->
	</div>
</div>
<!-- Content END-->


@endsection

@push('js')


@endpush



