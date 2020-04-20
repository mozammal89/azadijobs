@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.trainingCourseOutlineEdit',$tco_edit->id)}}" method="post" style="margin-top: -30px;">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="form-group">
                        <label>Training Title</label>
                        <select class="form-control custom-select-value" name="training_id" style="width: 75%; background-color: #ececec;">
						<option value="">{{$tco_edit->courseOutline->training_title}}</option>
						@foreach($training as $all_training)
							<option value="{{$all_training->id}}" data="{{$all_training->training_title}}">{{$all_training->training_title}}</option>
						@endforeach            
						</select>
                    </div>
                    <div class="form-group">
                        <label>Training Date</label>
                        <input name="date" type="date" class="form-control" value="{{$tco_edit->date}}" style="background-color: #ececec;width: 75%;">
                    </div>
                                      

                    <div class="form-group">
                        <label>Training Type</label>
                        <select class="form-control custom-select-value" name="type" style="width: 75%; background-color: #ececec;">
                        	<option value="">{{$tco_edit->type}}</option>
						@foreach($training_course_outline as $all_types)
							<option value="{{$all_types->type}}" data="{{$all_types->type}}">{{$all_types->type}}</option>
						@endforeach 	
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Training Topic</label>
                        <input name="topic" type="text" class="form-control" value="{{$tco_edit->topic}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Topic Duration</label>
                        <input name="duration" type="text" class="form-control" value="{{$tco_edit->duration}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Topic Describtion</label>
                        <input name="topic_describtion" type="text" class="form-control" value="{{$tco_edit->topic_describtion}}" style="background-color: #ececec;width: 75%;">
                    </div>                   
                </div>
                
                <div class="col-md-12">
                 
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 455px;">Update</button>           
        </form>
    </div>
    <div class="col-md-1"></div>
</div>






@endsection

@push('js')


@endpush