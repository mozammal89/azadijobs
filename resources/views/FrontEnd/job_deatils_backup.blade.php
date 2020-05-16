<div class="row">
	<div class="col-xl-9 col-lg-8">
		<h5 class="widget-title font-weight-700 text-uppercase">Recent Jobs</h5>
		@foreach($jobPost as $all_job_posts)
		<ul class="post-job-bx">
			<li>
				<a href="#">
					<div class="d-flex m-b30">
						<div class="job-post-company">
							<span><img src="../FrontEnd/images/logo/icon1.png"/></span>
						</div>
						<div class="job-post-info">
							<h4>{{$all_job_posts->job_title}}</h4>
							<ul>
								<li><i class="fa fa-map-marker"></i> {{$all_job_posts->divisions->division_name}}</li>
								<li><i class="fa fa-bookmark-o"></i> {{$all_job_posts->employment_status}}</li>
								<li><i class="fa fa-clock-o"></i> {{$all_job_posts->application_deadline}}</li>
							</ul>
						</div>
					</div>
					<div class="d-flex">
						<div class="job-time mr-auto">
							<span>{{$all_job_posts->employment_status}}</span>
						</div>
						<!-- <div class="salary-bx">
							<span>$1200 - $ 2500</span>
						</div> -->
					</div>
				</a>
			</li>
			@endforeach
		</ul>
		<div class="pagination-bx m-t30" align="center">
			<button class="btn btn-primary">Load More</button>
		</div>
		<!-- <div class="pagination-bx m-t30">
			<ul class="pagination">
				<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
			</ul>
		</div> -->
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