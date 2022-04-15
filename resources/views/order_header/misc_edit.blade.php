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
								<a href="{{url('OrderHeaders/misc')}}/{{$order_header->id}}" class="btn btn-sm btn-success" >View</a>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Misc1</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Misc1" name="special_ins_code1" value="{{ old('special_ins_code1',$order_header->special_ins_code1) }}"   >
									@if($errors->has('special_ins_code1'))
									<div class="error">{{ $errors->first('special_ins_code1') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Misc2</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Misc2" name="special_ins_code2" value="{{ old('special_ins_code2',$order_header->special_ins_code2) }}"   >
									@if($errors->has('special_ins_code2'))
									<div class="error">{{ $errors->first('special_ins_code2') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Misc3</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Misc3" name="special_ins_code3" value="{{ old('special_ins_code3',$order_header->special_ins_code3) }}"   >
									@if($errors->has('special_ins_code3'))
									<div class="error">{{ $errors->first('special_ins_code3') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Misc4</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Misc4" name="special_ins_code4" value="{{ old('special_ins_code4',$order_header->special_ins_code4) }}"   >
									@if($errors->has('special_ins_code4'))
									<div class="error">{{ $errors->first('special_ins_code4') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstName1">Misc5</label>
									<input type="text" class="form-control" data-validation-required-message="This field is required" placeholder="Misc5" name="special_ins_code5" value="{{ old('special_ins_code5',$order_header->special_ins_code5) }}"   >
									@if($errors->has('special_ins_code5'))
									<div class="error">{{ $errors->first('special_ins_code5') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-success btn-sm" type="submit form-control">Submit</button>
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

