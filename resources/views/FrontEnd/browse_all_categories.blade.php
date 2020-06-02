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
					<div class="col-xl-9 col-lg-8">
						<h5 class="widget-title font-weight-700 text-uppercase">Recent Category</h5>
						{{ csrf_field() }}
						<div id="post_data"></div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="sticky-top">
							<div class="clearfix m-b30">
								<h5 class="widget-title font-weight-700 text-uppercase">Keywords</h5>
								<div class="">
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</div>
							<div class="clearfix m-b10">
								<h5 class="widget-title font-weight-700 m-t0 text-uppercase">Location</h5>
								<input type="text" class="form-control m-b30" placeholder="Location">
								<div class="input-group m-b20">
									<input type="text" class="form-control" placeholder="120">
									<select>
										<option>Km</option>
										<option>miles</option>
									</select>
								</div>
							</div>
							<div class="clearfix m-b30">
								<h5 class="widget-title font-weight-700 text-uppercase">Job type</h5>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-6">
										<div class="product-brand">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check1" name="example1">
												<label class="custom-control-label" for="check1">Freelance</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check2" name="example1">
												<label class="custom-control-label" for="check2">Full Time</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check3" name="example1">
												<label class="custom-control-label" for="check3">Internship</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check4" name="example1">
												<label class="custom-control-label" for="check4">Part Time</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check5" name="example1">
												<label class="custom-control-label" for="check5">Temporary</label>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-6">
										<div class="product-brand">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check8" name="example1">
												<label class="custom-control-label" for="check8">Internship</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check9" name="example1">
												<label class="custom-control-label" for="check9">Part Time</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check10" name="example1">
												<label class="custom-control-label" for="check10">Temporary</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check6" name="example1">
												<label class="custom-control-label" for="check6">Freelance</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="check7" name="example1">
												<label class="custom-control-label" for="check7">Full Time</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix">
								<h5 class="widget-title font-weight-700 text-uppercase">Category</h5>
								<select>
									<option>Any Category</option>
									<option>Automotive Jobs</option>
									<option>Construction Facilities</option>
									<option>Design, Art & Multimedia</option>
									<option>Food Services</option>
								</select>
							</div>
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