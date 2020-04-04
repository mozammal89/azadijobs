@extends('BackEnd.layout')


@section('content')

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
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
                                        <th data-field="job_title">Job Title</th>
                                        <th data-field="application_deadline" >Application Deadline</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($JobPost as $all_JobPost)
                                    <tr>         
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$all_JobPost->job_title}}</td>
                                        <td>{{$all_JobPost->application_deadline}}</td>
                                        <td>
                                        	<a href="{{route('provider.jpPostDetails',$all_JobPost->id)}}" class="btn btn-info" role="button">Details</a>
                                        	<a href="{{route('provider.jpPostEdit',$all_JobPost->id)}}" class="btn btn-primary" role="button">Edit</a>
                                        	<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal_{{$all_JobPost->id}}">Delete</button>
                                        </td>     
                                    </tr>
                        <!--Delete Mode Start here -->


                        <div class="modal fade" id="exampleModal_{{$all_JobPost->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('provider.jpPostDelete',$all_JobPost->id)}}" method="post"> 
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