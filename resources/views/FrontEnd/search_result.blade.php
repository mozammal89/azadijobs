@extends('FrontEnd.layout')

@push('css')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"  />
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css"  />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css"  />

@endpush()

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(../FrontEnd/images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Jobs List</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{route('index')}}">Home</a></li>
						<li>Jobs List</li>
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
						<div class="row">
							<div class="col-md-12">
								<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
						            <thead>
						                <tr>
	                                        <th data-field="id">ID</th>
	                                        <th data-field="job_title">Job Title</th>
	                                        <th data-field="application_deadline" >Application Deadline</th>
	                                        <th data-field="action">Action</th>
	                                    </tr>
						            </thead>
						            <tbody>
						                @foreach($job_post as $all_JobPost)
	                                    <tr>         
	                                        <td>{{$loop->iteration}}</td>
	                                        <td>{{$all_JobPost->job_title}}</td>
	                                        <td>{{$all_JobPost->application_deadline}}</td>
	                                        <td>
	                                        	<a href="{{route('searchResultDetails',$all_JobPost->id)}}" class="btn btn-info" role="button">Details</a>  
	                                    </tr>
	                                    @endforeach
						            </tbody>
						        </table>
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


@endsection()

@push('js')

<script>
	$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>

@endpush()