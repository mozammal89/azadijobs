@extends('BackEnd.layout')

@push('css')


@endpush



@section('content')
<form action="{{route('admin.trainingCourseOutlineStore')}}" method="post">
	@csrf
<div class="row">
	<div class="col-md-12">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			
			@csrf
			<div class="row">
				<div class="col-md-6">
					<label>Training Titles</label>
					<select class="form-control custom-select-value" id="training_id" style="width: 75%; background-color: #ececec;">
						<option value="">Select Training</option>
					@foreach($training as $all_training)
						<option value="{{$all_training->id}}" data="{{$all_training->training_title}}">{{$all_training->training_title}}</option>
					@endforeach            
					</select>
				
				
					<label>Training Date</label>
					<input type="date" id="date" class="form-control" placeholder="" style="background-color: #ececec;width: 75%;">
				
				
					<label>Topic Duration</label>
					<input id="duration" type="text" class="form-control" placeholder=" " style="background-color: #ececec;width: 75%;">
				</div>
				
				<div class="col-md-6">
					<label>Training Type</label>
					<select class="form-control custom-select-value" id="type" style="width: 75%; background-color: #ececec;">
						<option value="">Select Type</option>
						<option value="class">Class</option>
						<option value="test">Test</option>
					</select>
			

			
					<label>Training Topic</label>
					<input id="topic" type="text" class="form-control" placeholder=" " style="background-color: #ececec;width: 75%;">
				
		
					<label>Topic Describtion</label>
					<textarea id="topic_describtion" class="form-control" style="background-color: #ececec;width: 75%;"></textarea>
				</div>      
			</div> 

			<a class="btn btn-primary btn-lg" href="javascript:void(0)" onclick="fnaddToTable();">Add</a>
				
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
			<table id="table" data-toggle="table" data-key-events="true"  data-resizable="true" data-click-to-select="true" data-toolbar="#toolbar">
			    <thead>
			        <tr>
			            <th data-field="id">ID</th>
			            <th data-field="training_id">Title</th>
			            <th data-field="date" >Date</th>
			            <th data-field="type">Type</th>
			            <th data-field="topic">Topic</th>
			            <th data-field="duration">Duration</th>
						<th data-field="topic_describtion">Describtion</th>
						<th data-field="remove">Remove</th>
			        </tr>
			    </thead>
			    <tbody>
			        
			    </tbody>
			</table>
			<input type="hidden" id="totalRow" value="0">

	</div>
	<div class="col-md-1"></div>
	<button type="submit" class="btn btn-primary btn-lg" style="padding: 8px;margin:14px;margin-left: 550px;">Submit</button>

</div>
</form>

@endsection

@push('js')
<script>
	function fnaddToTable(){

		var columnID = "cl_training_id&cl_date_id&cl_type_id&cl_topic_id&cl_duration_id&cl_topic_describtion_id";
		var columnName = "training_name[]&date[]&type[]&topic[]&duration[]&topic_describtion[]";

		columnID = columnID.split("&");
		columnName = columnName.split("&");

		var totalROW = $('#totalRow').val();


		var title_ID = $('#training_id').val();
		var title_name = $("#training_id").find("option:selected").attr("data");
		var date = $('#date').val();
		var topic = $('#topic').val();
		var type = $('#type').val();
		var duration = $('#duration').val();
		var topic_describtion = $('#topic_describtion').val();


		totalROW++;


		html= '<tr>';
		html += '<td >'+totalROW+'</td>';
		html += '<td > <input type="hidden" readonly id="'+columnID[0]+'_'+totalROW+'" name="'+columnName[0]+'" value="'+title_ID+'">'; 
		html += '<input type="text" style="border:none;" readonly  value="'+title_name+'"></td>';
		html += '<td > <input type="text" style="border:none;" readonly id="'+columnID[1]+'_'+totalROW+'" name="'+columnName[1]+'" value="'+date+'"> </td>';
		html += '<td > <input type="text" style="border:none;" readonly id="'+columnID[2]+'_'+totalROW+'" name="'+columnName[2]+'" value="'+topic+'"> </td>';
		html += '<td > <input type="text" style="border:none;" readonly id="'+columnID[3]+'_'+totalROW+'" name="'+columnName[3]+'" value="'+type+'"> </td>';
		html += '<td > <input type="text" style="border:none;" readonly id="'+columnID[4]+'_'+totalROW+'" name="'+columnName[4]+'" value="'+duration+'"> </td>';
		html += '<td > <input type="text" style="border:none;" readonly id="'+columnID[5]+'_'+totalROW+'" name="'+columnName[5]+'" value="'+topic_describtion+'"> </td>';

		html += '<td ><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>';

		html += '</tr>';

		$('#totalRow').val(totalROW);
	    

		$('#table tbody').find('tr:last').after(html);
		$('#date').val("");
		$('#topic').val("");
		$('#type').val("");
		$('#duration').val("");
		$('#topic_describtion').val("");






		console.log(columnName[0]);
		



		

		console.log(title_name);


	}


	function removeRow(Row){
		$(Row).closest("tr").remove();
		var totalROW = $('#totalRow').val();
		totalROW--;
		$('#totalRow').val(totalROW);

	}
</script>


@endpush