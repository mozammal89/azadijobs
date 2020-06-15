@extends('FrontEnd.layout')

@push('css')
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

@endpush

@section('content')

<div class="section-full job-categories content-inner-2 bg-white" style="background-image:url(../images/pattern/pic1.html);">
	<div class="container">
		<div class="section-head d-flex head-counter clearfix">
			<div class="mr-auto">
				<h2 class="m-b5">Training List</h2>
				<h6 class="fw3">Multiple Trainings are wating for you</h6>
			</div>
		</div>
		
		<div class="row sp20">
			@foreach($training_list as $all_training)
			<div class="col-md-3" style="margin-bottom: 40px;">
		        <a href="{{route('trainingDetails',$all_training->id)}}" target="_blank">
		        	<div class="row">
	        			<div class="col-md-12">
	        				<div class="row">
			        			<div class="icon-md text-primary"><i class="fas fa-award"></i></div>
			        			<h5 style="color: #7d4319;">{{$all_training->training_title}}</h5>

		        			</div>
		        			<span class="training-cost" style="margin-left: 40px;"><i class="ti-money"></i> {{$all_training->training_cost}}</span>
	        			</div>
	        		</div>
		          </a>
		    </div>
		    @endforeach
		</div>
	</div>
</div>


@endsection

@push('js')

@endpush