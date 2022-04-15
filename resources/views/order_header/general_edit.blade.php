@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – General Tab</h3></div>
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
								<a href="{{url('OrderHeaders/general')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >View</a>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Order Type</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Order Type" name="order_type" value="{{ old('order_type',$order_header->order_type) }}"   >
									@if($errors->has('order_type'))
									<div class="error">{{ $errors->first('order_type') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Payment Type</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Payment Type" name="payment_type" value="{{ old('payment_type',$order_header->payment_type) }}"   >
									@if($errors->has('payment_type'))
									<div class="error">{{ $errors->first('payment_type') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Ordered</label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder="Ordered" name="order_generation_date" value="{{ old('order_generation_date',$order_header->order_generation_date) }}"   >
									@if($errors->has('order_generation_date'))
									<div class="error">{{ $errors->first('order_generation_date') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Order received in WM</label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder="Order received in WM" name="order_allocation_date" value="{{ old('order_allocation_date',$order_header->order_allocation_date) }}"   >
									@if($errors->has('order_allocation_date'))
									<div class="error">{{ $errors->first('order_allocation_date') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">External Order number</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="External Order number" name="internal_order_number" value="{{ old('internal_order_number',$order_header->internal_order_number) }}"   >
									@if($errors->has('internal_order_number'))
									<div class="error">{{ $errors->first('internal_order_number') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-success" type="submit form-control">Submit</button>
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

