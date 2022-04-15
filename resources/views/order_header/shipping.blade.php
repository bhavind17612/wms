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
								<a href="{{url('OrderHeaders/shippingEdit')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >Edit</a>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Ship Via : </label>
									<label for="firstName1">{{$order_header->shipto}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Service Level : </label>
									<label for="firstName1">{{$order_header->service_level}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Shipping Cost : </label>
									<label for="firstName1">{{$order_header->shipping_cost}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Shipping Date : </label>
									<label for="firstName1">{{$order_header->ship_date}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Delivery Instruction from Customer : </label>
									<label for="firstName1">{{$order_header->delivery_instruction_from_customer}}</label>
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

