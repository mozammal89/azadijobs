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
                    <h1 class="text-white">Terms and Conditions</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="">Job Seekers</a></li>
							<li>Terms and Conditions</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        @foreach($about_us_t_and_c as $about_des)
        <div class="content-block">
            <div class="row">
                <div class="col-md-10" style="margin-left: 110px;">
                    {!! $about_des->describtions !!}
                </div>
            </div>
		</div>
        @endforeach
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush