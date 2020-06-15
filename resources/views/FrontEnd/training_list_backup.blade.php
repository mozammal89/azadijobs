<div class="row sp20">
	@foreach($training_list as $all_training)
	<div class="col-lg-3 col-md-6 col-sm-6">
		<a href="{{route('trainingDetails',$all_training->id)}}" target="_blank">
		<div class="icon-bx-wraper">
			<div class="icon-content">
				<div class="icon-md text-primary m-b20"><i class="fas fa-palette"></i></div>
				<h4>{{$all_training->training_title}}</h4>
				Click Here for Details
				<div class="rotate-icon"><i class="ti-location-pin"></i></div> 
			</div>
		</div>
		</a>				
	</div>
	@endforeach
</div>