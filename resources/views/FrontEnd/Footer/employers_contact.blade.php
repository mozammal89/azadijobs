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
                    <h1 class="text-white">Contact</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="#">Employeers</a></li>
							<li>Contact</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            @foreach($about_us as $all_infos)
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row" style="margin-top: 35px;">
                            <div class="col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th style="width: 22%; padding-bottom: 5px;">Email:</th>
                                            <td style="padding-bottom: 5px;">{{$all_infos->email}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 22%; padding-bottom: 5px;">Web Address:</th>
                                            <td style="padding-bottom: 5px;">{{$all_infos->web_link}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 22%; padding-bottom: 5px;">Mobile:</th>
                                            <td style="padding-bottom: 5px;">{{$all_infos->mobile}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 22%; padding-bottom: 5px;">Address:</th>
                                            <td style="padding-bottom: 5px;">{{$all_infos->address}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th style="width: 33%; padding-bottom: 5px;">For Technical Support:</th>
                                            <td style="padding-bottom: 5px;">{{$all_infos->tech_email}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 33%; padding-bottom: 5px;">For Sales Support:</th>
                                            <td style="padding-bottom: 5px;">{{$all_infos->sales_email}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="col-md-1"></div>
            </div>
            @endforeach
		</div>
    </div>
    <!-- Content END-->




@endsection

@push('js')


@endpush