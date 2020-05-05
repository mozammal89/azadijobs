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

<!-- Sub Category Model Start -->

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="sparkline11-list responsive-mg-b-30">
        <div class="sparkline11-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-login-form-inner">
                                            <div class="row">
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="basic-login-inner modal-basic-inner">
                                                        <h3>Add Sub Category</h3>
                                                        
                                                        <form action="{{route('admin.subcategory.store')}}" method="post">
                                                            @csrf
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <label class="login2">Job Category</label>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                            <div class="form-select-list">
                                                                                <select class="form-control custom-select-value" name="category_id" required="">
                                                                                    <option value="">Select Category</option>
                                                                                @foreach($category as $all_cat)
                                                                                    <option value="{{$all_cat->id}}">{{$all_cat->job_category_name}}</option>
                                                                                @endforeach            
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <br>
                                                                    </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                <label class="login2">Sub Category</label>
                                                                            </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                            <input type="text" class="form-control" name="sub_category_name" placeholder="Enter Sub Category" required="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="login-btn-inner">
                                                               
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                        <div class="login-horizental">
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
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
    </div>
</div>

<!-- Sub Category Model End -->


<!-- Sub Category Data Table Start -->

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-md-8">
                                   <!--  @if (session('success'))
                                        <div class="alert alert-success">
                                            <span>{{ session('success') }}</span>
                                    </div>
                                    @endif


                                      @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endif -->
                                </div>

                                <div class="col-2"></div>
                            </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-sparkline13-hd">
                                    <h1>Sub Category</h1>
                                </div>
                            </div>
                            <!-- Model Button Start -->
                            <div class="col-md-6" align="right">
                                <div class="modal-bootstrap modal-login-form">
                                        <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Add Sub Category</a>
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
                                        <th data-field="cat_id">Category Name</th>
                                        <th data-field="name">Sub Category Name</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($sub_cat as $all_cat)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$all_cat->category->job_category_name}}</td>
                                        <td>{{$all_cat->sub_category_name}}</td>
                                        <td>
                                            <div class="modal-bootstrap modal-login-form">
                                                <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown2_{{$all_cat->id}}">Edit</a>
                                            </div>

                                            <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal3_{{$all_cat->id}}">Delete</button>
                                        </td>
                                    </tr> 

<!-- Sub Category Edit Model Start -->

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="sparkline11-list responsive-mg-b-30">
        <div class="sparkline11-hd">
            <div class="main-sparkline11-hd">
                
            </div>
        </div>
        <div class="sparkline11-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <div id="zoomInDown2_{{$all_cat->id}}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-login-form-inner">
                                            <div class="row">
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="basic-login-inner modal-basic-inner">
                                                        <h3>Update Sub Category</h3>
                                                        
                                                          <form action="{{route('admin.subcategory.update',$all_cat->id)}}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <label class="login2">Job Category</label>
                                                                        </div>
                                                                       
                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                            <div class="form-select-list">
                                                                                <select class="form-control custom-select-value" name="category_id" required="">
                                                                                    <option value="">Select Category</option>
                                                                                @foreach($category as $all_cats)

                                                                                    <option value="{{$all_cats->id}}" {{($all_cats->id==$all_cat->cat_id)?'selected=""':''}}>{{$all_cats->job_category_name}}</option>
                                                                                @endforeach            
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <br>
                                                                    </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                <label class="login2">Sub Category</label>
                                                                            </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                            <input type="text" class="form-control" name="sub_category_name" value="{{$all_cat->sub_category_name}}" required="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="login-btn-inner">
                                                               
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
        </div>
    </div>
</div>

<!-- Sub Category Edit Model End -->

<!-- Sub Category Delete Model Start -->

<div class="modal fade" id="exampleModal3_{{$all_cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('admin.subcategory.delete',$all_cat->id)}}" method="post"> 
            @csrf

            @method('DELETE')
          <div class="modal-body">
                <h4>Are you sure want to Delete ?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Delete</button>
          </div>
          </form>
        </div>
      </div>
    </div>

<!-- Sub Category Delete Model End -->

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

<!-- Sub Category Data Table End -->

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