@extends('layouts.app')

@section('content')  


<section class="content">
<div class="row">
	<div class="col-12">

<div class="box">
<div class="box-header with-border">
<div class="pull-left">  <h3 class="box-title">Edit Department</h3> </div>

<div class="pull-right">

<a class="btn btn-success" href="{{url('Departments')}}"> <i class="fa  fa-arrow-left"></i> Back </a> 
</div></div>
<!-- /.box-header -->
<div class="box-body">
<form   method="POST" action="" >
<div class="row" >
      {{ csrf_field() }}
	  <div class="col-md-4">
		<div class="form-group">
		   <label for="firstName1"> Name <span class="text-danger">*</span></label>
		  <input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Name"   name="name" value="{{$dept->name}}"   >
		  @if($errors->has('name'))
              <div class="error">{{ $errors->first('name') }}</div>
              @endif
		</div>
	  </div> <div class="col-md-8"></div>
	  <div class="col-md-4">
		<div class="form-group">
		  <label for="firstName1">Description <span class="text-danger">*</span></label>
		  <textarea class="form-control"  name="description" placeholder="description" >{{$dept->description}}</textarea>
		   
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

