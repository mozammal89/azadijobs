@extends('BackEnd.layout')

@push('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@endpush()

@section('content')

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list" style="margin-top: -60px;">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Provider Lists</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
									<option value="">Export Basic</option>
									<option value="all">Export All</option>
									<option value="selected">Export Selected</option>
								</select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="com_name">Company Name</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="com_address">Address</th>
                                        <th data-field="action">Action</th>
                                        <th data-field="status">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($list as $all_provider)
                                    <tr>         
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$all_provider->com_name}}</td>
                                        <td>{{$all_provider->email}}</td>
                                        <td>{{$all_provider->com_address}}</td>
                                        <td>
                                        	<a href="{{route('admin.providersDetails',$all_provider->id)}}" class="btn btn-info" role="button">Details</a>

                                        	<a href="{{route('admin.providersgetEdit',$all_provider->id)}}" class="btn btn-primary" role="button">Edit</a>

                                        	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_{{$all_provider->id}}">Delete</button>
                                        </td>
                                        <td>
                                             <input data-id="{{$all_provider->id}}" id="status_id_{{$all_provider->id}}" class="toggle-class" onchange="fnstatuschange({{$all_provider->id}});" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $all_provider->status ? 'checked' : '' }}>
                                        </td>      
                                    </tr>
                                <!--Delete Mode Start here -->


                        <div class="modal fade" id="exampleModal_{{$all_provider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('admin.providersDelete',$all_provider->id)}}" method="post"> 
                                    @csrf

                                    @method('DELETE')
                                  <div class="modal-body">
                                        <h4>Are you sure want to Delete  ?</h4>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                        <!--Delete Mode End here -->
                       	
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->



@endsection()

@push('js')
<script>
 
  function fnstatuschange(ProviderID)
  {
    
     var status = $('#status_id_'+ProviderID).prop('checked') == true ? 1 : 0; 
        var id = ProviderID; 
        $.ajax({
            method: "GET",         
            url: "{{url('/changeProviderStatus')}}",
            dataType: "json",
            data: { status:status, id: id},
            success: function(data){


              console.log(data.success);
            }
        });
  }
</script>

@endpush()