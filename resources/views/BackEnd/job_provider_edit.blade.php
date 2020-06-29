@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.providersEdit',$edit->id)}}" method="post" enctype="multipart/form-data" style="margin-top: -30px;">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label>Company Name</label>
                        <input name="com_name" type="text" class="form-control" value="{{$edit->com_name}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Web Link</label>
                        <input name="com_web_link" type="text" class="form-control" value="{{$edit->com_web_link}}" style="background-color: #ececec;width: 75%;">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input name="com_address" type="text" class="form-control" value="{{$edit->com_address}}" style="background-color: #ececec;width: 75%;">
                    </div>                  

                    <div class="form-group">
                        <label>Business Type</label>
                        <select class="form-control" name="com_business_type" style="width: 75%; background-color: #ececec;">
                            <option value="">Select Business Type</option>
                        @foreach($jobcategories as $all_cat)
                            <option value="{{($all_cat->id)}}" {{($all_cat->id==$edit->com_business_type)?'selected=""':''}}>{{$all_cat->job_category_name}}</option>
                        @endforeach     
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trade License</label>
                        <input name="trade_license" id="finish2" type="text" class="form-control" value="{{$edit->trade_license}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>TIN Number</label>
                        <input name="tin_number" type="text" class="form-control" value="{{$edit->tin_number}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Starting Date</label>
                        <input name="company_starting_date" type="text" class="form-control" value="{{$edit->company_starting_date}}" style="background-color: #ececec;width: 75%;">
                    </div>                      
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input name="phn_number" type="text" class="form-control" value="{{$edit->phn_number}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" value="{{$edit->email}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <img width="50%" height="50%" align="center" src="/images/{{$edit->provider_image}}" style="">
                        <input type="file" name="provider_image">
                    </div>      
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px">Save</button>           
        </form>
    </div>
    <div class="col-md-1"></div>
</div>



@endsection()

@push('js')


@endpush()