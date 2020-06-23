@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content')

<!-- Content -->
    <div class="page-content bg-white">
        <!-- contact area -->
        <div class="content-block">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <form action="{{route('admin.aboutUsFeedbackDetails',$feedbacks_details->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" value="{{$feedbacks_details->name}}" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" type="text" class="form-control" value="{{$feedbacks_details->age}}" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control" value="{{$feedbacks_details->email}}" readonly="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Employment Status</label>
                                    <input name="employment_status" type="text" class="form-control" value="{{$feedbacks_details->employment_status}}" readonly="">
                                </div>
                                <div class="form-group">
                                    <div class="card-body">
                                        <label>Feedback</label>
                                        <div class="form-group">
                                            <textarea class="textarea_editor form-control" name="feedback" rows="6" readonly="">{!! $feedbacks_details->feedback !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Content END-->



@endsection()

@push('js')

@endpush()