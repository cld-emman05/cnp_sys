@extends('layout.main')

@section('title', "Manage Haggling Request")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Quotations</h5>
            <h4 class="card-title">Haggle Requests</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card-body'>
            <div class="col-lg-12 md-4">
  							<div class="card card-chart">
  								<table class="table table-hover">
    								<thead>
      								<tr>
        								<th>Quote #</th>
        								<th>Job Title</th>
        								<th>Customer</th>
        								<th>Job Price</th>
        								<th>Confirm</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr>
        								<td>1</td>
        								<td>Job Sample</td>
        								<td><a>Crisostomo Ibarra</a></td>
        								<td><a>PhP 30.00</a></td>
        								<td>
        									<btn class = 'btn btn-warning'>Update</btn>
        									<btn class = 'btn btn-danger'>Deny</btn>
        								</td>
      								</tr>
    								</tbody>
  								</table>
              </div>
            </div>
          </div>

								<div class="col-sm-12 ">
									<div class="result pull-left"><strong>Showing 1 to 2 of max</strong></div>
										<ul class="pagination pull-right">
											<li><a href="#">«</a></li>
											<li class = 'active'><a href="#1">1</a></li>
											<li><a href="#2">2</a></li>
											<li><a href="#3">3</a></li>
											<li><a href="#4">4</a></li>
											<li><a href="#5">5</a></li>
											<li><a href="#2">»</a></li>
										</ul>
							</div>

            </div>
          </div>
        </div>
@endsection
