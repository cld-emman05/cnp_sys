@extends('layout.main')

@section('title', "Order Supplies")

@include('headers.purchasing')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
											<h5 class="card-category">Purchase Supplies</h5>
											<h4 class="card-title">Compute Supply</h4>
									</div>

                  <div class = 'card-header'>
            				<table class="table table-hover" style="width:100%">
            				<col width="130">
            				<col width="80">
            					<thead>
            						<th width="25%">Order #</th>
            						<th width="25%">Date</th>
            						<th width="25%">Customer</th>
            						<th width="25%">Sales Agent</th>

            					</thead>

            					<tbody>
            						<tr>
            						<td>1</td>
            						<td>{{ Carbon\Carbon::now() }}</td>
            						<td><a>Crisostomo Ibarra</a></td>
                        <td><a>Nidora Zobeyala</a></td>
            						</tr>
            					</tbody>
            				</table>
            			</div>


              <div class="col-md-12" id = 'cred_supplier-panel'>
    							<div class="card card-chart" id = 'cred_supplier'>
                    <div class="card-body">

                      <!-- JOB NAME -->
                      <div class= 'card-body'>
                        <div class="row">
                          <div class="col-md-6 pr-5">
                            <div class="form-group">
                              {{ Form::label('job_name', 'Job Type:') }}
                              {{ Form::text('job_name', '', [
                                'class' => 'form-control border-input',
                                'placeholder' => 'Enter'
                              ])}}
                            </div>
                          </div>

                          <!-- JOB TYPE -->
                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                              <!-- {{ Form::label('jobtype', 'Job Type') }}
                              {{ Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter','id'=>'jobtype'])}} -->
                              {{ Form::label('jobtype', 'Job Type:') }}
                              <select class="form-control" id="jobtype" name="jobtype">
                              <option value="1"> -- </option>

                              </select>
                            </div>
                          </div>

                          <div class="col-md-3 pr-1">
                          <div class="form-group">
                          <!-- QUANTITY -->
                          	{{ Form::label('quantity', 'Quantity') }}
                          		<div class="container">
                          			<div class="count-input space-bottom">
                          			{{ Form::number('quantity', '1', ['class' => 'form-control border-input'])}}
                          		</div>
                          	</div>
                          </div>
                          </div>

                          <div class="col-md-3 px-1">
                          <div class="form-group">
                          <!-- PAGE COUNT -->
                          	{{ Form::label('page_count', 'Number of Pages') }}
                          		<div class="container">
                          			<div class="count-input space-bottom">
                          			{{ Form::number('page_count', '1', ['class' => 'form-control border-input'])}}
                          			</div>
                          		</div>
                          	</div>
                          </div>

                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                            <!-- SIZE -->
                          	{{ Form::label('size', 'Size') }}
                          	<select class="form-control" id="size" name="size">
                          	<option value="1"> -- </option>
                          	</select>

                            </div>
                          </div>
                          </div>

                          <br><br>

                          <div class = 'row'>
                          	<div class = 'col-md-6 pr-1'>
                          		<label><b>Cover</b></label>
                          	</div>
                          </div>

                          <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <!-- COVER PAPER -->
                            {{ Form::label('cover_paper', 'Paper Type') }}
                          	<select class="form-control" id="cover_paper" name="cover_paper">
                          	<option value="1"> -- </option>
                          	</select>
                            </div>
                          </div>

                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                            <!-- INSIDE PAPER -->
                          	{{ Form::label('cover_color', 'Paper Color') }}
                          	<select class="form-control" id="cover_color" name="cover_color">
                          	<option value="1"> Black and White </option>
                          	<option value="2"> Colored </option>
                          	</select>
                            </div>
                          </div>
                          </div>

                          <div class = 'row'>
                          	<div class = 'col-md-6 pr-1'>
                          		<label><b>Inside</b></label>
                          	</div>
                          </div>

                          <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <!-- COVER PAPER -->
                            {{ Form::label('inside_paper', 'Paper Type') }}
                          	<select class="form-control" id="cover_paper" name="cover_paper">
                          	<option value="1"> -- </option>
                          	</select>
                          <br><br>
                            </div>
                          </div>

                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                            <!-- INSIDE PAPER -->
                          	{{ Form::label('inside_color', 'Paper Color') }}
                          	<select class="form-control" id="cover_color" name="cover_color">
                          	<option value="1"> Black and White </option>
                          	<option value="2"> Colored </option>
                          	</select>
                          <br><br>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 pr-1">
                        <div class="form-group">
                        <!-- QUANTITY -->
                          {{ Form::label('supply_price', 'Amount (in PhP)') }}
                            <div class="container">
                              <div class="count-input space-bottom">
                              {{ Form::text('supply_price', '', ['class' => 'form-control border-input'])}}
                            </div>
                          </div>
                        </div>
                        </div>

                        <div class="container-fluid">
                          {{Form::submit('Post', ['class' => 'btn btn-success btn-fill btn-wd pull-right', 'id' => 'post-quote'])}}
                        </form>
                        <button class="btn btn-info btn-wd btn-fill pull-left" id='calculate'>Compute</button>
                      </div>

    								</div>
    							</div>
				</div>
			</div>
	</div>

</div>
</div>
@endsection
