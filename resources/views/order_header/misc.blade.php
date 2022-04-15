@extends('layouts.app')
@section('content')  
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="pull-left">  <h3 class="box-title">Order Details – Misc  Tab</h3></div>
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
								<a href="{{url('OrderHeaders/miscEdit')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >Edit</a>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Misc1 : </label>
									<label for="firstName1">{{$order_header->special_ins_code1}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Misc2 : </label>
									<label for="firstName1">{{$order_header->special_ins_code2}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Misc3 : </label>
									<label for="firstName1">{{$order_header->special_ins_code3}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Misc4 : </label>
									<label for="firstName1">{{$order_header->special_ins_code4}}</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="firstName1">Misc5 : </label>
									<label for="firstName1">{{$order_header->special_ins_code5}}</label>
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

