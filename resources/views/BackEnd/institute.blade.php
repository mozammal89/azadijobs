@extends('BackEnd.layout')

@push('css')
 <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/data-table/bootstrap-editable.css')}}">
      <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/modals.css')}}">
@endpush

@section('content')

<div class="sparkline11-graph">
    <div class="basic-login-form-ad">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="right">
                
                <div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <div class="modal-login-form-inner">
                                    
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="basic-login-inner modal-basic-inner">
                                                <h3>Add Institute</h3>
                                                <p></p>
                                                <form action="{{route('admin.institute.store')}}" method="post">
                                                    @csrf
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label class="login2">Name</label>
                                                                <input type="text" class="form-control" name="institute_name" placeholder="Enter Name" />
                                                                <label class="login2">Email</label>
                                                                <input type="text" class="form-control" name="institute_email" placeholder="Enter Email" />
                                                                <label class="login2">Address</label>
                                                                <input type="text" class="form-control" name="institute_address" placeholder="Enter Address" />
                                                                <label class="login2">Phone</label>
                                                                <input type="text" class="form-control" name="institute_contact_number" placeholder="Enter Phone Number" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                          
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="login-horizental">
                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save </button>
                                                                </div>
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
        </div>
    </div>
</div>

                            



<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-sparkline13-hd">
                            <h1>Institute Table</h1>
                        </div>
                            </div>
                            <!-- Model Button Start -->
                            <div class="col-md-6" align="right">
                                 <div class="modal-bootstrap modal-login-form" style="margin-right: 3%;">
                                        <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Add Institute</a>
                                    </div>
                            </div>
                            <!-- Model Button End -->
                            

                        </div>
                        
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                          
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="institute_name">Name</th>
                                        <th data-field="institute_email">Email</th>
                                        <th data-field="institute_address">Address</th>
                                        <th data-field="institute_contact_number">Phone</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($institute as $all_institutes)
                                    <tr>     
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$all_institutes->institute_name}}</td>
                                        <td>{{$all_institutes->institute_email}}</td>
                                        <td>{{$all_institutes->institute_address}}</td>
                                        <td>{{$all_institutes->institute_contact_number}}</td>
                                        <td>
                      
                                        <a class="zoomInDown mg-t btn btn-primary" href="#" data-toggle="modal" data-target="#zoomInDown2_{{$all_institutes->id}}">Edit</a>
                               
                                         <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal_{{$all_institutes->id}}">Delete</button>

                                     </td>
                                         </div>
                                    </tr>  


                                     <div class="sparkline11-graph">

                                        
<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="right">
            
            <div id="zoomInDown2_{{$all_institutes->id}}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <div class="modal-body">
                            <div class="modal-login-form-inner">
                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="basic-login-inner modal-basic-inner">
                                            <h3>Update Institute</h3>
                                            <p></p>
                                            <form action="{{route('admin.institute.update',$all_institutes->id)}}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label class="login2">Name</label>
                                                            <input type="text" class="form-control" name="institute_name" value="{{$all_institutes->institute_name}}" />
                                                            <label class="login2">Email</label>
                                                            <input type="text" class="form-control" name="institute_email" value="{{$all_institutes->institute_email}}" />
                                                            <label class="login2">Address</label>
                                                            <input type="text" class="form-control" name="institute_address" value="{{$all_institutes->institute_address}}" />
                                                            <label class="login2">Phone</label>
                                                            <input type="text" class="form-control" name="institute_contact_number" value="{{$all_institutes->institute_contact_number}}" />
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                      
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="login-horizental">
                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                                                            </div>
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
    </div>
</div>

                        <!--Delete Mode Start here -->


                        <div class="modal fade" id="exampleModal_{{$all_institutes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('admin.institute.delete',$all_institutes->id)}}" method="post"> 
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
                    </div>

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


@endsection

@push('js')
 <!-- data table JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('BackEnd/js/data-table/bootstrap-table-export.js')}}"></script>
@endpush