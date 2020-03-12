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
                              <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#personal_info">Personal Information</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                              </ul>
                            <!-- Tab panes -->
                            <form action="{{route('jobprovider.update',$all_profiles[0]->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                              <div class="tab-content">
                                    <div id="personal_info" class="tab-pane fade in active">
                                       
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
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <!-- <img width="50%" height="50%" align="center" src="/images/{{$all_profiles[0]->provider_image}}" style="">

                                                        <input type="file" name="provider_image" value=""> -->

                                                        <img id="uploadPreview" style="width: 100px; height: 100px;" src="/images/{{$all_profiles[0]->provider_image}}" />
                                                        <input id="uploadImage" type="file" name="provider_image" onchange="PreviewImage();" />
                                                                                                       
                                                    </div>
                                                </div>

                                       <div class="card-body">
                                            <div class="row">

                                                <label class="col-md-5">Company Name: </label>
                                                <input type="text" name="com_name" value="{{$all_profiles[0]->com_name}}" style="border: white;">

                                                <label class="col-md-5">Website Link: </label>
                                                <input type="text" name="com_web_link" value="{{$all_profiles[0]->com_web_link}}" style="border: white;">

                                                
                                                    
                                                <label class="col-md-5">Business Type: </label>
                                            
                                           
                                                <select class="col-md-4" name="com_business_type">
                                                <!-- <option value="">Select Business Type</option> -->
                                                @foreach($all_categories as $category)
                                               
                                                <option value="{{$category->id}}" {{ ( $all_profiles[0]->com_business_type == $category->id )? " selected= '' ": ' ' }}>{{$category->job_category_name}}</option>
                                                @endforeach

                                                </select>
                                                    
                                              

                                                <label class="col-md-5">Address: </label>
                                                <input type="text" name="com_address" value="{{$all_profiles[0]->com_address}}" style="border: white;">

                                                <label class="col-md-5">Trade License: </label>
                                                <input type="text" name="trade_license" value="{{$all_profiles[0]->trade_license}}" style="border: white;">

                                                <label class="col-md-5">TIN Number: </label>
                                                <input type="text" name="tin_number" value="{{$all_profiles[0]->tin_number}}" style="border: white;">

                                                <label class="col-md-5">Phone Number: </label>
                                                <input type="text" name="phn_number" value="{{$all_profiles[0]->phn_number}}" style="border: white;">

                                                <label class="col-md-5">Email: </label>
                                                <input type="text" name="email" value="{{$all_profiles[0]->email}}" style="border: white;">
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                            </form>

                                    </div>

                                    <div id="menu1" class="tab-pane fade">
                                      <h3>Menu 1</h3>
                                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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


@endsection






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