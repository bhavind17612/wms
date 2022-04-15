@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – Lines Tab</h3></div>
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
					<form   method="POST" action="" >
						<div class="row" >
							{{ csrf_field() }}
							<div class="col-md-4">
								<div class="form-group">
								   <label for="firstName1">Item Number <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Item Number" name="item_number" value="{{old('item_number',$order_details->item_number)}}"   >
									@if($errors->has('item_number'))
									<div class="error">{{ $errors->first('item_number') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Order Qty <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Order Qty" name="order_qty" value="{{ old('order_qty',$order_details->order_qty) }}"   >
									@if($errors->has('order_qty'))
									<div class="error">{{ $errors->first('order_qty') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Line Status <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Line Status"   name="line_status" value="{{ old('line_status',$order_details->line_status) }}"   >
									@if($errors->has('line_status'))
									<div class="error">{{ $errors->first('line_status') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Type of Fulfillment <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Type of Fulfillment"   name="line_type" value="{{ old('line_type',$order_details->line_type) }}"   >
									@if($errors->has('line_type'))
									<div class="error">{{ $errors->first('line_type') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Vendor Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Vendor Name"   name="vendor_po" value="{{ old('vendor_po',$order_details->vendor_po) }}"   >
									@if($errors->has('vendor_po'))
									<div class="error">{{ $errors->first('vendor_po') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Scheduled Pickup Date <span class="text-danger">*</span></label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder="Scheduled Pickup Date"   name="scheduled_pickup_date" value="{{ old('scheduled_pickup_date',$order_details->scheduled_pickup_date) }}"   >
									@if($errors->has('scheduled_pickup_date'))
									<div class="error">{{ $errors->first('scheduled_pickup_date') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Actual Pickup Date <span class="text-danger">*</span></label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder=">Actual Pickup Date"   name="actual_pickup_date" value="{{ old('actual_pickup_date',$order_details->actual_pickup_date) }}"   >
									@if($errors->has('actual_pickup_date'))
									<div class="error">{{ $errors->first('actual_pickup_date') }}</div>
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

