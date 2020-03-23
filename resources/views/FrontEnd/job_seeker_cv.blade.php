@extends('FrontEnd.layout')

@push('css')


@endpush()

@section('content')

<div class="row">
	<div class="col-md-2">
		
	</div>




	<div class="col-md-8">
		<div class="card">
			<div class="card-header" style="color: white; font-size: large; font-weight: bold; background-color: rgb(30, 105, 130)">
				<span><i class="fas fa-eye"></i> View Resume</span>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-8" align="content">
						<p id="name" style="font-weight: 900; margin-top: 20px;">Ruhin Mia</p>
						<p style="margin-bottom: 5px;">Address: Uttara</p>
						<p style="margin-bottom: 5px;">Email: ruhin@gmail.com</p>
						<p style="margin-bottom: 5px;">Phone: 01700000000</p>
					</div>
					<div class="col-md-4">
						<img src="{{asset('images/image1584860545.jpg')}}" height="40%" width="40%">
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
								<td>Ruhin</td>
							</tr>
							<tr>
								<th>Last Name</th>
								<td>:</td>
								<td>Mia</td>
							</tr>
							<tr>
								<th>Father's Name</th>
								<td>:</td>
								<td>ABC</td>
							</tr>
							<tr>
								<th>Mother's Name</th>
								<td>:</td>
								<td>QWE</td>
							</tr>
							<tr>
								<th>Gender</th>
								<td>:</td>
								<td>Male</td>
							</tr>
							<tr>
								<th>Date of Birth</th>
								<td>:</td>
								<td>01/01/2000</td>
							</tr>
							<tr>
								<th>Religion</th>
								<td>:</td>
								<td>Islam</td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table>
							<tr>
								<th>Nationality</th>
								<td>:</td>
								<td>Bangladeshi</td>
							</tr>
							<tr>
								<th>NID</th>
								<td>:</td>
								<td>BD123456</td>
							</tr>
							<tr>
								<th>Passport No.</th>
								<td>:</td>
								<td>Pass123456</td>
							</tr>
							<tr>
								<th>Maritial Status</th>
								<td>:</td>
								<td>Single</td>
							</tr>
							<tr>
								<th>Mobile</th>
								<td>:</td>
								<td>0170000000</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>:</td>
								<td>ruhin@gmail.com</td>
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
								<td>Zilla School</td>
							</tr>
							<tr>
								<th>Subject</th>
								<td>:</td>
								<td>Science</td>
							</tr>
							<tr>
								<th>Grade</th>
								<td>:</td>
								<td>5.00</td>
							</tr>
							<tr>
								<th>Passing Year</th>
								<td>:</td>
								<td>2012</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<table>
							<tr>
								<th>College Name</th>
								<td>:</td>
								<td>Azizul Haq College</td>
							</tr>
							<tr>
								<th>Subject</th>
								<td>:</td>
								<td>Science</td>
							</tr>
							<tr>
								<th>Grade</th>
								<td>:</td>
								<td>5.00</td>
							</tr>
							<tr>
								<th>Passing Year</th>
								<td>:</td>
								<td>2014</td>
							</tr>								
						</table>
					</div>
					<div class="col-md-4">
						<table>
							<tr>
								<th>Versity Name</th>
								<td>:</td>
								<td>ABC University</td>
							</tr>
							<tr>
								<th>Subject</th>
								<td>:</td>
								<td>Science</td>
							</tr>
							<tr>
								<th>Grade</th>
								<td>:</td>
								<td>4.00</td>
							</tr>
							<tr>
								<th>Passing Year</th>
								<td>:</td>
								<td>2019</td>
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
								<td>Uttara</td>
							</tr>
							<tr>
								<th>District</th>
								<td>:</td>
								<td>Dhaka</td>
							</tr>
							<tr>
								<th>Country</th>
								<td>:</td>
								<td>BD</td>
							</tr>
							<tr>
								<th>Zip Code</th>
								<td>:</td>
								<td>DHK123</td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table>
							<tr>
								<th>Parmanent Address</th>
								<td>:</td>
								<td>Pirgonj</td>
							</tr>
							<tr>
								<th>District</th>
								<td>:</td>
								<td>Rangpur</td>
							</tr>
							<tr>
								<th>Country</th>
								<td>:</td>
								<td>BD</td>
							</tr>
							<tr>
								<th>Zip Code</th>
								<td>:</td>
								<td>RAN123</td>
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
								<td>AKTL</td>
							</tr>
							<tr>
								<th>From</th>
								<td>:</td>
								<td>01-01-2000</td>
							</tr>
							<tr>
								<th>To</th>
								<td>:</td>
								<td>01-01-2001</td>
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




@endsection()

@push('js')


@endpush()