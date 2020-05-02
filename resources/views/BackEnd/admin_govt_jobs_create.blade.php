@extends('BackEnd.layout')

@push('css')


@endpush


@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<form action="{{route('admin.govtJobsStore')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
			        	<label>Job Title</label>
			            <input name="job_title" type="text" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
			        </div> 
				</div>
				<div class="col-md-4">
					<div class="form-group">
			        	<label>Department Title</label>
			            <input name="dept_title" type="text" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
			        </div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
			        	<label>Application Deadline</label>
			            <input name="application_deadline" type="date" class="form-control" placeholder=" " style="background-color: #ececec;width: 75%;">
			        </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
			        	<label>Submit Method</label>
	                    <select class="form-control" id="select" style="background-color: #ececec;width: 75%;">
							<option>Choose a method</option>
							<option value="0">Source Image</option>
							<option value="1">Details Information</option> 
						</select>
	            	</div>
            	</div>
			</div>

			<div class="row">
			    <div class="col-md-4" id="img" style="display: none;">
			        <div class="form-group">
			        	<label>Source Image</label>
			            <input name="image" type="file" class="form-control" style="background-color: #ececec;width: 75%;">
			        </div>			        		        			                		      
	        	</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="detail" style="display: none;">
					<div class="form-group">
			        	<label>Job Post Date</label>
			            <input name="job_post_date" type="date" class="form-control" placeholder="  " style="background-color: #ececec;width: 75%;">
			        </div>

			        <div class="form-group">
			        	<label>Vacancy</label>
			            <input name="vacancy" type="text" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
			        </div>

			        <div class="form-group">
			        	<label>Employment Status</label>
	                    <select class="select2_demo_3 form-control" name="employment_status" style="background-color: #ececec;width: 75%;">
							<option>Employment Status</option>
							<option value="Part Time Job">Part Time Job</option>
							<option value="Full Time Job">Full Time Job</option> 
						</select>
	            	</div>

	            	<div class="form-group">
	            		<label>Job Location</label>
		            	<select name="job_location" class="form-control" style="width:350px;background-color: #ececec;width: 75%;">
		                    <option value="">--- Select Location ---</option>
		                    @foreach($divisions as $all_division)
                                <option value="{{$all_division->id}}">{{$all_division->division_name}}</option>
                            @endforeach
		                </select>
		        	</div>

			        <div class="form-group">
			        	<label>Salary</label>
		            	<input name="salary" type="text" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
		        	</div>

		        	<div class="form-group">
		                <div class="card">
		                    <div class="card-body">
		                        <label>Job Context</label>
		                        <div class="form-group">
		                            <textarea class="textarea_editor form-control" name="job_context" rows="8" style="background-color: #ececec;" placeholder="Enter text ..."></textarea>
		                        </div>
		                      </div>
		                </div>
	              	</div>	

					<div class="form-group">
		                <div class="card">
		                    <div class="card-body">
		                        <label>Job Responsibilities</label>
		                        <div class="form-group">
		                            <textarea class="textarea_editor form-control" name="job_responsibilities" rows="8" style="background-color: #ececec;" placeholder="Enter text ..."></textarea>
		                        </div>
		                      </div>
		                </div>
	              	</div>

	              	<div class="form-group">
		                <div class="card">
		                    <div class="card-body">
		                        <label>Educational Requirements</label>
		                        <div class="form-group">
		                            <textarea class="textarea_editor form-control" name="educational_requirements" rows="8" style="background-color: #ececec;" placeholder="Enter text ..."></textarea>
		                        </div>
		                      </div>
		                </div>
	              	</div>

	              	<div class="form-group">
		                <div class="card">
		                    <div class="card-body">
		                        <label>Additional Requirements</label>
		                        <div class="form-group">
		                            <textarea class="textarea_editor form-control" name="additional_requirements" rows="7" style="background-color: #ececec;" placeholder="Enter text ..."></textarea>
		                        </div>
		                      </div>
		                </div>
	              	</div>

	              	<div class="form-group">
		                <div class="card">
		                    <div class="card-body">
		                        <label>Application Note</label>
		                        <div class="form-group">
		                            <textarea class="textarea_editor form-control" name="application_note" rows="8" style="background-color: #ececec;" placeholder="Enter text ..."></textarea>
		                        </div>
		                      </div>
		                </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $("#select").click(function(){
      	var method = $(this).val();
      	if (method==0) {
      		$("#img").css("display","block");
        	$("#detail").css("display","none");
      	}
      	else if(method==1){
      		$("#img").css("display","none");
        	$("#detail").css("display","block");
      	}
      	else{
      		$("#img").css("display","none");
        	$("#detail").css("display","none");
      	}
      })
    });
</script>


@endpush