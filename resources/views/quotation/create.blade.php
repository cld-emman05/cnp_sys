@extends('layout.main')

@section('title', "Create Quotations")

@include('headers.quotation')

@section('main-content')

<--! PRICE COMPUTATIONS -->
			<div class="row">
				<div class="col-md-12">
					<div class="card">
					<div class = 'card-header'>
							<table  class="table table-hover" style="width:100%">
							<col width="130">
							<col width="80">
								<thead>
									<th width="25%">Quotation #</th>
									<th width="25%">Title of Job</th>
									<th width="25%">Customer</th>
									<th width="25%">Salesman</th>
								</thead>

								<tbody>
									<tr>
									<td>1</td>
									<td>Journal</td>
									<td><a>Crisostomo Ibarra</a></td>
									<td><a>Nidora Zobeyala</a></td>
									</tr>
								</tbody>
							</table>

							<hr>
						</div>

						<div class="card-body">
							<center><h2 class="title">Price Computations</h2>
							</center>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover" style="width:100%">
							<col width="130">
							<col width="80">

							<form>

							<thead>
							<th width="25%"></th>
							<th width="25%">Specification</th>
							<th width="25%">Price</th>
							</thead>

							<tbody>

							<tr>
							<td><b>{{ Form::label('quantity', 'Quantity') }}<b></td>
							<td width="25%">{{ Form::text('quantity', 1, ['class' => 'form-control border-input', 'placeholder' => 'How many orders?', 'id'=>'quantity'])}}
							<td></td>
							</tr>

							<tr>
							<td><b>{{ Form::label('# Of Pages', '# Of Pages') }}<b></td>
							<td width="25%">{{ Form::text('pagenumber', 1, ['class' => 'form-control border-input', 'placeholder' => 'How many pages?', 'id'=>'pagenumber'])}}
							<td></td>
							</tr>


							<tr>
							<td>Stocks:</td>
							<td></td>
							<td></td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('cover_stock_price', 'Cover') }}</td>
							<td>{{ @$order->cover_papers->type }}</td>
							<td width="25%">{{ Form::text('cover_stock_price','', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'coverstockP'])}}
							</td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('inside_stock_price', 'Inside') }}</td>
							<td>{{ @$order->inside_papers->type }}</td>
							<td width="25%">{{ Form::text('inside_stock_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'insidestockP'])}}
							</td>
							</tr>

							<tr>
							<td>Offset Running</td>
							<td></td>
							<td></td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('cover_offset_price', 'Cover') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('cover_offset_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'coveroffsetP'])}}
							</td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('inside_offset_price', 'Inside') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('inside_offset_price', '', ['class' => 'form-control border-input ', 'placeholder' => 'How much?', 'id'=>'insideoffsetP'])}}
							</td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('other_offset_price', 'Others') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('other_offset_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'otheroffsetP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('lamination_price', 'Lamination') }}</td>
							<td>{{ @$order->lamination->name }}</td>
							<td width="25%">{{ Form::text('lamination_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'laminationP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('letterpress_price', 'Letterpress Running') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('letterpress_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'letterpressP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('binding_price', 'Binding') }}</td>
							<td>{{ @$order->binding->name }}  </td>
							<td width="25%">{{ Form::text('binding_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'bindingP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('diecut_price', 'Die Cutting/Blades/Cliche') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('diecut_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'diecutP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('diecut_run_price', 'Diecutting Running') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('diecut_run_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'diecutrunningP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('other_price', 'Others') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('other_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?', 'id'=>'othersP'])}}
							</td>
							</tr>

							<tr></tr>
							<tr></tr>

							<tr>
							<td>Total:</td>
							<td></td>
							<td>PhP
							<input type = 'text' class="form-control border-input" id='TotalAll' name='TotalAll'/>
							</td>
							</tr>

							<tr>
							<td>Unit Cost:</td>

							<td></td>
							<td>PhP  <input type = 'text' class="form-control border-input" id='UnitCost' name='UnitCost'/></td></td>
							</tr>
							</tbody>
              <tr></tr>
						</table>
						<div class="container-fluid">
							{{Form::submit('Post', ['class' => 'btn btn-success btn-fill btn-wd pull-right', 'id' => 'post-quote'])}}
						</form>
            <button class="btn btn-info btn-wd btn-fill pull-left" id='calculate'>Compute</button>
          </div>
						<div>
				</div>
			</div>
		</div>
@endsection
