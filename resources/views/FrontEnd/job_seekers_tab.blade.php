@extends('FrontEnd.layout')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/jpProfile.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



<!-- Date & Time Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<
<!-- Date& Time End -->

@endpush()




@section('content')

<div class="container">
    <div class="row" style="margin-top: 50px">
        
        <div class="col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"> <a data-toggle="tab" href="#basic_info" aria-controls="basic_info" role="tab" >Basic Information</a></li>
                                    <li><a data-toggle="tab" href="#personal" role="tab">Personal</a></li>
                                    <li><a data-toggle="tab" href="#education" role="tab">Education</a></li>
                                    <li><a data-toggle="tab" href="#address" role="tab">Address</a></li>
                                    <li><a data-toggle="tab" href="#experience" role="tab">Experience</a></li>
                              </ul>
                            <!-- Tab panes -->
                            <form action="{{route('jobseeker.update',$all_seeker_profiles->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                              <div class="tab-content">
                                    <div id="basic_info" class="tab-pane fade in active">
                                       
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
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <img width="50%" height="50%" align="center" src="/images/{{$all_seeker_profiles->seeker_image}}" style="">

                                                        <input type="file" name="seeker_image">
                                                                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row">                                              
                                                        <div class="col-md-3" align="right">
                                                            <label>Seeker Name </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-6">
                                                           <input type="text" name="seeker_name" value="{{$all_seeker_profiles->seeker_name}}" style="border: white;"> 
                                                        </div>            
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3" align="right">
                                                           <label>Seeker Address </label> 
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="seeker_address" value="{{$all_seeker_profiles->seeker_address}}" style="border: white;">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3" align="right">
                                                            <label>Interested Area </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="col-md-4" name="interested_area" style="border: white;">
                                                            <!-- <option value="">Select Business Type</option> -->
                                                            @foreach($all_categories as $category)
                                               
                                                            <option value="{{$category->id}}" {{ ( $all_seeker_profiles->interested_area == $category->id )? " selected= '' ": ' ' }}>{{$category->job_category_name}}</option>
                                                            @endforeach

                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3" align="right">
                                                            <label>Phone Number </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="phn_number" value="{{$all_seeker_profiles->phn_number}}" style="border: white;">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3" align="right">
                                                            <label>Email </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            :
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="seeker_email" value="{{$all_seeker_profiles->seeker_email}}" style="border: white;">
                                                        </div>
                                                    </div>  

                                                </div>
                                            </div>
                                        </div>
                                            </form>

                                    </div>

                                    
                                    <div id="personal" class="tab-pane fade">
                                        <form action="{{route('jobseeker.personalInfoupdate',$profiles->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="card">
                                            <div class="card-header" style="background-color: #1e6982;color: white;font-weight: bold;">
                                                <div class="col-md-6">
                                                  Personal Information
                                                </div>
                                                <div class="col-md-6" align="right">
                                                  <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2" align="right">
                                                        <label>First name </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label> : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="first_name" value="{{$profiles->first_name}}" style="border: white;">
                                                    </div>                                                   
                                                </div>
                                          
                                                <div class="row">
                                                    <div class="col-md-2" align="right">
                                                        <label>Last Name </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label> : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="last_name" value="{{$profiles->last_name}}" style="border: white;">
                                                    </div>                                                    
                                                </div>
                                      
                                                <div class="row">
                                                    <div class="col-md-2" align="right">
                                                        <label>Father's Name </label> 
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label> : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="father_name" value="{{$profiles->father_name}}" style="border: white;">
                                                    </div>                    
                                                </div>
                                       
                                                <div class="row">
                                                    <div class="col-md-2" align="right">
                                                        <label>Mother's Name </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label> : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="mother_name" value="{{$profiles->mother_name}}" style="border: white;">
                                                    </div>      
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-2" align="right">
                                                        <label>Select Gender </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label> : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">                                                       
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                <div class="bt-df-checkbox pull-left">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="i-checks pull-left">
                                                                                <label>
                                                                                <input type="radio" name="gender" value="male"  {{ ($profiles->gender=='male')?'checked' : '' }}  > <i></i> Male </label>
                                                                            </div>
                                                                            
                                                                            <div class="i-checks pull-left">
                                                                                <label>
                                                                                <input type="radio" name="gender" value="female"   {{ ($profiles->gender=='female')?'checked' : '' }}  > <i></i> Female </label>
                                                                            </div>
                                                                            <div class="i-checks pull-left">
                                                                                <label>
                                                                                <input type="radio" name="gender" value="other" {{ ($profiles->gender=='other')?'checked' : '' }} ><i></i> Other </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                
                                                                </div>
                                                            </div>                                                                  
                                                       </div>
                                                    </div>                                                      
                                                </div>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Date of Birth </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" name="dob" value="{{$profiles->dob}}" style="border: white;">
                                                        </div>                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Religion </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="religion" value="{{$profiles->religion}}" style="border: white;">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Nationality </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="nationality" value="{{$profiles->nationality}}" style="border: white;">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>NID </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="nid" value="{{$profiles->nid}}" style="border: white;">
                                                        </div>                    
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Passport Number </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="passport_number" value="{{$profiles->passport_number}}" style="border: white;">
                                                        </div>                                                       
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Maritial Status </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">                                                       
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                    <div class="bt-df-checkbox pull-left">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                    <input type="radio" name="maritial_status" value="Single" {{($profiles->maritial_status=='Single')? 'checked' : '' }} > <i></i> Single </label>
                                                                                </div>
                                                                                
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                    <input type="radio" name="maritial_status" value="Married" {{($profiles->maritial_status=='Married')? 'checked' : '' }} > <i></i> Married </label>
                                                                                </div>
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                    <input type="radio" name="maritial_status" value="Divorce" {{($profiles->maritial_status=='Divorce')? 'checked' : '' }}><i></i> Divorce </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                
                                                                    </div>
                                                                </div>                                                                  
                                                            </div>
                                                        </div>            
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Mobile </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="mobile" value="{{$profiles->mobile}}" style="border: white;">
                                                        </div>            
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2" align="right">
                                                            <label>Email </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label> : </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="email" value="{{$profiles->email}}" style="border: white;">
                                                        </div>            
                                                    </div>
                                                    

                                                </div>

                                            </div>  
                                            </form>

                                   </div>
                                   

                                    <div id="education" class="tab-pane fade">
                                        <form action="{{route('jobseeker.educationupdate',$educational_infos->id)}}" method="post">
                                            @csrf
                                            @method('put')
                                      <div class="card">
                                            <div class="card-header" style="background-color: #1e6982;color: white;font-weight: bold;">
                                                <div class="col-md-6">
                                                  Educational Information
                                                </div>
                                                <div class="col-md-6" align="right">
                                                  <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="head" style="background-color: #1e6982;color: white;font-weight: bold;width: 90%; text-align: center;">
                                                            SSC
                                                        </div>
                                                        <div class="body">
                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-4">
                                                                    <label style="text-align: right;">School</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="school_name" value="{{$educational_infos->school_name}}" style="border: white;width: 500%;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Subject</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="school_subject" value="{{$educational_infos->school_subject}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Grade</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="school_grade" value="{{$educational_infos->school_grade}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Year</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="school_passing_year" value="{{$educational_infos->school_passing_year}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="head" style="background-color: #1e6982;color: white;font-weight: bold;width: 90%; text-align: center;">
                                                            HSC
                                                        </div>
                                                        <div class="body">
                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-4">
                                                                    <label style="text-align: right;">College</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="college_name" value="{{$educational_infos->college_name}}" style="border: white;width: 500%;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Subject</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="college_subject" value="{{$educational_infos->college_subject}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Grade</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="college_grade" value="{{$educational_infos->college_grade}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Year</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="college_passing_year" value="{{$educational_infos->college_passing_year}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="head" style="background-color: #1e6982;color: white;font-weight: bold;width: 90%; text-align: center;">
                                                            University
                                                        </div>
                                                        <div class="body">
                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-4">
                                                                    <label style="text-align: right;">Versity</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="versity_name" value="{{$educational_infos->versity_name}}" style="border: white;width: 500%;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Subject</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="versity_subject" value="{{$educational_infos->versity_subject}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Grade</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="versity_grade" value="{{$educational_infos->versity_grade}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Year</label>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-2">
                                                                   <input type="text" name="versity_passing_year" value="{{$educational_infos->versity_passing_year}}" style="border: white;"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>                                           
                                        </div> 

                                    </form>

                                    </div>


                                    <div id="address" class="tab-pane fade">
                                        <form action="{{route('jobseeker.addressupdate',$address_infos->id)}}" method="post">
                                            @csrf
                                            @method('put')
                                      <div class="card">
                                        <div class="card-header" style="background-color: #1e6982;color: white;font-weight: bold;">
                                            <div class="col-md-6">
                                              Address Details
                                            </div>
                                            <div class="col-md-6" align="right">
                                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="head" style="background-color: #1e6982;color: white;font-weight: bold;width: 90%; text-align: center;">
                                                        Present Address
                                                    </div>
                                                    <div class="body">
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right;margin-left: 30px;">Address</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="present_address" value="{{$address_infos->present_address}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right;margin-left: 30px;">District</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="present_district" value="{{$address_infos->present_district}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right;margin-left: 30px;">Country</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="present_country" value="{{$address_infos->present_country}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right;margin-left: 30px;">ZIP Code</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="present_zip" value="{{$address_infos->present_zip}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="head" style="background-color: #1e6982;color: white;font-weight: bold;width: 90%; text-align: center;">
                                                        Parmanent Address
                                                    </div>
                                                    <div class="body">
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right; margin-left: 30px;">Address</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="parmanent_address" value="{{$address_infos->parmanent_address}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right;margin-left: 30px;">District</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="parmanent_district" value="{{$address_infos->parmanent_district}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right;margin-left: 30px;">Country</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="parmanent_country" value="{{$address_infos->parmanent_country}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>                                                
                                                        <div class="row" style="padding-top: 5px;">
                                                            <div class="col-md-4">
                                                                <label style="text-align: right; margin-left: 30px;">ZIP Code</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                :
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="parmanent_zip" value="{{$address_infos->parmanent_zip}}" style="border: white;width: 155%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                    
                            </div>

                            <div id="experience" class="tab-pane fade">
                                <form action="{{route('jobseeker.experienceupdate',$experiences->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="card">
                                    <div class="card-header" style="background-color: #1e6982;color: white;font-weight: bold;">
                                        <div class="col-md-6">
                                          Experience
                                        </div>
                                        <div class="col-md-6" align="right">
                                          <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Company Name:</label>  
                                            <input class="form-control" type="text" name="ex_company_name" value="{{$experiences->ex_company_name}}" style="width: 50%;">

                                           
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span>From: </span>
                                                    <div class='input-group date' id='datetimepicker1' style="width: 100%;">
                                                        
                                                        <input type='text' class="form-control" name="ex_company_start_date" value="{{$experiences->ex_company_start_date}}">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-6">
                                                    <span>To: </span>
                                                    <div class='input-group date' id='datetimepicker2' style="width: 100%;">
                                                        
                                                         <input type='text' class="form-control" name="ex_company_end_date" value="{{$experiences->ex_company_end_date}}">
                                                         <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                         </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Describtion: </label>
                                            <textarea class="form-control" name="ex_company_describtion" >{{$experiences->ex_company_describtion}}</textarea>  
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div> 


            
            
                
        
        </div>
    </div>


  







</div>



@endsection()





@push('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>



<!-- Date & Time Start -->
<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker();
 });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!-- Date & Time End -->

@endpush()