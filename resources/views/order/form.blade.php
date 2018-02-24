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
	</div>

</div>

<div class= 'card-body'>
<div class="header">
<center><h2 class="title"> Specifications </h2>
</div>
<!-- FORM CONTENT -->
<div class="content">

<div class="row">
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



<div class="row">
<div class="col-md-6">
  <div class="form-group">
  <!-- JOB SAMPLE -->
	  {{ Form::label('job_sample', 'Job Sample') }}
		{{ Form::file('myFile') }}
  </div>
</div>
</div>



<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
		<!-- LAMINATION -->
			{{ Form::label('lamination', 'Lamination') }}
			<select class="form-control" id="lamination" name="lamination">
			<option value="1"> -- </option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
		<!-- BINDING -->
			{{ Form::label('binding', 'Binding') }}
			<select class="form-control" id="binding" name="binding">
			<option value="1"> -- </option>

			</select>
		</div>
	</div>
</div>


<div class="row">
<div class="col-md-6">
  <div class="form-group">
  <!-- DATE DUE -->
	  {{ Form::label('date_due', 'Date Due') }}
	 {{ Form::date('date_due', \Carbon\Carbon::now(), ['class' => 'form-control border-input','id'=>'datedue'])}}
  </div>
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="form-group">
  <!-- COMMENTS -->
	{{ Form::label('comments', 'Comments') }}
	{{ Form::textarea('comments', '', ['class' => 'form-control border-input', 'placeholder' => 'Place your comment here', 'row' => 5,'id'=>'comments'])}}
  </div>
</div>
</div>

<div class="text-center">
<!-- SUBMUT BUTTON -->
{{Form::submit('Submit Order', ['class' => 'btn btn-info btn-fill btn-wd', 'id'=>'submit'])}}
</div>
<!-- <div v-if="errors.products_empty">
<p class="alert alert-danger"></p> -->
<!-- <hr> -->
</div>

</div>
