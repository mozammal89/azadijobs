@extends('FrontEnd.layout')

@push('css')


@endpush()

@section('content')

<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">
				<span>Here is your Curriculum Vitae. You can also download it.</span>
			</div>
			<div class="card-body">
				<table>
					<tbody>
						<tr>
							<td>NAME</td>
							<td>
								<img src="{{asset('images/image1584860545.jpg')}}" height="30%" width="30%">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		
	</div>
</div>




@endsection()

@push('js')


@endpush()