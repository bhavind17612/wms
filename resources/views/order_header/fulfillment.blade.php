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
								<a href="{{url('OrderHeaders/fulfillmentEdit')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >Edit</a>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Customer Name : </label>
									<label for="firstName1">{{$order_header->ship_to_name}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Address Line 1 : </label>
									<label for="firstName1">{{$order_header->shipto_addr1}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Address Line 2 : </label>
									<label for="firstName1">{{$order_header->shipto_addr2}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">City : </label>
									<label for="firstName1">{{$order_header->shipto_city}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">State : </label>
									<label for="firstName1">{{$order_header->shipto_state}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Country : </label>
									<label for="firstName1">{{$order_header->shipto_country}}</label>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Zip Code : </label>
									<label for="firstName1">{{$order_header->shipto_zip}}</label>
								</div>
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

