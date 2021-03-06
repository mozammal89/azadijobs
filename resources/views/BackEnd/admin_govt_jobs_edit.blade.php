@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.govtJobsEdit',$govt_jobs_details->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input name="job_title" type="text" class="form-control" value="{{$govt_jobs_details->job_title}}" style="background-color: #ececec;width: 75%;">
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Department Title</label>
                        <input name="dept_title" type="text" class="form-control" value="{{$govt_jobs_details->dept_title}}" style="background-color: #ececec;width: 75%;">
                    </div>
                </div>
            </div>
            <div class="row" id="imageID" style="display: {{($govt_jobs_details->image=="demo.png")? "none" : "block"}};">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Source Image</label>
                        <img width="50%" height="50%" align="center" src="/govt_jobs_images/{{$govt_jobs_details->image}}" style="">
                        <input type="file" name="image">
                    </div>
                </div>
            </div>

            <div class="row" id="detailsID" style="display: {{($govt_jobs_details->image=="demo.png")? "block" : "none"}};">
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Job Post Date</label>
                        <input name="job_post_date" type="date" class="form-control" value="{{$govt_jobs_details->job_post_date}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Application Deadline</label>
                        <input name="application_deadline" type="date" class="form-control" value="{{$govt_jobs_details->application_deadline}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Vacancy</label>
                        <input name="vacancy" type="text" class="form-control" value="{{$govt_jobs_details->vacancy}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Employment Status</label>
                        <select class="select2_demo_3 form-control" name="employment_status" style="background-color: #ececec;width: 75%;">
                            <option>{{$govt_jobs_details->employment_status}}</option>
                            <option value="part_time_job">Part Time Job</option>
                            <option value="full_time_job">Full Time Job</option> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Job Location</label>
                        <select class="form-control custom-select-value" name="job_location" style="width: 75%; background-color: #ececec;">
                            <option value="">Select Location</option>
                        @foreach($divisions as $all_division)
                            <option value="{{($all_division->id)}}" {{($all_division->id==$govt_jobs_details->job_location)?'selected=""':''}}>{{$all_division->division_name}}</option>
                        @endforeach     
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <input name="salary" type="text" class="form-control" value="{{$govt_jobs_details->salary}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Job Context</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="job_context" rows="8" style="background-color: #ececec;">{!!$govt_jobs_details->job_context!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Job Responsibilities</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="job_responsibilities" rows="8" style="background-color: #ececec;">{!!$govt_jobs_details->job_responsibilities!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Educational Requirements</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="educational_requirements" rows="8" style="background-color: #ececec;">{!!$govt_jobs_details->educational_requirements!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Additional Requirements</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="additional_requirements" rows="7" style="background-color: #ececec;">{!!$govt_jobs_details->additional_requirements!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <label>Application Note</label>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" name="application_note" rows="8" style="background-color: #ececec;">{!!$govt_jobs_details->application_note!!}</textarea>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 455px;">Save</button>
            
        </form>
    </div>
    <div class="col-md-1"></div>
</div>






@endsection

@push('js')
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>


@endpush