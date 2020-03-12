@extends('FrontEnd.layout')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/jpProfile.css')}}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                                    <li><a data-toggle="tab" href="#menu2" role="tab">Menu 2</a></li>
                                    <li><a data-toggle="tab" href="#menu3" role="tab">Menu 3</a></li>
                              </ul>
                            <!-- Tab panes -->
                            <form action="{{route('jobseeker.update',$all_seeker_profiles[0]->id)}}" method="post" enctype="multipart/form-data">
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
                                                        <img width="50%" height="50%" align="center" src="/images/{{$all_seeker_profiles[0]->seeker_image}}" style="">

                                                        <input type="file" name="seeker_image">
                                                                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                            <div class="row">

                                                <label class="col-md-5">Seeker Name: </label>
                                                <input type="text" name="seeker_name" value="{{$all_seeker_profiles[0]->seeker_name}}" style="border: white;">

                                                <label class="col-md-5">Seeker Address: </label>
                                                <input type="text" name="seeker_address" value="{{$all_seeker_profiles[0]->seeker_address}}" style="border: white;">

                                                
                                                    
                                                <label class="col-md-5">Interested Area: </label>
                                            
                                           
                                                <select class="col-md-4" name="interested_area">
                                                    <!-- <option value="">Select Business Type</option> -->
                                                    @foreach($all_categories as $category)
                                       
                                                    <option value="{{$category->id}}" {{ ( $all_seeker_profiles[0]->interested_area == $category->id )? " selected= '' ": ' ' }}>{{$category->job_category_name}}</option>
                                                    @endforeach

                                                </select>
                                                
                                                <label class="col-md-5">Phone Number: </label>
                                                <input type="text" name="phn_number" value="{{$all_seeker_profiles[0]->phn_number}}" style="border: white;">

                                                <label class="col-md-5">Email: </label>
                                                <input type="text" name="seeker_email" value="{{$all_seeker_profiles[0]->seeker_email}}" style="border: white;">                                              
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                            </form>

                                    </div>

                                    <div id="personal" class="tab-pane fade">
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
                                                    <div class="col-md-6">
                                                        <label>First name: </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="first_name" value="" style="border: white;">
                                                    </div>                                                   
                                                </div>
                                          
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Last Name: </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="first_name" value="" style="border: white;">
                                                    </div>                                                    
                                                </div>
                                      
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Father's Name: </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="father_name" value="" style="border: white;">
                                                    </div>                    
                                                </div>
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Mother's Name: </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="mother_name" value="" style="border: white;">
                                                    </div>      
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Select Gender: </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">                                                       
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                <div class="bt-df-checkbox pull-left">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="i-checks pull-left">
                                                                                <label>
                                                                                <input type="radio" name="gender" value="male" > <i></i> Male </label>
                                                                            </div>
                                                                            
                                                                            <div class="i-checks pull-left">
                                                                                <label>
                                                                                <input type="radio" name="gender" value="female" > <i></i> Female </label>
                                                                            </div>
                                                                            <div class="i-checks pull-left">
                                                                                <label>
                                                                                <input type="radio" name="gender" value="other"><i></i> Other </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                
                                                                </div>
                                                            </div>                                                                  
                                                       </div>
                                                    </div>                                                      
                                                </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Date of Birth: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" name="dob" value="" style="border: white;">
                                                        </div>                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Religion: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="religion" value="" style="border: white;">
                                                        </div>
                                                                                                           </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Nationality: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="nationality" value="" style="border: white;">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>NID: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="nid" value="" style="border: white;">
                                                        </div>                    
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Passport Number: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="passport_number" value="" style="border: white;">
                                                        </div>                                                       
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Maritial Status: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">                                                       
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                    <div class="bt-df-checkbox pull-left">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                    <input type="radio" name="maritial_status" value="Single" > <i></i> Single </label>
                                                                                </div>
                                                                                
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                    <input type="radio" name="maritial_status" value="Married" > <i></i> Married </label>
                                                                                </div>
                                                                                <div class="i-checks pull-left">
                                                                                    <label>
                                                                                    <input type="radio" name="maritial_status" value="Divorce"><i></i> Divorce </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                
                                                                    </div>
                                                                </div>                                                                  
                                                            </div>
                                                        </div>            
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Mobile: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="mobile" value="" style="border: white;">
                                                        </div>            
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Email: </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="email" value="" style="border: white;">
                                                        </div>            
                                                    </div>
                                                    

                                                </div>
                                            </div>  

                                      

                                   </div>

                                    <div id="menu2" class="tab-pane fade">
                                      <h3>Menu 2</h3>
                                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                      <h3>Menu 3</h3>
                                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

@endpush()