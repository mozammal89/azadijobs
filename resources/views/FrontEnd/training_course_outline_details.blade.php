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
                    <h1 class="text-white">Training Course Outline Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li>Training Course Outline Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="row" style="margin-top: 60px;">
		    <div class="col-md-1"></div>
		    <div class="col-md-10">
		        <form action="{{route('trainingCourseOutlineDetails',$tco_details->id)}}" method="post" style="margin-top: -30px;">
		            @csrf
		            <div class="row">
		                <div class="col-md-6">
		                    
		                    <div class="form-group">
		                        <label>Training Title</label>
		                        <input name="training_id" type="text" class="form-control" value="{{$tco_details->courseOutline->training_title}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Date</label>
		                        <input name="date" type="text" class="form-control" value="{{$tco_details->date}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>

		                    <div class="form-group">
		                        <label>Training Type</label>
		                        <input name="type" id="finish2" type="text" class="form-control" value="{{$tco_details->type}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Training Topic</label>
		                        <input name="topic" id="finish3" type="text" class="form-control" value="{{$tco_details->topic}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>
		                    <div class="form-group">
		                        <label>Duration</label>
		                        <input name="duration" type="text" class="form-control" value="{{$tco_details->duration}}" style="background-color: #ececec;width: 75%;" readonly="">
		                    </div>                   
		                </div>
		                
		                <div class="col-md-6">
		                    <div class="form-group">
		                        <label>Topic Describtion</label>
		                        <textarea name="topic_describtion" class="form-control" style="background-color: #ececec;width: 75%;" readonly="">{{$tco_details->topic_describtion}}</textarea>
		                    </div>
		                </div>
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