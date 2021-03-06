@extends('BackEnd.layout')

@push('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endpush()

@section('content')

<div class="row">
	<div class="col-md-12" style="margin-left: 10px;">
		<form action="{{route('admin.aboutUsTandC.store')}}" method="post" enctype="multipart/form-data">
    	@csrf
	        <div class="row">
			  <div class="col-md-10">
			     <textarea name="describtions" id="describtions" class="summernote"></textarea>
			  </div>
			</div>
			<button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;">Add</button>
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