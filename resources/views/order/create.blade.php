@extends('layout.main')

@section('title', "Create Order")

@include('headers.table')

@section('main-content')
<!-- ORDER FORM -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class = 'card-header'>
				<table class="table table-hover" style="width:100%">
				<col width="130">
				<col width="80">
					<thead>
						<th width="25%">Order #</th>
						<th width="25%">Date</th>
						<th width="25%">Customer</th>
					</thead>

					<tbody>
						<tr>
						<td>1</td>
						<td>{{ Carbon\Carbon::now() }}</td>
						<td><a>Crisostomo Ibarra</a></td>
						</tr>
					</tbody>
				</table>

					<hr>
			</div>

			@if(count($errors) > 0)
				<div class="alert alert-danger">
				<strong>Whooops!! </strong> There were some problems with your input.<br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
				</div>
			@endif

			<div class="content">
				<form>
				@include('order.form')
			</form>

			<div class="clearfix"></div>
			</div>
	</div>
</div>
</div>
@endsection
