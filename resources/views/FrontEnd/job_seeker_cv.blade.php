@extends('FrontEnd.layout')

@push('css')


@endpush()

@section('content')

<form action="{{route('jobseeker.cv', $all_seeker_profiles->id, $profiles->id, $educational_infos->id, $address_infos->id, $experiences->id)}}">
	@csrf
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header" style="color: white; font-size: large; font-weight: bold; background-color: rgb(30, 105, 130)">
					<div class="row">
						<div class="col-md-6">
							<span><i class="fas fa-eye"></i> View Resume</span>
						</div>
						<div class="col-md-6" align="right">
	                     	<a href="{{ route('jobseekerCv',['download'=>'pdf']) }}">Download PDF</a>
	                	</div>
                	</div>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-8" align="content">
							<p id="name" style="font-weight: 900; margin-top: 20px;">{{$all_seeker_profiles->seeker_name}}</p>
							<p style="margin-bottom: 5px;">Address: {{$all_seeker_profiles->seeker_address}}</p>
							<p style="margin-bottom: 5px;">Email: {{$all_seeker_profiles->seeker_email}}</p>
							<p style="margin-bottom: 5px;">Phone: {{$all_seeker_profiles->phn_number}}</p>
						</div>
						<div class="col-md-4">
							<img src="/images/{{$all_seeker_profiles->seeker_image}}" height="40%" width="40%">
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" style="background-color: #55a2bb; color: white; font-weight: bolder; font-size: larger;">
					<span>Personal Information</span>
				</div>
				<div class="card-body">
					<div class="row" style="margin-left: -24px;">
						<div class="col-md-6">
							<table>
								<tr>
									<th>First Name</th>
									<td>:</td>
									<td>{{$profiles->first_name}}</td>
								</tr>
								<tr>
									<th>Last Name</th>
									<td>:</td>
									<td>{{$profiles->last_name}}</td>
								</tr>
								<tr>
									<th>Father's Name</th>
									<td>:</td>
									<td>{{$profiles->father_name}}</td>
								</tr>
								<tr>
									<th>Mother's Name</th>
									<td>:</td>
									<td>{{$profiles->mother_name}}</td>
								</tr>
								<tr>
									<th>Gender</th>
									<td>:</td>
									<td>{{$profiles->gender}}</td>
								</tr>
								<tr>
									<th>Date of Birth</th>
									<td>:</td>
									<td>{{$profiles->dob}}</td>
								</tr>
								<tr>
									<th>Religion</th>
									<td>:</td>
									<td>{{$profiles->religion}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table>
								<tr>
									<th>Nationality</th>
									<td>:</td>
									<td>{{$profiles->nationality}}</td>
								</tr>
								<tr>
									<th>NID</th>
									<td>:</td>
									<td>{{$profiles->nid}}</td>
								</tr>
								<tr>
									<th>Passport No.</th>
									<td>:</td>
									<td>{{$profiles->passport_number}}</td>
								</tr>
								<tr>
									<th>Maritial Status</th>
									<td>:</td>
									<td>{{$profiles->maritial_status}}</td>
								</tr>
								<tr>
									<th>Mobile</th>
									<td>:</td>
									<td>{{$profiles->mobile}}</td>
								</tr>
								<tr>
									<th>Email</th>
									<td>:</td>
									<td>{{$profiles->email}}</td>
								</tr>								
							</table>
						</div>				
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" style="background-color: #55a2bb; color: white; font-weight: bolder; font-size: larger;">
					<span>Educational Information</span>
				</div>
				<div class="card-body">
					<div class="row" style="margin-left: -24px;">
						<div class="col-md-4">
							<table>
								<tr>
									<th>Schhol Name</th>
									<td>:</td>
									<td>{{$educational_infos->school_name}}</td>
								</tr>
								<tr>
									<th>Subject</th>
									<td>:</td>
									<td>{{$educational_infos->school_subject}}</td>
								</tr>
								<tr>
									<th>Grade</th>
									<td>:</td>
									<td>{{$educational_infos->school_grade}}</td>
								</tr>
								<tr>
									<th>Passing Year</th>
									<td>:</td>
									<td>{{$educational_infos->school_passing_year}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-4">
							<table>
								<tr>
									<th>College Name</th>
									<td>:</td>
									<td>{{$educational_infos->college_name}}</td>
								</tr>
								<tr>
									<th>Subject</th>
									<td>:</td>
									<td>{{$educational_infos->college_subject}}</td>
								</tr>
								<tr>
									<th>Grade</th>
									<td>:</td>
									<td>{{$educational_infos->college_grade}}</td>
								</tr>
								<tr>
									<th>Passing Year</th>
									<td>:</td>
									<td>{{$educational_infos->college_passing_year}}</td>
								</tr>								
							</table>
						</div>
						<div class="col-md-4">
							<table>
								<tr>
									<th>Versity Name</th>
									<td>:</td>
									<td>{{$educational_infos->versity_name}}</td>
								</tr>
								<tr>
									<th>Subject</th>
									<td>:</td>
									<td>{{$educational_infos->versity_subject}}</td>
								</tr>
								<tr>
									<th>Grade</th>
									<td>:</td>
									<td>{{$educational_infos->versity_grade}}</td>
								</tr>
								<tr>
									<th>Passing Year</th>
									<td>:</td>
									<td>{{$educational_infos->versity_passing_year}}</td>
								</tr>								
							</table>
						</div>				
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" style="background-color: #55a2bb; color: white; font-weight: bolder; font-size: larger;">
					<span>Address</span>
				</div>
				<div class="card-body">
					<div class="row" style="margin-left: -24px;">
						<div class="col-md-6">
							<table>
								<tr>
									<th>Present Address</th>
									<td>:</td>
									<td>{{$address_infos->present_address}}</td>
								</tr>
								<tr>
									<th>District</th>
									<td>:</td>
									<td>{{$address_infos->present_district}}</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>:</td>
									<td>{{$address_infos->present_country}}</td>
								</tr>
								<tr>
									<th>Zip Code</th>
									<td>:</td>
									<td>{{$address_infos->present_zip}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table>
								<tr>
									<th>Parmanent Address</th>
									<td>:</td>
									<td>{{$address_infos->parmanent_address}}</td>
								</tr>
								<tr>
									<th>District</th>
									<td>:</td>
									<td>{{$address_infos->parmanent_district}}</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>:</td>
									<td>{{$address_infos->parmanent_country}}</td>
								</tr>
								<tr>
									<th>Zip Code</th>
									<td>:</td>
									<td>{{$address_infos->parmanent_zip}}</td>
								</tr>
							</table>
						</div>				
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" style="background-color: #55a2bb; color: white; font-weight: bolder; font-size: larger;">
					<span>Experience</span>
				</div>
				<div class="card-body">
					<div class="row" style="margin-left: -24px;">
						<div class="col-md-6">
							<table>
								<tr>
									<th>Company</th>
									<td>:</td>
									<td>{{$experiences->ex_company_name}}</td>
								</tr>
								<tr>
									<th>Designation</th>
									<td>:</td>
									<td>{{$experiences->ex_company_designation}}</td>
								</tr>
								<tr>
									<th>From</th>
									<td>:</td>
									<td>{{$experiences->ex_company_start_date}}</td>
								</tr>
								<tr>
									<th>To</th>
									<td>:</td>
									<td>{{$experiences->ex_company_end_date}}</td>
								</tr>
								<tr>
									<th>Describtion</th>
									<td>:</td>
									<td>{{$experiences->ex_company_describtion}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							
						</div>				
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-2">
			
		</div>
	</div>
</form>




@endsection()

@push('js')


@endpush()