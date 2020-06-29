@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="{{route('admin.providersDetails',$details->id)}}" method="post" style="margin-top: -30px;">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label>Company Name</label>
                        <input name="com_name" type="text" class="form-control" value="{{$details->com_name}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Web Link</label>
                        <input name="com_web_link" type="text" class="form-control" value="{{$details->com_web_link}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input name="com_address" type="text" class="form-control" value="{{$details->com_address}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>                  

                    <div class="form-group">
                        <label>Business Type</label>
                        <input name="com_business_type" id="finish" type="text" class="form-control" value="{{$details->type->job_category_name}}"  style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Trade License</label>
                        <input name="trade_license" id="finish2" type="text" class="form-control" value="{{$details->trade_license}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>TIN Number</label>
                        <input name="tin_number" type="text" class="form-control" value="{{$details->tin_number}}" style="background-color: #ececec;width: 75%;">
                    </div>
                    <div class="form-group">
                        <label>Starting Date</label>
                        <input name="company_starting_date" type="text" class="form-control" value="{{$details->company_starting_date}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>                      
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input name="phn_number" type="text" class="form-control" value="{{$details->phn_number}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" value="{{$details->email}}" style="background-color: #ececec;width: 75%;" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <img width="50%" height="50%" align="center" src="/images/{{$details->provider_image}}" style="">
                    </div>      
                </div>
            </div>           
        </form>
    </div>
    <div class="col-md-1"></div>
</div>



@endsection()

@push('js')


@endpush()