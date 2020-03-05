@extends('FrontEnd.layout')

@push('css')

@endpush()




@section('content')



<div class="container">
    <div class="row" style="margin-top: 50px">
    	<div class="col-md-3">
    		<div class="row">
    			<img width="50%" height="50%" align="center" src="{{asset('images/demo.png')}}" style="">
    			<h3>Job Provider</h3>
    			<h5>I am a Job Provider. Welcome to my profile</h5>
    		</div>
    	</div>
    	<div class="col-md-9">   

            <!-- <div class="card">
                <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#general" role="tab">GENERAL</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank" role="tab">BANK</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#assets" role="tab">ASSETS</a> </li>
                    </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="general" role="tabpanel">
                        <div class="card-body">
                            general
                        </div>
                    </div>
                    <div class="tab-pane active" id="bank" role="tabpanel">
                        <div class="card-body">
                            bank
                        </div>
                    </div>
                </div>  
            </div> -->
            <form action="{{route('jobprovider.update',$all_profiles[0]->id)}}" method="post">
                @csrf
                @method('put')
                <div class="card">               
                    <div class="card-header" style="background-color: #1e6982;color: white;font-weight: bold;">
                        <div class="row">
                            <div class="col-md-6">
                                Provider Information
                            </div>
                            <div class="col-md-6" align="right">
                                 <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                            </div>        
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-5">Company Name: </label>
                                <input type="text" name="com_name" value="{{$all_profiles[0]->com_name}}" style="border: white;">
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-5">Address: </label>
                                <input type="text" name="com_address" value="{{$all_profiles[0]->com_address}}" style="border: white;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-5">Website Link: </label>
                                <input type="text" name="com_web_link" value="{{$all_profiles[0]->com_web_link}}" style="border: white;">
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-5">Business Type: </label>
                                <select class="form-control custom-select-value" name="com_business_type">
                                 <!-- <option value="">Select Business Type</option> -->
                                    @foreach($all_categories as $category)
                                   
                                    <option value="{{$category->id}}" {{ ( $all_profiles[0]->com_business_type == $category->id )? " selected= '' ": ' ' }}>{{$category->job_category_name}}</option>
                                    @endforeach

                                </select>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-5">Phone Number: </label>
                                <input type="text" name="phn_number" value="{{$all_profiles[0]->phn_number}}" style="border: white;">
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-5">Email: </label>
                                <input type="text" name="email" value="{{$all_profiles[0]->email}}" style="border: white;">
                            </div>
                        </div>
                    </div>               
                </div>
            </form>
    	</div>
    </div>
</div>


@endsection






@push('js')

@endpush()