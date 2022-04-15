@extends('layouts.app')

@section('content')  


<section class="content">
<div class="row">
	<div class="col-12">

<div class="box">
<div class="box-header with-border">
<div class="pull-left">  <h3 class="box-title">Add New Transaction</h3> </div>

<div class="pull-right">

<a class="btn btn-success" href="{{url('Transaction')}}"> <i class="fa  fa-arrow-left"></i> Back </a> 
</div></div>
<!-- /.box-header -->
<div class="box-body">
<form   method="POST" action="" >
<div class="row" >
      {{ csrf_field() }}

      	   <div class="col-md-4">
		<div class="form-group">
		 <label for="picker1">Type <span class="text-danger">*</span></label>
    <select type="" name="type"   class="form-select">
							<option value="" disabled selected>Select</option>
							<option value="UI">UI</option>
							<option value="RF">RF</option>
						</select>
	@if($errors->has('type'))
              <div class="error">{{ $errors->first('type') }}</div>
              @endif
		</div>
	  </div>


	  <div class="col-md-4">
		<div class="form-group">
		   <label for="firstName1">Name <span class="text-danger">*</span></label>
		  <input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Name"   name="name" value="{{ old('name') }}"   >
		  @if($errors->has('name'))
              <div class="error">{{ $errors->first('name') }}</div>
              @endif
		</div>
	  </div>
	  <div class="col-md-4">
		<div class="form-group">
		  <label for="firstName1">URL <span class="text-danger">*</span></label>
		  <input type="text" class="form-control" placeholder="URL" aria-invalid="true"  name="uri"  value="{{ old('uri') }}">
		   @if($errors->has('uri'))
              <div class="error">{{ $errors->first('uri') }}</div>
              @endif
		</div>
	  </div>

	    
 <div class="col-md-4">
		<div class="form-group">
		  <label for="firstName1">Description <span class="text-danger">*</span></label>
		  <textarea class="form-control"  name="description" placeholder="description" >{{ old('description') }}</textarea>
		   
		   @if($errors->has('description'))
              <div class="error">{{ $errors->first('description') }}</div>
              @endif
		</div>
	  </div>
	   


	   <div class="col-md- "></div><div class="col-md-4">
		 <button class="btn btn-success" type="submit form-control">Submit</button>
	  </div>
	
	</div></form>
</div>
<!-- /.box-body -->
</div>
<!-- /.box --></div>
</div>
</section>



@endsection

