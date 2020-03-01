@extends('FrontEnd.layout')

@push('css')

<style type="text/css">
	a:hover,a:focus{
    text-decoration: none;
    outline: none;
}
.tab .nav-tabs{
    border: none;
    border-bottom: 2px solid #079fc9;
    margin: 0;
}
.tab .nav-tabs li a{
    padding: 10px 20px;
    margin: 0 10px -1px 0;
    font-size: 17px;
    font-weight: 600;
    color: #293241;
    text-transform: uppercase;
    border: 2px solid #e6e5e1;
    border-bottom: none;
    border-radius: 5px 5px 0 0;
    z-index: 1;
    position: relative;
    transition: all 0.3s ease 0s;
}
.tab .nav-tabs li a:hover,
.tab .nav-tabs li.active a{
    background: #fff;
    color: #079fc9;
    border: 2px solid #079fc9;
    border-bottom-color: transparent;
}
.tab .nav-tabs li a:before{
    content: "";
    display: block;
    height: 2px;
    background: #fff;
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out 0s;
}
.tab .nav-tabs li.active a:before,
.tab .nav-tabs li a:hover:before{ transform: scaleX(1); }
.tab .tab-content{
    padding: 10px;
    font-size: 17px;
    color: #6f6f6f;
    line-height: 30px;
    letter-spacing: 1px;
    position: relative;
}
@media only screen and (max-width: 479px){
    .tab .nav-tabs{ border: none; }
    .tab .nav-tabs li{
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
    }
    .tab .nav-tabs li a{
        margin: 0;
        border-bottom: 2px solid transparent;
    }
    .tab .nav-tabs li a:before{
        content: "";
        width: 100%;
        height: 2px;
        background: #079fc9;
        position: absolute;
        bottom: -2px;
        left: 0;
    }
}
</style>



@endpush()




@section('content')



<div class="container">
    <div class="row" style="margin-top: 50px">
    	<div class="col-md-3">
    		<div class="row">
    			<img width="50%" height="50%" align="center" src="{{asset('images/mogammelvai.jpg')}}" style="">
    			<h3>Software Engineer</h3>
    			<h5>Hello Friends. I am from Noakhali</h5>
    		</div>
    	</div>
    	<div class="col-md-9">    		
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Seeker 1</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Seeker 2</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Seeker 3</a></li>
                    <!-- <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">Company Business Type</a></li>
                    <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab">Phone Number</a></li>
                    <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab">Email</a></li> -->
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h3>Section 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h3>Section 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane fade" id="Section4">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section5">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section6">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                    </div> -->
                </div>
            </div>
    	</div>
    </div>
</div>


@endsection()






@push('js')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endpush()