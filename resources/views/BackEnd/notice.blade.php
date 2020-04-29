@extends('BackEnd.layout')

@push('css')
 <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/data-table/bootstrap-editable.css')}}">
      <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/modals.css')}}">

  	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
                                                <h3>Add Notice</h3>
                                                <p></p>
                                                <form action="{{route('admin.notice.store')}}" method="post">
                                                    @csrf
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label class="login2">Title</label>
                                                                <input type="text" class="form-control" name="notice_title" placeholder="Enter Notice Name" />
                                                                <div class="form-group">
													                <div class="card">
													                    <div class="card-body">
													                        <label>Describtion</label>
													                        <div class="form-group">
													                            <textarea class="textarea_editor form-control" name="notice_describtion" rows="7" style="background-color: #ececec;" placeholder="Enter text ..."></textarea>
													                        </div>
													                      </div>
													                </div>
												              	</div>
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
                            <h1>Notice Table</h1>
                        </div>
                            </div>
                            <!-- Model Button Start -->
                            <div class="col-md-6" align="right">
                                 <div class="modal-bootstrap modal-login-form" style="margin-right: 3%;">
                                        <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Add Notice</a>
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
                                        <th data-field="notice_title">Title</th>
                                        <th data-field="notice_describtion">Describtion</th>
                                        <th data-field="action">Action</th>
                                        <th data-field="status">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($notice as $all_notices)
                                    <tr>     
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$all_notices->notice_title}}</td>
                                        <td><textarea class="textarea_editor form-control" rows="7" style="background-color: #fff;" readonly="">{!!$all_notices->notice_describtion!!}</textarea></td>
                                        <td>
                                        <a class="zoomInDown mg-t btn btn-primary" href="#" data-toggle="modal" data-target="#zoomInDown2_{{$all_notices->id}}">Edit</a>
                            		    <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal_{{$all_notices->id}}">Delete</button>
                                     	</td>
                                     	<td>
                                            <input data-id="{{$all_notices->id}}" id="status_id_{{$all_notices->id}}" class="toggle-class" onchange="fnstatuschange({{$all_notices->id}});" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $all_notices->status ? 'checked' : '' }}>
                                        </td>
                                    </tr>  


                                     <div class="sparkline11-graph">

                                        
<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="right">
            
            <div id="zoomInDown2_{{$all_notices->id}}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                            <h3>Update Notice</h3>
                                            <p></p>
                                            <form action="{{route('admin.notice.update',$all_notices->id)}}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label class="login2">Title</label>
                                                            <input type="text" class="form-control" name="notice_title" value="{{$all_notices->notice_title}}" />
                                                            <div class="form-group">
												                <div class="card">
												                    <div class="card-body">
												                        <label>Describtion</label>
												                        <div class="form-group">
												                            <textarea class="textarea_editor form-control" name="notice_describtion" rows="7" style="background-color: #fff;">{!!$all_notices->notice_describtion!!}</textarea>
												                        </div>
												                      </div>
												                </div>
											              	</div>
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


                        <div class="modal fade" id="exampleModal_{{$all_notices->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('admin.notice.delete',$all_notices->id)}}" method="post"> 
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

    <script src="{{asset('BackEnd/js/wysihtml5-0.3.0.js')}}"></script>
	<script src="{{asset('BackEnd/js/bootstrap-wysihtml5.js')}}"></script>

	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    <script>
 
	  function fnstatuschange(NoticeID)
	  {
	    
	     var status = $('#status_id_'+NoticeID).prop('checked') == true ? 1 : 0; 
	        var id = NoticeID; 
	        $.ajax({
	            method: "GET",         
	            url: "{{url('/changeNoticeStatus')}}",
	            dataType: "json",
	            data: { status:status, id: id},
	            success: function(data){

	            }
	        });
	  }
	</script>
@endpush