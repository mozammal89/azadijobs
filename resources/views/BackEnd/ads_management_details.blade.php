@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.adsManagement.details',$ads_info->id)}}" method="post" style="margin-top: -30px;">
            @csrf
           
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="form-group">
                        <label>Category Name</label>
                        <input name="ads_cat_name" type="text" class="form-control" value="{{$ads_info->ads_cat_name}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Category Title</label>
                        <input name="ads_cat_title" type="text" class="form-control" value="{{$ads_info->ads_cat_title}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>                  

                    <div class="form-group">
                        <label>URL</label>
                        <input name="ads_ref_url" type="text" class="form-control" value="{{$ads_info->ads_ref_url}}"  style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <label>Position</label>
                        <input name="ads_position" type="text" class="form-control" value="{{$ads_info->ads_position}}"  style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <label>Start Date</label>
                        <input name="start_date" type="date" class="form-control" value="{{$ads_info->start_date}}"  style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <label>End Date</label>
                        <input name="end_date" type="date" class="form-control" value="{{$ads_info->end_date}}"  style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                        
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image</label>
                        <br>
                        <img src="/ads_images/{{$ads_info->image}}" style="height: 50%; width: 50%;" />
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