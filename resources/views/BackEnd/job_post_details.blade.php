@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('provider.jpPostDetails',$JobPostDetails->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input name="job_title" type="text" class="form-control" value="{{$JobPostDetails->job_title}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Job Category</label>
                        <input name="category" type="text" class="form-control" value="{{$JobPostDetails->category2->job_category_name}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <label>Sub Category</label>
                        <input name="sub_category" type="text" class="form-control" value="{{$JobPostDetails->subcategory->sub_category_name}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>                  

                    <div class="form-group">
                        <label>Job Post Date</label>
                        <input name="job_post_date" id="finish" type="text" class="form-control" value="{{$JobPostDetails->job_post_date}}"  style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Application Deadline</label>
                        <input name="application_deadline" id="finish2" type="text" class="form-control" value="{{$JobPostDetails->application_deadline}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Joining Date</label>
                        <input name="joining_date" id="finish3" type="text" class="form-control" value="{{$JobPostDetails->joining_date}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Vacancy</label>
                        <input name="vacancy" type="text" class="form-control" value="{{$JobPostDetails->vacancy}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="chosen-select-single mg-b-20">
                        <label>Employment Status</label>
                        <input name="employment_status" type="text" class="form-control" value="{{$JobPostDetails->employment_status}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Job Location</label>
                        <input name="job_location" type="text" class="form-control" value="{{$JobPostDetails->job_location}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <label>Salary</label>
                        <input name="salary" type="text" class="form-control" value="{{$JobPostDetails->salary}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Job Context</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="job_context" rows="8" style="background-color: #ececec;" readonly="">{{$JobPostDetails->job_context}}</textarea>
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
                                    <textarea class="textarea_editor form-control" name="job_responsibilities" rows="8" style="background-color: #ececec;" readonly="">{{$JobPostDetails->job_responsibilities}}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Educational Requirements</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="educational_requirements" rows="8" style="background-color: #ececec;" readonly="">{{$JobPostDetails->educational_requirements}}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Additional Requirements</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="additional_requirements" rows="7" style="background-color: #ececec;" readonly="">{{$JobPostDetails->additional_requirements}}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Application Note</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="application_note" rows="8" style="background-color: #ececec;" readonly="">{{$JobPostDetails->application_note}}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>              
                </div>
            </div>           
        </form>
    </div>
    <div class="col-md-1"></div>
</div>






@endsection

@push('js')


@endpush