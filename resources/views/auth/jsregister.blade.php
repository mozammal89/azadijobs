@extends('FrontEnd.layout')

@push('css')


@endpush()


@section('content')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top: 40px;margin-bottom: 70px;">
        <div class="card">
            <div class="card-header" style="background-color: rgb(30, 105, 130);color: white;font-weight: bold;font-size: larger;text-align: center;">
                <span>Registration for Job Seeker</span>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <form action="{{route('store.jobseeker')}}" id="loginForm" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label style="padding-top: 20px;">Name</label>
                            <input class="form-control" type="text" name="seeker_name" required="">

                            <label style="padding-top: 20px;">Interested Area</label>
                            <select class="form-control custom-select-value" name="interested_area">
                                <option value="">Select Interested Area</option>
                                @foreach($all_categories as $category)

                                <option value="{{$category->id}}">{{$category->job_category_name}}</option>

                                @endforeach
                                
                            </select>

                            <label style="padding-top: 20px;">Phone Number</label>
                            <input class="form-control" type="text" name="phn_number">

                            <label>Password</label>
                            <input class="form-control" type="password" name="password">

                            
                        </div>
                        <div class="col-md-6">
                            <label style="padding-top: 20px;">Address</label>
                            <input class="form-control" type="text" name="seeker_address" required="">

                            <label style="padding-top: 20px;">Image</label>
                            <input class="form-control" type="file" name="image" >

                            <label style="padding-top: 20px;">Email</label>
                            <input class="form-control" type="email" name="seeker_email">

                            
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