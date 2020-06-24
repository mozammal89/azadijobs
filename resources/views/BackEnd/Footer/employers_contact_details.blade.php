@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content')

<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-8">
      <form action="{{route('admin.employersContact.details', $about_us_details->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label>Email</label>
              <input name="email" type="text" class="form-control" value="{{$about_us_details->email}}" readonly="">
            </div>
            <div class="form-group">
              <label>Web Address</label>
                <input name="web_link" type="text" class="form-control" value="{{$about_us_details->web_link}}" readonly="">
            </div>
            <div class="form-group">
              <label>Mobile</label>
                <textarea class="textarea_editor form-control" name="mobile" rows="3" placeholder="Enter text ..." readonly="">{!! $about_us_details->mobile !!}</textarea>
            </div>
            <div class="form-group">
              <label>Technical Email</label>
                <input name="tech_email" type="text" class="form-control" value="{{$about_us_details->tech_email}}" readonly="">
            </div>
            <div class="form-group">
              <label>Sales Email</label>
                <input name="sales_email" type="text" class="form-control" value="{{$about_us_details->sales_email}}" readonly="">
            </div>
            
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label>Address</label>
                <textarea name="describtion" id="describtions" class="summernote" readonly="">{!! $about_us_details->address !!}</textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>



@endsection()

@push('js')

@endpush()