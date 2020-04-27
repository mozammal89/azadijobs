@extends('BackEnd.layout')

@push('css')
 <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('BackEnd/css/data-table/bootstrap-editable.css')}}">
      <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/modals.css')}}">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('BackEnd/css/datapicker/datepicker3.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
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
                                                <h3>Add New Ads</h3>
                                                <p></p>
                                                <form action="{{route('admin.adsManagement.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <label class="login2">Category Name</label>
                                                                <input type="text" class="form-control" name="ads_cat_name">

                                                                <label>Category Title</label>
                                                                <input type="text" class="form-control" name="ads_cat_title">

                                                                <label>URL</label>
                                                                <input type="text" class="form-control" name="ads_ref_url">

                                                                <label>Date Range</label>
                                                                <div class="input-daterange input-group" id="datepicker">
                                                                    <input type="date" class="form-control" name="start_date" value="" />
                                                                    <span class="input-group-addon">to</span>
                                                                    <input type="date" class="form-control" name="end_date" value="" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <label>Image</label>
                                                                <input type="file" class="form-control" name="image">

                                                                <label>Position</label>
                                                                    <select class="form-control custom-select-value" name="ads_position">
                                                                    <option value="">Select Position</option>
                                                                    <option value="Position 1">Position 1</option>
                                                                    <option value="Position 2">Position 2</option>
                                                                    <option value="Position 3">Position 3</option>
                                                                    </select> 
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
                            <h1>Ads Table</h1>
                        </div>
                            </div>
                            <!-- Model Button Start -->
                            <div class="col-md-6" align="right">
                                 <div class="modal-bootstrap modal-login-form" style="margin-right: 3%;">
                                        <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Add New Ads</a>
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
                                        <th data-field="ads_cat_name">Category Name</th>
                                        <th data-field="ads_cat_title">Category Title</th>
                                        <th data-field="ads_position">Position</th>
                                        <th data-field="start_date">Start Date</th>
                                        <th data-field="end_date">End Date</th>
                                        <th data-field="ads_status">Status</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ads_info as $all_ads_infos)
                                    <tr>     
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$all_ads_infos->ads_cat_name}}</td>
                                        <td>{{$all_ads_infos->ads_cat_title}}</td>
                                        <td>{{$all_ads_infos->ads_position}}</td>
                                        <td>{{$all_ads_infos->start_date}}</td>
                                        <td>{{$all_ads_infos->end_date}}</td>
                                        <td>
                                            <input data-id="{{$all_ads_infos->id}}" id="status_id_{{$all_ads_infos->id}}" class="toggle-class" onchange="fnstatuschange({{$all_ads_infos->id}});" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $all_ads_infos->status ? 'checked' : '' }}>
                                        </td>
                                       
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin.adsManagement.details',$all_ads_infos->id)}}">Details</a>

                                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#zoomInDown2_{{$all_ads_infos->id}}">Edit</a>
                                        

                                            <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal_{{$all_ads_infos->id}}">Delete</button>

                                     </td>
                                         </div>
                                    </tr>  


                                     <div class="sparkline11-graph">
                                        <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="right">
                                                
                                                <div id="zoomInDown2_{{$all_ads_infos->id}}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                                                                <h3>Update Ads</h3>
                                                                                <p></p>
                                                                                <form action="{{route('admin.adsManagement.update',$all_ads_infos->id)}}" method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('put')
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-md-8">
                                                                                                <label class="login2">Category Name</label>
                                                                                                <input type="text" class="form-control" name="ads_cat_name" value="{{$all_ads_infos->ads_cat_name}}">
                                                                                                <br>

                                                                                                <label>Category Title</label>
                                                                                                <input type="text" class="form-control" name="ads_cat_title" value="{{$all_ads_infos->ads_cat_title}}">
                                                                                                <br>

                                                                                                <label>URL</label>
                                                                                                <input type="text" class="form-control" name="ads_ref_url" value="{{$all_ads_infos->ads_ref_url}}">
                                                                                                <br>
                                                                                                

                                                                                                <label>Date Range</label>
                                                                                                <div class="input-daterange input-group" id="datepicker">
                                                                                                    <input type="date" class="form-control" name="start_date" value="{{$all_ads_infos->start_date}}" />
                                                                                                    <span class="input-group-addon">to</span>
                                                                                                    <input type="date" class="form-control" name="end_date" value="{{$all_ads_infos->end_date}}" />
                                                                                                </div>
                                                                                                <br> 
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <label>Position</label>
                                                                                                    <select class="form-control custom-select-value" name="ads_position">
                                                                                                    <option value="{{$all_ads_infos->ads_position}}">{{$all_ads_infos->ads_position}}</option>
                                                                                                    <option value="Position 1">Position 1</option>
                                                                                                    <option value="Position 2">Position 2</option>
                                                                                                    <option value="Position 3">Position 3</option>
                                                                                                    </select>

                                                                                                    <br>

                                                                                                <label>Image</label>
                                                                                                <img src="/ads_images/{{$all_ads_infos->image}}" style="height: 50%; width: 50%;" />
                                                                                                <input type="file" class="form-control" name="image" value="/ads_images/{{$all_ads_infos->image}}" onchange="PreviewImage();" />
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


                        <div class="modal fade" id="exampleModal_{{$all_ads_infos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('admin.adsManagement.delete',$all_ads_infos->id)}}" method="post"> 
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
    <!-- datapicker JS
        ============================================ -->
    <script src="{{asset('BackEnd/js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('BackEnd/js/datapicker/datepicker-active.js')}}"></script>

    <script>
 
  function fnstatuschange(AdId)
  {
    
     var status = $('#status_id_'+AdId).prop('checked') == true ? 1 : 0; 
        var id = AdId; 
        $.ajax({
            method: "GET",         
            url: "{{url('/changeAdsStatus')}}",
            dataType: "json",
            data: { status:status, id: id},
            success: function(data){


              console.log(data.success);
            }
        });
  }
</script>
@endpush