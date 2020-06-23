@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content')

<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-8">
      <form action="{{route('admin.aboutUsAboutUs.update',$about_us_details->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label>Email</label>
              <input name="email" type="text" class="form-control" value="{{$about_us_details->email}}">
            </div>
            <div class="form-group">
              <label>Web Address</label>
                <input name="web_link" type="text" class="form-control" value="{{$about_us_details->web_link}}">
            </div>
            <div class="form-group">
              <label>Mobile</label>
                <input name="mobile" type="text" class="form-control" value="{{$about_us_details->mobile}}">
            </div>
            <div class="form-group">
              <label>Technical Email</label>
                <input name="tech_email" type="text" class="form-control" value="{{$about_us_details->tech_email}}">
            </div>
            <div class="form-group">
              <label>Sales Email</label>
                <input name="sales_email" type="text" class="form-control" value="{{$about_us_details->sales_email}}">
            </div>
            <div class="form-group">
              <label>Address</label>
                <textarea class="textarea_editor form-control" name="address" rows="6" placeholder="Enter text ...">{!! $about_us_details->address !!}</textarea>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
                  <div class="card-body">
                      <label>Describtion</label>
                      <div class="form-group">
                          <textarea class="textarea_editor form-control" name="describtion" rows="6" placeholder="Enter text ...">{!! $about_us_details->describtion !!}</textarea>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-md" style="margin-bottom: 40px;">Update</button>
      </form>
    </div>
</div>



@endsection()

@push('js')

@endpush()