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
		                <div class="col-md-6">
		                    <div class="form-group">
		                        <label>Training Title</label>
		                        <input name="training_title" type="text" class="form-control" value="{{$TrainingDetails->training_title}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Training Subject</label>
		                        <input name="training_subject" type="text" class="form-control" value="{{$TrainingDetails->training_subject}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>	                                      

		                    <div class="form-group">
		                        <label>Training Name</label>
		                        <input name="training_name" id="finish" type="text" class="form-control" value="{{$TrainingDetails->training_name}}"  style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Training Number</label>
		                        <input name="training_number" id="finish2" type="text" class="form-control" value="{{$TrainingDetails->training_number}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Training Address</label>
		                        <input name="training_address" id="finish3" type="text" class="form-control" value="{{$TrainingDetails->training_address}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Training Place</label>
		                        <input name="training_place" type="text" class="form-control" value="{{$TrainingDetails->training_place}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>                   
		                </div>
		                
		                <div class="col-md-6">
		                    <div class="form-group">
		                        <label>Training Describtion</label>
		                        <textarea name="training_describtion" rows="6" class="form-control" style="background-color: #ececec;width: 75%;" readonly="">{{$TrainingDetails->training_describtion}}</textarea>
		                    </div>

		                    <div class="chosen-select-single mg-b-20">
		                        <label>Training Hour</label>
		                        <input name="training_hour" type="text" class="form-control" value="{{$TrainingDetails->training_hour}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="chosen-select-single mg-b-20">
		                        <label>Training Cost</label>
		                        <input name="training_cost" type="text" class="form-control" value="{{$TrainingDetails->training_cost}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                </div>
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