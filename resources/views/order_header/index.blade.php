@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left"> <h3 class="box-title">List of Order Headers</h3> </div>
					<div class="pull-right">
						<a class="btn btn-success btn-sm" href="{{url('OrderHeaders/Add')}}"> <i class="fa fa-plus"></i> Add New </a> 
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th >Action</th> 
									<th>Order Id</th>
									<th>Fulfillment Status</th> 
									<th>Details Status</th> 
									<th>Current Location in Facility</th> 
									<th>Priority</th> 
									<th>Order Date</th> 
									<th>Scheduled Delivery Date</th> 
									<th>Customer Name</th>
									<th>To City</th>
									<th>To State</th>
									<th>To Country</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $val)
								<tr>
									<td>
										<a class="waves-effect btn-sm btn-success btn btn-social-icon btn-bitbucket" href="{{url('OrderHeaders/Edit')}}/{{$val->id}}">
											<i class="fa fa-edit"></i> 
										</a>
										<a class="waves-effect btn-sm btn-warning btn btn-social-icon btn-bitbucket" href="{{url('OrderHeaders/general')}}/{{$val->id}}">
											<i class="fa fa-info-circle"></i>
										</a>
										
										<a class="waves-effect btn-sm btn-danger delete btn btn-social-icon btn-bitbucket" data-link="{{url('OrderHeaders/Delete')}}/{{$val->id}}">
											<i class="fa fa-trash"></i> 
										</a>
									</td> 
									<td>{{$val->internal_order_number}}</td>
									<td>@if($val->status=='1'){{'Created'}}@endif</td>
									<td>{{$val->status}}</td> 
									<td>{{$val->status}}</td>
									<td>{{$val->status}}</td> 
									<td>{{$val->order_generation_date}}</td> 
									<td>{{$val->schedule_delivery_date}}</td> 
									<td>{{'test'}}</td> 
									<td>{{$val->shipto_city}}</td> 
									<td>{{$val->shipto_state}}</td> 
									<td>{{$val->shipto_country}}</td> 
									
								</tr>
								@endforeach
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