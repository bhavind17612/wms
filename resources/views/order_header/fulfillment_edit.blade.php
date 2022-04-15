@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – Fulfilment  Tab</h3></div>
					<div class="pull-right">
						<a class="btn btn-success btn-sm" href="{{url('OrderHeaders')}}"> <i class="fa  fa-arrow-left"></i> Back </a> 
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					@include('order_header.head_tab')
				</div>
			</div>
			<div class="box">
				@include('order_header.order_navigation')
			</div>
			<div class="box">
				<div class="box-body">
					<form  method="POST" action="" >
						{{ csrf_field() }}
						<div class="row" >
							<div class="col-md-12" align="right">
								<a href="{{url('OrderHeaders/fulfillment')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >View</a>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Customer Name</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Customer Name" name="ship_to_name" value="{{ old('ship_to_name',$order_header->ship_to_name) }}"   >
									@if($errors->has('ship_to_name'))
									<div class="error">{{ $errors->first('ship_to_name') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Address Line 1</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Address Line 1" name="shipto_addr1" value="{{ old('shipto_addr1',$order_header->shipto_addr1) }}"   >
									@if($errors->has('shipto_addr1'))
									<div class="error">{{ $errors->first('shipto_addr1') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Address Line 2</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Address Line 2" name="shipto_addr2" value="{{ old('shipto_addr2',$order_header->shipto_addr2) }}"   >
									@if($errors->has('shipto_addr2'))
									<div class="error">{{ $errors->first('shipto_addr2') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">City</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="City" name="shipto_city" value="{{ old('shipto_city',$order_header->shipto_city) }}"   >
									@if($errors->has('shipto_city'))
									<div class="error">{{ $errors->first('shipto_city') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">State</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="State" name="shipto_state" value="{{ old('shipto_state',$order_header->shipto_state) }}"   >
									@if($errors->has('shipto_state'))
									<div class="error">{{ $errors->first('shipto_state') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Country</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Country" name="shipto_country" value="{{ old('shipto_country',$order_header->shipto_country) }}"   >
									@if($errors->has('shipto_country'))
									<div class="error">{{ $errors->first('shipto_country') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Zip Code</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Zip Code" name="shipto_zip" value="{{ old('shipto_zip',$order_header->shipto_zip) }}"   >
									@if($errors->has('shipto_zip'))
									<div class="error">{{ $errors->first('shipto_zip') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-success btn-sm" type="submit form-control">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /.box-body -->
			</div>
		<!-- /.box -->
		</div>
	</div>
</section>
@endsection

