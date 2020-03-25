@extends('FrontEnd.layout')

@push('css')


@endpush()


@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: rgb(30, 105, 130);color: white;font-weight: bold;font-size: larger;text-align: center;">
                <span>Registration for Job Provider</span>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <form action="{{route('store.jobprovider')}}" id="loginForm" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Company Name</label>
                            <input class="form-control" type="text" name="com_name" required="">

                            <label>Company Web Link</label>
                            <input class="form-control" type="text" name="com_web_link" required="">

                            <label>Trade License</label>
                            <input class="form-control" type="text" name="trade_license" required="">
                            
                            <label>TIN Number</label>
                            <input class="form-control" type="text" name="tin_number" required="">

                            <label>Email</label>
                            <input class="form-control" type="email" name="email" required="">

                            <label>Starting Date</label>
                            <input class="form-control" type="date" name="company_starting_date" required="">
                        </div>
                        <div class="col-md-6">
                            <label>Company Address</label>
                            <input class="form-control" type="text" name="com_address" required="">

                            <label class="login2">Company Business Type</label>                   
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="form-select-list">
                                    <select class="form-control custom-select-value" name="com_business_type" required="">
                                        <option value="">Select Business Type</option>
                                        @foreach($all_categories as $category)

                                        <option value="{{$category->id}}">{{$category->job_category_name}}</option>

                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>

                            <label>Image</label>
                            <input class="form-control" type="file" name="provider_image" required="">
                            
                            <label>Phone Number</label>
                            <input class="form-control" type="text" name="phn_number" required="">

                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="">
                        </div>
                    </div>
                    
                </div>
                <div class="row" style="margin-left: 230px;">
                    <button class="btn btn-success loginbtn">Register</button>
                    <button class="btn btn-cancel">Cancel</button>
                </div>
                </form>
            </div>

            <!-- <div class="card-footer" style="background-color: rgb(30, 105, 130);color: white;font-weight: bold;text-align: center;">
                <p>Copyright © 2020. All rights reserved. Powered by <a href="https://www.softbd.com">Soft Tech Innovation Ltd</a></p>
            </div> -->
        </div>
    </div>
    <div class="col-md-3"></div>
</div>





@endsection()


@push('js')

@endpush()