@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<form action="{{route('admin.trainingStore')}}" method="post">
			@csrf
			<div class="row">
			    <div class="col-md-6">
			        <div class="form-group">
			        	<label>Training Title</label>
			            <input name="training_title" type="text" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
			        </div>
			        <div class="form-group">
			        	<label>Training Subject</label>
			           	<input type="text" name="training_subject" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
			        </div>		        

			        <div class="form-group">
			        	<label>Training Name</label>
			            <input name="training_name" type="text" class="form-control" placeholder="  " style="background-color: #ececec;width: 75%;">
			        </div>

			        <div class="form-group">
			        	<label>Training Number</label>
			            <input name="training_number" type="text" class="form-control" placeholder=" " style="background-color: #ececec;width: 75%;">
			        </div>

			        <div class="form-group">
			        	<label>Training Address</label>
			            <input name="training_address" type="text" class="form-control" placeholder=" " style="background-color: #ececec;width: 75%;">
			        </div>

			        <div class="form-group">
			        	<label>Training Place</label>
			            <input name="training_place" type="text" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
			        </div>	        		      
	        	</div>
	        	<div class="col-md-6">
	        		<div class="form-group">
			        	<label>Training Describtion</label>
			        	<textarea name="training_describtion" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;"></textarea>
			            
			        </div>

			        <div class="chosen-select-single mg-b-20">
			        	<label>Training Hour</label>
	                    <input name="training_hour" type="time" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
	            	</div>	
	        	</div>
		    </div>
		    
		    <button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 455px;">Add</button>
		    
	    </form>
	</div>
	<div class="col-md-1"></div>
</div>


@endsection

@push('js')



@endpush