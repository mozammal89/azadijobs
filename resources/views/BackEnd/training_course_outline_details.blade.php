@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.trainingCourseOutlineDetails',$tco_details->id)}}" method="post" style="margin-top: -30px;">
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






@endsection

@push('js')


@endpush