@extends('FrontEnd.layout')

@push('css')



@endpush

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(../FrontEnd/images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Browse Category</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{route('index')}}">Home</a></li>
						<li>Browse Category</li>
					</ul>
				</div>
				<!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
		<!-- Browse Jobs -->
		<div class="section-full bg-white browse-job content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<h5 class="widget-title font-weight-700 text-uppercase">All Category</h5>
						<div class="section-full job-categories content-inner-2 bg-white" style="background-image:url(../images/pattern/pic1.html);" style="padding-top: 35px !importent;">
							<div class="container">
								{{ csrf_field() }}
								<div id="post_data"></div>
							</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Browse Jobs END -->
	</div>
</div>
<!-- Content END-->


@endsection

@push('js')

<script>
$(document).ready(function(){
 
 var _token = $('input[name="_token"]').val();

 load_cat('', _token);

 function load_cat(id="", _token)
 {
  $.ajax({
   url:"{{ route('loadMoreCat.load_cat') }}",
   method:"POST",
   data:{id:id, _token:_token},
   success:function(data)
   {
    $('#load_more_button').remove();
    $('#post_data').append(data);
    console.log(data);
   }
  })
 }

 $(document).on('click', '#load_more_button', function(){
  var id = $(this).data('id');
  $('#load_more_button').html('<b>Loading...</b>');
  load_cat(id, _token);
 });

});
</script>

@endpush