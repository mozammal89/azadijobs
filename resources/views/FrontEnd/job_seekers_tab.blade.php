@extends('FrontEnd.layout')

@push('css')


@endpush()




@section('content')

<form action="{{route('jobseeker.update',$all_seeker_profiles[0]->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
<div class="container">
    <div class="row" style="margin-top: 50px">
    	<div class="col-md-3">
    		<div class="row">
    			<img width="50%" height="50%" align="center" src="/images/{{$all_seeker_profiles[0]->seeker_image}}" style="">

    			<input type="file" name="seeker_image">
    			
    		</div>
    	</div>
    	<div class="col-md-9">             
            
                <div class="card">               
                    <div class="card-header" style="background-color: #1e6982;color: white;font-weight: bold;">
                        <div class="row">
                            <div class="col-md-6">
                                Seeker Information
                            </div>
                            <div class="col-md-6" align="right">
                                 <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                            </div>        
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-5">Seeker Name: </label>
                                <input type="text" name="seeker_name" value="{{$all_seeker_profiles[0]->seeker_name}}" style="border: white;">
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-5">Seeker Address: </label>
                                <input type="text" name="seeker_address" value="{{$all_seeker_profiles[0]->seeker_address}}" style="border: white;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-5">Phone Number: </label>
                                <input type="text" name="phn_number" value="{{$all_seeker_profiles[0]->phn_number}}" style="border: white;">
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-5">Interested Area: </label>
                                <select class="form-control custom-select-value" name="interested_area">
                                 <!-- <option value="">Select Business Type</option> -->
                                    @foreach($all_categories as $category)
                                   
                                    <option value="{{$category->id}}" {{ ( $all_seeker_profiles[0]->interested_area == $category->id )? " selected= '' ": ' ' }}>{{$category->job_category_name}}</option>
                                    @endforeach

                                </select>


                            </div>
                        </div>
                        <div class="row">                          
                            <div class="col-md-6">
                                <label class="col-md-5">Email: </label>
                                <input type="text" name="seeker_email" value="{{$all_seeker_profiles[0]->seeker_email}}" style="border: white;">
                            </div>
                        </div>
                    </div>               
                </div>
            </form>
    	</div>
    </div>
</div>




@endsection()






@push('js')

@endpush()