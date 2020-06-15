@extends('FrontEnd.layout')

@push('css')


@endpush

@section('content')

<div class="section-full job-categories content-inner-2 bg-white" style="background-image:url(../images/pattern/pic1.html);">
	<div class="container">
		<div class="section-head d-flex head-counter clearfix">
			<div class="mr-auto">
				<h2 class="m-b5">Client List</h2>
			</div>
		</div>
		
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
			@endforeach
		</div>
	</div>
</div>


@endsection

@push('js')

@endpush