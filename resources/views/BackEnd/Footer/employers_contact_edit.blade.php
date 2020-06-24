@extends('BackEnd.layout')

@push('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endpush()

@section('content')

<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-8">
      <form action="{{route('admin.employersContact.update',$about_us_details->id)}}" method="post" enctype="multipart/form-data">
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
            
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label>Address</label>
                <textarea name="address" id="describtions" class="summernote">{!! $about_us_details->address !!}</textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-md" style="margin-bottom: 40px;">Update</button>
      </form>
    </div>
</div>



@endsection()

@push('js')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
           $('.summernote').summernote({
            height: 200,
            dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },
         });
      });
</script>
@endpush()