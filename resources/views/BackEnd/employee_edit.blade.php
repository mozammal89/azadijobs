@extends('BackEnd.layout')

@push('css')


@endpush


@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<form action="{{route('admin.employeeEdit',$employee_edit->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('put')
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Employee Name</label>
					<input name="employee_name" type="text" class="form-control" value="{{$employee_edit->employee_name}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input name="employee_email" type="text" class="form-control" value="{{$employee_edit->employee_email}}" style="background-color: #ececec;width: 75%;">
				</div>
				<label>Image</label>
				<div class="form-group">
		            <img src="/employee_images/{{$employee_edit->image}}" width="30%" height="30%" align="center">
		            <input type="file" name="image" class="form-control" style="background-color: #ececec;width: 75%;">
		        </div>
		        <div class="form-group">
					<label>Present Address</label>
					<input name="present_address" type="text" class="form-control" value="{{$employee_edit->present_address}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>NID</label>
					<input name="nid" type="text" class="form-control" value="{{$employee_edit->nid}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Department</label>
					<select class="form-control custom-select-value" name="employee_department" required="">
                        <option value="">Select Department</option>
                    @foreach($department as $all_departments)
                        <option value="{{$all_departments->id}}" {{($all_departments->id==$employee_edit->employee_department)?'selected=""':''}}>{{$all_departments->department_name}}</option>
                    @endforeach            
                    </select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Employee ID</label>
					<input name="employee_id" type="text" class="form-control" value="{{$employee_edit->employee_id}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input name="employee_phone" type="text" class="form-control" value="{{$employee_edit->employee_phone}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
		        	<label>Date of Birth</label>
		            <input name="dob" type="date" class="form-control" value="{{$employee_edit->dob}}" style="background-color: #ececec;width: 75%;">
		        </div>
		        <div class="form-group">
					<label>Permanent Address</label>
					<input name="parmanent_address" type="text" class="form-control" value="{{$employee_edit->parmanent_address}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Passport</label>
					<input name="passport" type="text" class="form-control" value="{{$employee_edit->passport}}" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Designation</label>
					<select class="form-control custom-select-value" name="employee_designation" required="">
                        <option value="">Select Designation</option>
                    @foreach($designation as $designation)
                        <option value="{{$designation->id}}" {{($designation->id==$employee_edit->employee_designation)?'selected=""':''}}>{{$designation->designation_name}}</option>
                    @endforeach            
                    </select>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 400px;">Update</button>
		</form>
	</div>
	<div class="col-md-1"></div>
</div>



@endsection

@push('js')


@endpush