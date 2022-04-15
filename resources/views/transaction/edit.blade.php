@extends('layouts.app')

@section('content')  


<section class="content">
<div class="row">
	<div class="col-12">

<div class="box">
<div class="box-header with-border">
<div class="pull-left">  <h3 class="box-title">Edit User</h3> </div>

<div class="pull-right">

<a class="btn btn-success" href="{{url('Users')}}"> <i class="fa  fa-arrow-left"></i> Back </a> 
</div></div>
<!-- /.box-header -->
<div class="box-body">
<form   method="POST" action="" >
<div class="row" >
      {{ csrf_field() }}
	  <div class="col-md-4">
		<div class="form-group">
		   <label for="firstName1">First Name <span class="text-danger">*</span></label>
		  <input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="First Name"   name="first_name" value="{{$user->first_name}}"   >
		  @if($errors->has('first_name'))
              <div class="error">{{ $errors->first('first_name') }}</div>
              @endif
		</div>
	  </div>
	  <div class="col-md-4">
		<div class="form-group">
		  <label for="firstName1">Last name <span class="text-danger">*</span></label>
		  <input type="text" class="form-control" placeholder="Last Name" aria-invalid="true"  name="last_name"  value="{{$user->first_name}}">
		   @if($errors->has('last_name'))
              <div class="error">{{ $errors->first('last_name') }}</div>
              @endif
		</div>
	  </div>

	    <div class="col-md-4">
		<div class="form-group">
		   <label for="firstName1">Email address <span class="text-danger">*</span></label>
		  <input type="email" class="form-control" placeholder="Email address"   name="email" maxlength="50"  value="{{$user->email}}">
		   @if($errors->has('email'))
              <div class="error">{{ $errors->first('email') }}</div>
              @endif
		</div>
	  </div>

	   <div class="col-md-4">
		<div class="form-group">
		    <label for="lastName1">Username <span class="text-danger">*</span></label>
         <input type="text" name="username"   class="form-control" placeholder="Username"  value="{{$user->username}}">
          @if($errors->has('username'))
              <div class="error">{{ $errors->first('username') }}</div>
              @endif 
		</div>
	  </div>

	   <div class="col-md-4">
		<div class="form-group">
		  <label for="phone">Password <span class="text-danger">*</span></label>
    <input class="form-control" name="password"   minlength="4" placeholder="Password">
     @if($errors->has('password'))
              <div class="error">{{ $errors->first('password') }}</div>
              @endif
		</div>
	  </div>

	   <div class="col-md-4">
		<div class="form-group">
		 <label for="picker1">Status <span class="text-danger">*</span></label>
    <select type="" name="status"   class="form-select">
							<option value="">Select</option>
							<option value="Active" @if($user->status=="Active") selected @endif>Active</option>
							<option value="Inactive" @if($user->status=="Inactive") selected @endif>Inactive</option>
						</select>
	@if($errors->has('status'))
              <div class="error">{{ $errors->first('status') }}</div>
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

