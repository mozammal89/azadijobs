@extends('FrontEnd.layout')

@push('css')


@endpush


@section('content')
<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/FrontEnd/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Training Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li>Training Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="row">
		    <div class="col-md-1"></div>
		    <div class="col-md-10">
		        <form action="{{route('trainingDetails',$TrainingDetails->id)}}" method="post">
		            @csrf
		            <div class="row" style="margin-top: 40px;">
		            	<table id="example" class="table table-striped table-bordered">
		            		<tbody>
		            			<tr>
		            				<th style="width: 25%;">Training Title</th>
		            				<td>{{$TrainingDetails->training_title}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Subject</th>
		            				<td>{{$TrainingDetails->training_subject}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Name</th>
		            				<td>{{$TrainingDetails->training_name}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Number</th>
		            				<td>{{$TrainingDetails->training_number}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Address</th>
		            				<td>{{$TrainingDetails->training_address}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Place</th>
		            				<td>{{$TrainingDetails->training_place}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Cost</th>
		            				<td>{{$TrainingDetails->training_cost}}</td>
		            			</tr>
		            			<tr>
		            				<th style="width: 25%;">Training Describtion</th>
		            				<td>
		            					<textarea name="training_discribtion" rows="3" class="form-control" style="background-color: white;" readonly="">{{$TrainingDetails->training_describtion}}</textarea>
		            				</td>
		            			</tr>
		            		</tbody>
		            	</table>
		            </div>           
			        <div class="form-group">
		                <a href="{{route('trainingCourseOutlineDetails',$TrainingDetails->id)}}" class="btn btn-success" role="button">Training Course Outline</a>
		            </div>
	            </form>
		    </div>
		    <div class="col-md-1"></div>
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush