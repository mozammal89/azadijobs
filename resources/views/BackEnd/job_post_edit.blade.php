@extends('BackEnd.layout')

@push('css')
<link rel="stylesheet" href="{{asset('BackEnd/css/form/all-type-forms.css')}}">

<!-- Custom CSS -->
<link href="{{asset('BackEnd/css/bootstrap-wysihtml5.css')}}" rel="stylesheet">

<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('provider.jpPostEdit',$JobPostDetails->id)}}" method="post" style="margin-top: -30px;">
            @csrf
            @method('PUT')
            <div class="form-group">
                <a href="{{route('provider.jpPost')}}" class="btn btn-success" role="button" style="margin-left: 900px;">Back</a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input name="job_title" type="text" class="form-control" value="{{$JobPostDetails->job_title}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Job Category</label>
                        <select name="category" id="category" data-dependent="sub_category" class="form-control" style="width:350px;background-color: #ececec;width: 75%;">
                            <option value="">{{$JobPostDetails->category2->job_category_name}}</option>
                            @foreach($jobcategories as $all_cat)
                                <option value="{{$all_cat->id}}">{{$all_cat->job_category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sub Category</label>
                        <select name="sub_category" id="sub_category" class="form-control" style="width:350px;background-color: #ececec;width: 75%;">
                            <option value="">{{$JobPostDetails->subcategory->sub_category_name}}</option>
                        </select> 
                    </div>                  

                    <div class="form-group">
                        <label>Job Post Date</label>
                        <input name="job_post_date" id="finish" type="text" class="form-control" value="{{$JobPostDetails->job_post_date}}"  style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Application Deadline</label>
                        <input name="application_deadline" id="finish2" type="text" class="form-control" value="{{$JobPostDetails->application_deadline}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Experience</label>
                        <input name="experience" type="text" class="form-control" value="{{$JobPostDetails->experience}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Joining Date</label>
                        <input name="joining_date" id="finish3" type="text" class="form-control" value="{{$JobPostDetails->joining_date}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Vacancy</label>
                        <input name="vacancy" type="text" class="form-control" value="{{$JobPostDetails->vacancy}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="chosen-select-single mg-b-20">
                        <label>Employment Status</label>
                        <input name="employment_status" type="text" class="form-control" value="{{$JobPostDetails->employment_status}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Job Location</label>
                        <input name="job_location" type="text" class="form-control" value="{{$JobPostDetails->divisions->division_name}}" style="background-color: #ececec;width: 75%;">
                    </div>

                    <div class="form-group">
                        <label>Salary</label>
                        <input name="salary" type="text" class="form-control" value="{{$JobPostDetails->salary}}" style="background-color: #ececec;width: 75%;">
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Job Context</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="job_context" rows="8" style="background-color: #ececec;">{!!$JobPostDetails->job_context!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>                        
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Job Responsibilities</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="job_responsibilities" rows="8" style="background-color: #ececec;">{!!$JobPostDetails->job_responsibilities!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Educational Requirements</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="educational_requirements" rows="8" style="background-color: #ececec;">{!!$JobPostDetails->educational_requirements!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Additional Requirements</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="additional_requirements" rows="7" style="background-color: #ececec;">{!!$JobPostDetails->additional_requirements!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Application Note</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="application_note" rows="8" style="background-color: #ececec;">{!!$JobPostDetails->application_note!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>              
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 455px;">Update</button>           
        </form>
    </div>
    <div class="col-md-1"></div>
</div>






@endsection

@push('js')
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>



<script src="{{asset('BackEnd/js/datepicker/jquery-ui.min.js')}}"></script>
<script src="{{asset('BackEnd/js/datepicker/datepicker-active.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('BackEnd/js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('BackEnd/js/bootstrap-wysihtml5.js')}}"></script>


<script>
    
 $(document).ready(function() {

    $('select[name="category"]').on('change', function() {


            
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "text",
                    success:function(data) {
                        console.log(data);
                        
                        $('select[name="sub_category"]').empty();
                       
                      $('select[name="sub_category"]').html(data);
                        // $.each(data, function(key, value) {

                        //  console.log(value.sub_category_name);
                        //     // $('select[name="sub_category"]').append('<option value="'+ key +'">'+ value +'</option>');
                        // });


                    }
                });
            }else{
                $('select[name="sub_category"]').empty();
            }
        });

    // console.log('test');



 });

</script>

@endpush