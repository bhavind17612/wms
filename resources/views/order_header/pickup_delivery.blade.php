@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – Pickup/Delivery  Tab</h3></div>
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
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Estimated Delivery Date</label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder="Estimated Delivery Date" name="schedule_delivery_date" value="{{ old('schedule_delivery_date',$order_header->schedule_delivery_date) }}"   >
									@if($errors->has('schedule_delivery_date'))
									<div class="error">{{ $errors->first('schedule_delivery_date') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Actual Delivery Date</label>
									<input type="date" class="form-control" data-validation-required-message="This field is required" placeholder="Actual Delivery Date" name="delivery_date" value="{{ old('delivery_date',$order_header->delivery_date) }}"   >
									@if($errors->has('delivery_date'))
									<div class="error">{{ $errors->first('delivery_date') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<button class="btn btn-success btn-sm" style="margin-top: 24px;" type="submit form-control">Submit</button>
							</div>
						</div>
					</form>
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Vendor number</th> 
									<th>Scheduled Pickup Date</th>
									<th>Actual Pickup Date</th> 
								</tr>
							</thead>
							<tbody>
								@if(is_object($order_details) && !empty($order_details))
								@foreach($order_details as $val)
								<tr>
									<td>{{$val->vendor_po}}</td>
									<td>{{$val->scheduled_pickup_date}}</td>
									<td>{{$val->actual_pickup_date}}</td> 
								</tr>
								@endforeach
								@else
								<tr> <td colspan="3" align="center">Records Not Found!</td></tr>	
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

