@extends('BackEnd.layout')

@push('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endpush()

@section('content')

<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-8">
      <form action="{{route('admin.aboutUsAboutUs.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label>Email</label>
              <input name="email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Web Address</label>
                <input name="web_link" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Mobile</label>
                <textarea class="textarea_editor form-control" name="mobile" rows="3" placeholder="Enter text ..."></textarea>
            </div>
            <div class="form-group">
              <label>Technical Email</label>
                <input name="tech_email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Sales Email</label>
                <input name="sales_email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Address</label>
                <textarea class="textarea_editor form-control" name="address" rows="4" placeholder="Enter text ..."></textarea>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
                  <div class="card-body">
                      <label>Describtion</label>
                      <div class="form-group">
                          <textarea name="describtion" id="describtions" class="summernote"></textarea>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-md" style="margin-bottom: 40px;">Submit</button>
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