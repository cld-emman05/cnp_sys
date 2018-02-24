@extends('layout.main')

@section('title', "Dashboard")

@include('headers.table')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
											<h5 class="card-category">Purchase Supplies</h5>
											<h4 class="card-title">Select Supplier</h4>
									</div>

									<div class="card-body">
                    <center>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <!-- INSIDE PAPER -->
                    	{{ Form::label('supplier_name', 'Supplier Name') }}
                    	<select class="form-control" id="supplier_name" name="supplier_name">
                    	<option value="1"> -- </option>
                    	<option value="2"> Cattleya </option>
                    	</select>

											<button name = 'sel_supplier', class = 'btn btn- btn-fill btn-wd', id='sel_supplier'>
												Select </button>
                      </div>
                    </div>
                    </center>
											</div>


              <div class="col-md-12" id = 'cred_supplier'>
    							<div class="card card-chart">
                    <div class="card-body">

                            <div class="row">
                            <div class="col-md-6 pr-5">
                        			<div class="form-group">
                        				{{ Form::label('supplier_address', 'Address') }}
                        				{{ Form::text('supplier_address', '', [
                        					'class' => 'form-control border-input',
                        					'placeholder' => 'Enter'
                        				])}}
                                <br><br>
                        			</div>
                        		</div>
                            </div>

                            <div class="row">
                          		<div class="col-md-6 pr-5">
                          			<div class="form-group">
                          				{{ Form::label('supplier_balance', 'Outstanding Balance (in PhP)') }}
                          				{{ Form::text('supplier_balance', '', [
                          					'class' => 'form-control border-input',
                          					'placeholder' => 'Enter'
                          				])}}
                                  <br><br>
                          			</div>
                          		</div>
                              </div>

                              <div class="row">
                            		<div class="col-md-6 pr-5">
                            			<div class="form-group">
                            				{{ Form::label('loan_status', 'Loan Status') }}
                            				{{ Form::text('job_name', '', [
                            					'class' => 'form-control border-input',
                            					'placeholder' => 'Available'
                            				])}}
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
@endsection
