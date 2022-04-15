@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – Lines  Tab</h3></div>
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
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title"></h3></div>
					<div class="pull-right">
						<a class="btn btn-success btn-sm" href="{{url('OrderHeaders/add-lines')}}/{{$order_header->id}}"> <i class="fa fa-plus"></i> Add Line </a> 
					</div>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Item number</th> 
									<th>Quantity</th>
									<th>Status</th> 
									<th>Type of Fulfillment</th> 
									<th>Vendor Name</th> 
									<th>Scheduled Pickup Date</th> 
									<th>Actual Pickup Date</th> 
									<th>Action</th> 
								</tr>
							</thead>
							<tbody>
								@if(is_object($order_detail) && !empty($order_detail))
								@foreach($order_detail as $val)
								<tr>
									<td>{{$val->item_number}}</td>
									<td>{{$val->order_qty}}</td>
									<td>{{$val->line_status}}</td> 
									<td>{{$val->line_type}}</td> 
									<td>{{$val->vendor_po}}</td>
									<td>{{$val->scheduled_pickup_date}}</td>
									<td>{{$val->actual_pickup_date}}</td>
									<td><a class="waves-effect btn-sm btn-success btn btn-social-icon btn-bitbucket" href="{{url('OrderHeaders/edit-lines')}}/{{$val->id}}">
											<i class="fa fa-edit"></i> 
										</a>
									</td>
								</tr>
								@endforeach
								@else
								<tr>
									<td align="center" colspan="7" >No Result Found!</td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		<!-- /.box -->
		</div>
	</div>
</section>
@endsection

