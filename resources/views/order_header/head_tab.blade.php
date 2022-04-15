<div class="row" >
	<div class="col-md-4">
		<div class="form-group">
		   <label for="firstName1">Order Id -</label>
		   <label  for="firstName1">{{$order_header->internal_order_number}} </label>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
			<label for="firstName1">Fulfillment Status -</label>
			<label for="firstName1">@if($order_header->status=='1'){{'Created'}}@endif </label>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
			<label for="firstName1">Detailed Status -</label>
			<label for="firstName1">@if($order_header->status=='1'){{'Created'}}@endif </label>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
		   <label for="firstName1">Order Date -</label>
		   <label for="firstName1">{{$order_header->internal_order_number}} </label>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
			<label for="firstName1">Scheduled Delivery Date -</label>
			<label for="firstName1">@if($order_header->status=='1'){{'Created'}}@endif </label>
		</div>
	</div> 
	<div class="col-md-4">
		<div class="form-group">
			<label for="firstName1">Current location in Facility -</label>
			<label for="firstName1">@if($order_header->status=='1'){{'Created'}}@endif </label>
		</div>
	</div>
</div>