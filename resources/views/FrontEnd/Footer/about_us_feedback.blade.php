@extends('FrontEnd.layout')

@push('css')


@endpush


@section('content')
<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/FrontEnd/images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Feedback</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="">About Us</a></li>
							<li>Feedback</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
        	<div class="row">
        		<div class="col-md-1"></div>
        		<div class="col-md-8" style="margin-top: 50px;">
        			<h2 style="background-color: #1e6982; text-align: center;border-radius: 10px;padding: 6px;">Please fill up the form</h2>
        			<form action="{{route('footerAboutUsFeedbackStore')}}" method="post" enctype="multipart/form-data">
        				@csrf
	        			<div class="row" style="margin-left: 90px; margin-top: 45px;">
	        				<div class="col-md-4">
	        					<div class="form-group">
					        	<label>Name</label>
					            <input name="name" type="text" class="form-control" placeholder="" style="    background-color: #e2e2e2;width: 100%;">
						        </div>
						        <div class="form-group">
						        	<label>Age</label>
						            <input name="age" type="text" class="form-control" placeholder="" style="    background-color: #e2e2e2;width: 50%;">
						        </div>
						        <div class="form-group">
						        	<label>Email</label>
						            <input name="email" type="text" class="form-control" placeholder="" style="    background-color: #e2e2e2;width: 100%;">
						        </div>
	        				</div>
	        				<div class="col-md-8">
	        					<div class="form-group" style="width: 50%;">
						        	<label>Employment Status</label>
				                    <select name="employment_status">
										<option>Employment Status</option>
										<option value="Employed">Employed</option>
										<option value="Unemployed">Unemployed</option> 
									</select>
			            		</div>
	        					<div class="form-group">
				                    <div class="card-body">
				                        <label>Feedback</label>
				                        <div class="form-group">
				                            <textarea class="textarea_editor form-control" name="feedback" rows="6" style="    background-color: #e2e2e2; width: 80%;" placeholder="Enter text ..."></textarea>
				                        </div>
				                    </div>
			              		</div>
	        				</div>
	        			</div>
        				<button type="submit" class="btn btn-primary btn-md" style="margin-left: 400px;">Submit</button>
        			</form>
        		</div>
        	</div>
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush