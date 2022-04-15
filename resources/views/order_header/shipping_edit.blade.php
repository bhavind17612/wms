@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – Shipping  Tab</h3></div>
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
								<a href="{{url('OrderHeaders/shipping')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >View</a>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Ship Via</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Ship Via" name="shipto" value="{{ old('shipto',$order_header->shipto) }}"   >
									@if($errors->has('shipto'))
									<div class="error">{{ $errors->first('shipto') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Service Level</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Service Level" name="service_level" value="{{ old('service_level',$order_header->service_level) }}"   >
									@if($errors->has('service_level'))
									<div class="error">{{ $errors->first('service_level') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Shipping Cost</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Shipping Cost" name="shipping_cost" value="{{ old('shipping_cost',$order_header->shipping_cost) }}"   >
									@if($errors->has('shipping_cost'))
									<div class="error">{{ $errors->first('shipping_cost') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Shipping Date</label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder="Shipping Date" name="ship_date" value="{{ old('ship_date',$order_header->ship_date) }}"   >
									@if($errors->has('ship_date'))
									<div class="error">{{ $errors->first('ship_date') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Delivery Instruction from Customer</label>
									<textarea  class="form-control" data-validation-required-message="This field is required" placeholder="Delivery Instruction from Customer" name="delivery_instruction_from_customer" >{{ old('delivery_instruction_from_customer',$order_header->delivery_instruction_from_customer) }}</textarea>
									@if($errors->has('delivery_instruction_from_customer'))
									<div class="error">{{ $errors->first('delivery_instruction_from_customer') }}</div>
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

