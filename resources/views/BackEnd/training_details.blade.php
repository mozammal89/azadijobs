@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.trainingDetails',$TrainingDetails->id)}}" method="post" style="margin-top: -30px;">
            @csrf
            <div class="form-group">
                <a href="{{route('admin.training')}}" class="btn btn-success" role="button" style="margin-left: 900px;">Back</a>
            </div>
            <div class="row">
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
                        <textarea name="training_describtion" class="form-control" style="background-color: #ececec;width: 75%;" readonly="">{{$TrainingDetails->training_describtion}}</textarea>
                    </div>

                    <div class="chosen-select-single mg-b-20">
                        <label>Training Hour</label>
                        <input name="training_hour" type="time" class="form-control" value="{{$TrainingDetails->training_hour}}" style="background-color: #ececec;width: 75%;" readonly="">
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