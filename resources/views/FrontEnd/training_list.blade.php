@extends('FrontEnd.layout')

@push('css')


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
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="icon-bx-wraper">
					<div class="icon-content">
						<div class="icon-md text-primary m-b20"><i class="fas fa-palette"></i></div>
						<a href="#" class="dez-tilte">{{$all_training->training_title}}</a>
						<a href="{{route('trainingDetails',$all_training->id)}}">Click Here for Details</a>
						<div class="rotate-icon"><i class="ti-location-pin"></i></div> 
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