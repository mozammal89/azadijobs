@extends('FrontEnd.layout')

@push('css')


@endpush()

@section('content')

<form action="{{route('seeker.jobseekerCv', $all_seeker_profiles->id, $profiles->id, $educational_infos->id, $address_infos->id, $experiences->id)}}">
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
									<th style="text-align: left;">First Name</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->first_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Last Name</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->last_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Father's Name</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->father_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;" style="text-align: left;">Mother's Name</th>
									<td style="text-align: left;" style="text-align: left;">:</td>
									<td style="text-align: left;" style="text-align: left;">{{$profiles->mother_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Gender</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->gender}}</td>
								</tr>
								<tr>
									<th style="text-align: left;" style="text-align: left;">Date of Birth</th>
									<td style="text-align: left;" style="text-align: left;">:</td>
									<td style="text-align: left;" style="text-align: left;">{{$profiles->dob}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Religion</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->religion}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table>
								<tr>
									<th style="text-align: left;">Nationality</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->nationality}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">NID</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->nid}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Passport No.</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->passport_number}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Maritial Status</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->maritial_status}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Mobile</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->mobile}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Email</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$profiles->email}}</td>
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
									<th style="text-align: left;">Schhol Name</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->school_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Subject</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->school_subject}}</td>
								</tr>
								<tr>
									<th style="text-align: left;" style="text-align: left;">Grade</th>
									<td style="text-align: left;" style="text-align: left;">:</td>
									<td style="text-align: left;" style="text-align: left;">{{$educational_infos->school_grade}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Passing Year</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->school_passing_year}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-4">
							<table>
								<tr>
									<th style="text-align: left;">College Name</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->college_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Subject</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->college_subject}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Grade</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->college_grade}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Passing Year</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->college_passing_year}}</td>
								</tr>								
							</table>
						</div>
						<div class="col-md-4">
							<table>
								<tr>
									<th style="text-align: left;">Versity Name</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->versity_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Subject</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->versity_subject}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Grade</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->versity_grade}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Passing Year</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$educational_infos->versity_passing_year}}</td>
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
									<th style="text-align: left;" >Present Address</th>
									<td style="text-align: left;" >:</td>
									<td style="text-align: left;" >{{$address_infos->present_address}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">District</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$address_infos->present_district}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Country</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$address_infos->present_country}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Zip Code</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$address_infos->present_zip}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table>
								<tr>
									<th style="text-align: left;">Parmanent Address</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$address_infos->parmanent_address}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">District</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$address_infos->parmanent_district}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Country</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$address_infos->parmanent_country}}</td>
								</tr>
								<tr>
									<th style="text-align: left;" style="text-align: left;">Zip Code</th>
									<td style="text-align: left;" style="text-align: left;">:</td>
									<td style="text-align: left;" style="text-align: left;">{{$address_infos->parmanent_zip}}</td>
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
									<th style="text-align: left;">Company</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$experiences->ex_company_name}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Designation</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$experiences->ex_company_designation}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">From</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$experiences->ex_company_start_date}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">To</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$experiences->ex_company_end_date}}</td>
								</tr>
								<tr>
									<th style="text-align: left;">Describtion</th>
									<td style="text-align: left;">:</td>
									<td style="text-align: left;">{{$experiences->ex_company_describtion}}</td>
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