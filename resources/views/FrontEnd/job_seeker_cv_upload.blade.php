@extends('FrontEnd.layout')

@push('css')



@endpush()


@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><h2>Please add your resume</h2></div>
                      <div class="panel-body">
                   
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        
                        @endif
                  
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                  
                        <form action="{{route('seeker.jobseekerCvStore')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="file" class="form-control">
                                </div>
                   
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                </div>
                   
                            </div>
                        </form>
                  
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-heading"><h2>Please add your resume</h2></div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>

</div>


@endsection()


@push('js')
<!-- For alert msg slider start -->
<script>
  
$(document).ready (function(){
            $(".alert").fadeTo(3000, 3000).slideUp(800);
 });
</script>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- For alert msg slider end -->


@endpush()