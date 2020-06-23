@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content') 

<div class="row">
	<div class="col-md-12" style="margin-left: 20px;">
		<form action="{{route('admin.aboutUsTandC.details',$des_details->id)}}" method="post" enctype="multipart/form-data">
    	@csrf

      {!! $des_details->describtions !!}
      
		</form>
	</div>
</div>



@endsection()

@push('js')

@endpush()