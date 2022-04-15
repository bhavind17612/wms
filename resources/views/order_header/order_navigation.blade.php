<style>
.action_button{
	margin-right: 30px;
	float: left;
	width: auto;
}
</style>
<div class="box-body">
	<div class="row" >
		<div class="action_button">
			<a href="{{url('OrderHeaders/general')}}/{{$order_header->id}}" @if($active_url=='general')class="btn btn-primary btn-sm"@else class="btn btn-secondary btn-sm" @endif >General</a>
		</div>
		<div class="action_button">
			<a href="{{url('OrderHeaders/pickup-delivery')}}/{{$order_header->id}}" @if($active_url=='pickup-delivery')class="btn btn-primary btn-sm"@else class="btn btn-secondary btn-sm" @endif >Pickup/Delivery</a>
		</div>
		<div class="action_button">
			<a href="{{url('OrderHeaders/fulfillment')}}/{{$order_header->id}}" @if($active_url=='fulfillment')class="btn btn-primary btn-sm"@else class="btn btn-secondary btn-sm" @endif >Fulfillment</a>
		</div>
		<div class="action_button">
			<a href="{{url('OrderHeaders/shipping')}}/{{$order_header->id}}" @if($active_url=='shipping')class="btn btn-primary btn-sm"@else class="btn btn-secondary btn-sm" @endif >Shipping</a>
		</div>
		<div class="action_button">
			<a href="{{url('OrderHeaders/misc')}}/{{$order_header->id}}" @if($active_url=='misc')class="btn btn-primary btn-sm"@else class="btn btn-secondary btn-sm" @endif >Misc</a>
		</div>
		<div class="action_button">
			<a href="{{url('OrderHeaders/order-lines')}}/{{$order_header->id}}" @if($active_url=='order-lines')class="btn btn-primary btn-sm"@else class="btn btn-secondary btn-sm" @endif >Order Lines</a>
		</div>
	</div>
</div>