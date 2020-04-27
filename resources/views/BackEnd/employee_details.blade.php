@extends('BackEnd.layout')

@push('css')


@endpush


@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<form action="{{route('admin.employeeDetails',$details->id)}}" method="post" enctype="multipart/form-data">
			@csrf
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Employee Name</label>
					<input name="employee_name" type="text" class="form-control" value="{{$details->employee_name}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input name="employee_email" type="text" class="form-control" value="{{$details->employee_email}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<label>Image</label>
				<div class="form-group">
		        	
		            <img src="/employee_images/{{$details->image}}" width="30%" height="30%" align="center">
		        </div>
		        <div class="form-group">
					<label>Present Address</label>
					<input name="present_address" type="text" class="form-control" value="{{$details->present_address}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
					<label>NID</label> 
					<input name="nid" type="text" class="form-control" value="{{$details->nid}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
					<label>Department</label>
					<input name="employee_department" type="text" class="form-control" value="{{$details->empDepartment->department_name}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Employee ID</label>
					<input name="employee_id" type="text" class="form-control" value="{{$details->employee_id}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input name="employee_phone" type="text" class="form-control" value="{{$details->employee_phone}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
		        	<label>Date of Birth</label>
		            <input name="dob" type="date" class="form-control" value="{{$details->dob}}" style="background-color: #ececec;width: 75%;" readonly="">
		        </div>
		        <div class="form-group">
					<label>Permanent Address</label>
					<input name="parmanent_address" type="text" class="form-control" value="{{$details->parmanent_address}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
					<label>Passport</label>
					<input name="passport" type="text" class="form-control" value="{{$details->passport}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
				<div class="form-group">
					<label>Designation</label>
					<input name="employee_designation" type="text" class="form-control" value="{{$details->empDesignation->designation_name}}" style="background-color: #ececec;width: 75%;" readonly="">
				</div>
			</div>
		</div>
		</form>
	</div>
	<div class="col-md-1"></div>
</div>



@endsection

@push('js')


@endpush