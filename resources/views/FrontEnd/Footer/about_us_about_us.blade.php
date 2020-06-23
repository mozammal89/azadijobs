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
                    <h1 class="text-white">About Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="">About Us</a></li>
							<li>About Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
        	
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush