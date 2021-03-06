@extends('BackEnd.layout')

@push('css')

@endpush()

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 10px;">
        <div class="sparkline13-list" style="margin-top: -60px;">
            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    <h1>Terms & Conditions</h1>
                </div>
            </div>
            <div class="sparkline13-graph">
                <div class="datatable-dashv1-list custom-datatable-overright">
                    <div id="toolbar">
                       <a href="{{route('admin.jobSeekersTandC.create')}}" class="btn btn-info" role="button">Create</a>
                    </div>
                    <table  id="table" data-toggle="table" data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="describtions">Describtions</th>
                                <th data-field="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($dis as $all_describtions)
                            <tr>      
                                <td>{{$loop->iteration}}</td>
                                <td><a href="{{route('admin.jobSeekersTandC.details',$all_describtions->id)}}" class="btn btn-warning" role="button"> Click Here For Details</a></td>
                                <td>
                                    <a href="{{route('admin.jobSeekersTandCGetEdit',$all_describtions->id)}}" class="btn btn-primary" role="button">Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_{{$all_describtions->id}}">Delete</button>
                                </td>     
                            </tr>
		                    <!--Delete Mode Start here -->
		                        <div class="modal fade" id="exampleModal_{{$all_describtions->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		                              <div class="modal-dialog" role="document">
		                                <div class="modal-content">
		                                  <div class="modal-header">
		                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
		                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                      <span aria-hidden="true">&times;</span>
		                                    </button>
		                                  </div>
		                                  <form action="{{route('admin.jobSeekersTandC.delete',$all_describtions->id)}}" method="post"> 
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



@endsection()

@push('js')

@endpush()