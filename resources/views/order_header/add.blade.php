@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Add New Order Header</h3> </div>
					<div class="pull-right">
					<a class="btn btn-sm btn-success" href="{{url('OrderHeaders')}}"> <i class="fa  fa-arrow-left"></i> Back </a> 
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form method="POST" action="" >
						<div class="row" >
							{{ csrf_field() }}
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Internal Order Number <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Internal Order Number"   name="internal_order_number" value="{{ old('internal_order_number') }}"   >
									@if($errors->has('internal_order_number'))
									<div class="error">{{ $errors->first('internal_order_number') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Status<span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Status" name="status" value="{{ old('status') }}"   >
									@if($errors->has('status'))
									<div class="error">{{ $errors->first('status') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Current Location Facility<span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Current Location Facility" name="current_location_facility" value="{{ old('current_location_facility') }}"   >
									@if($errors->has('current_location_facility'))
									<div class="error">{{ $errors->first('current_location_facility') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Priority<span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Priority" name="priority" value="{{ old('priority') }}"   >
									@if($errors->has('priority'))
									<div class="error">{{ $errors->first('priority') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Order Date<span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Schedule Delivery Date" name="order_generation_date" value="{{ old('order_generation_date') }}"   >
									@if($errors->has('order_generation_date'))
									<div class="error">{{ $errors->first('order_generation_date') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Schedule Delivery Date<span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Schedule Delivery Date" name="schedule_delivery_date" value="{{ old('schedule_delivery_date') }}"   >
									@if($errors->has('schedule_delivery_date'))
									<div class="error">{{ $errors->first('schedule_delivery_date') }}</div>
									@endif
								</div>
							</div> 
							
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">To City <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="To City" name="shipto_city" value="{{ old('shipto_city') }}"   >
									@if($errors->has('shipto_city'))
									<div class="error">{{ $errors->first('shipto_city') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">To State <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="To State" name="shipto_state" value="{{ old('shipto_state') }}"   >
									@if($errors->has('shipto_state'))
									<div class="error">{{ $errors->first('shipto_state') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">To Country <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="To Country" name="shipto_country" value="{{ old('shipto_country') }}"   >
									@if($errors->has('shipto_country'))
									<div class="error">{{ $errors->first('shipto_country') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md- "></div>
							<div class="col-md-4">
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

