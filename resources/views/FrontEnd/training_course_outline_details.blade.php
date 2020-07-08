@extends('FrontEnd.layout')

@push('css')


@endpush


@section('content')
<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/FrontEnd/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Training Course Outline Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li>Training Course Outline Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="row" style="margin-top: 60px;">
		    <div class="col-md-1"></div>
		    <div class="col-md-10">
		        
		            
		            <div class="row">
		            	<div class="col-md-1"></div>
		            	<div class="col-md-10">
		            		<table id="example" class="table table-striped table-bordered">
			            		<tbody>
			            			<tr>
			            				<th style="width: 25%;">Training Title</th>
			            				<td>{{$tco_details[0]->courseOutline->training_title}}</td>
			            			</tr>
			            			<tr>
			            				<th style="width: 25%;">Training Date</th>
			            				<td>{{$tco_details[0]->date}}</td>
			            			</tr>
			            			<tr>
			            				<th style="width: 25%;">Training Type</th>
			            				<td>{{$tco_details[0]->type}}</td>
			            			</tr>
			            			<tr>
			            				<th style="width: 25%;">Training Topic</th>
			            				<td>{{$tco_details[0]->topic}}</td>
			            			</tr>
			            			<tr>
			            				<th style="width: 25%;">Training Duration</th>
			            				<td>{{$tco_details[0]->duration}}</td>
			            			</tr>
			            			<tr>
			            				<th style="width: 25%;">Topic Describtion</th>
			            				<td>
			            					<textarea name="topic_describtion" class="form-control" style="background-color: white;" readonly="">{{$tco_details[0]->topic_describtion}}</textarea>
			            				</td>
			            			</tr>
			            		</tbody>
			            	</table>
		            	</div>
		            	<div class="col-md-1"></div>
		            </div>           
		        
		    </div>
		    <div class="col-md-1"></div>
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush