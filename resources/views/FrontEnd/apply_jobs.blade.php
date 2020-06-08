@extends('FrontEnd.layout')

@push('css')


@endpush

@section('content')


<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="padding-bottom: 200px; padding-top: 100px;">
	    <div class="all-form-element-inner">
	        <form action="{{route('seeker.applyjobsStore',$job_post->id)}}" method="post">
	        	@csrf
	            <div class="form-group-inner">
	                <div class="row">
	                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                        <label class="login2 pull-right pull-right-pro">Job Title</label>
	                    </div>
	                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                        <input type="text" name="job_title" value="{{$job_post->job_title}}" class="form-control" style="margin-bottom: 25px;" readonly="" />

	                        <input type="hidden" name="job_post_id" value="{{$job_post->id}}" class="form-control" style="margin-bottom: 25px;" readonly="" />

	                        <input type="hidden" name="provider_id" value="{{$job_post->provider_id}}" class="form-control" style="margin-bottom: 25px;" readonly="" />
	                    </div>
	                </div>
	            </div>
	            <div class="form-group-inner">
	                <div class="row">
	                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                        <label class="login2 pull-right pull-right-pro">Provider Name</label>
	                    </div>
	                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                        <input type="text" name="provider_id" value="{{$job_post->providers->name}}" class="form-control" style="margin-bottom: 25px;" readonly="" />
	                    </div>
	                </div>
	            </div>
	            <div class="form-group-inner">
	                <div class="row">
	                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                        <label class="login2 pull-right pull-right-pro">Expected Salary</label>
	                    </div>
	                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                        <input type="text" name="expected_salary" class="form-control" />
	                    </div>
	                </div>
	            </div>
	            <button class="btn btn-md btn-primary" type="submit" style="background-color: #1e6982; border-color: #0275d8;color: #ffffff; margin-left: 370px;margin-top: 15px;">Apply</button>
	        </form>
	    </div>
	</div>
	<div class="col-md-3"></div>
</div>


@endsection

@push('js')

@endpush