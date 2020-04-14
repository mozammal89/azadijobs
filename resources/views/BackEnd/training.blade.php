@extends('BackEnd.layout')

@push('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />

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
                            <h1>Training Lists</h1>
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
                                        <th data-field="training_title">Training Title</th>
                                        <th data-field="training_subject">Training Subject</th>
                                        <th data-field="training_address">Training Address</th>
                                        <th data-field="training_place">Training Place</th>
                                        <th data-field="training_hour">Training Hour</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($all_training as $training)
                                    <tr>         
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$training->training_title}}</td>
                                        <td>{{$training->training_subject}}</td>
                                        <td>{{$training->training_address}}</td>
                                        <td>{{$training->training_place}}</td>
                                        <td>{{$training->training_hour}}</td>
                                        <td>
                                        	<a href="{{route('admin.trainingDetails',$training->id)}}" class="btn btn-info" role="button">Details</a>

                                        	<a href="{{route('admin.trainingEditget',$training->id)}}" class="btn btn-primary" role="button">Edit</a>

                                        	<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal_{{$training->id}}">Delete</button>
                                        </td>    
                                    </tr>
                                    <!--Delete Mode Start here -->


                        <div class="modal fade" id="exampleModal_{{$training->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('admin.trainingDelete',$training->id)}}" method="post"> 
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


@endpush()