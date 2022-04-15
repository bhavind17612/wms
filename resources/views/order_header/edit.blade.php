@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Edit Order Header</h3></div>
					<div class="pull-right">
						<a class="btn btn-success" href="{{url('OrderHeaders')}}"> <i class="fa  fa-arrow-left"></i> Back </a> 
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form   method="POST" action="" >
						<div class="row" >
							{{ csrf_field() }}
							<div class="col-md-4">
								<div class="form-group">
								   <label for="firstName1">Order Id <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Order Id" name="order_id" value="{{$order_header->order_id}}"   >
									@if($errors->has('order_id'))
									<div class="error">{{ $errors->first('order_id') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Order Type <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Order Type" name="order_type" value="{{ old('order_type',$order_header->order_type) }}"   >
									@if($errors->has('order_type'))
									<div class="error">{{ $errors->first('order_type') }}</div>
									@endif
								</div>
							</div> 
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Internal Order Number <span class="text-danger">*</span></label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Internal Order Number"   name="internal_order_number" value="{{ old('internal_order_number',$order_header->internal_order_number) }}"   >
									@if($errors->has('internal_order_number'))
									<div class="error">{{ $errors->first('internal_order_number') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md- "></div>
							<div class="col-md-4">
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

