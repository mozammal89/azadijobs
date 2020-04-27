@extends('BackEnd.layout')

@push('css')


@endpush


@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<form action="{{route('admin.employeeStore')}}" method="post" enctype="multipart/form-data">
			@csrf
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Employee Name</label>
					<input name="employee_name" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input name="employee_email" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
		        	<label>Image</label>
		            <input name="image" type="file" class="form-control" style="background-color: #ececec;width: 75%;">
		        </div>
		        <div class="form-group">
					<label>Present Address</label>
					<input name="present_address" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>NID</label>
					<input name="nid" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Department</label>
					<select name="employee_department" class="form-control" style="width:350px;background-color: #ececec;width: 75%;">
		                <option value="">--- Select Department ---</option>
		                @foreach($department as $all_departments)
		                    <option value="{{$all_departments->id}}">{{$all_departments->department_name}}</option>
		                @endforeach
		            </select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Employee ID</label>
					<input name="employee_id" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input name="employee_phone" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
		        	<label>Date of Birth</label>
		            <input name="dob" type="date" class="form-control" style="background-color: #ececec;width: 75%;">
		        </div>
		        <div class="form-group">
					<label>Permanent Address</label>
					<input name="parmanent_address" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Passport</label>
					<input name="passport" type="text" class="form-control" style="background-color: #ececec;width: 75%;">
				</div>
				<div class="form-group">
					<label>Designation</label>
					<select name="employee_designation" class="form-control" style="width:350px;background-color: #ececec;width: 75%;">
		                <option value="">--- Select Designation ---</option>
		                @foreach($designation as $all_designations)
		                    <option value="{{$all_designations->id}}">{{$all_designations->designation_name}}</option>
		                @endforeach
		            </select>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 400px;">Add</button>
		</form>
	</div>
	<div class="col-md-1"></div>
</div>



@endsection

@push('js')


@endpush