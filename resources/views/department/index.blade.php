@extends('layouts.app')

@section('content')  
	   
 
<section class="content">
			<div class="row">
				 			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				<div class="pull-left">  <h3 class="box-title">List of Departments</h3> </div>

				  <div class="pull-right">
				 
				  <a class="btn btn-success" href="{{url('Departments/Add')}}"> <i class="fa fa-plus"></i> Add New </a> 
				</div></div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
							 
								<th>S. N.</th>
								<th> Name</th>
								<th>Description</th> 
								<th>Action</th> 
							</tr>
						</thead>
						<tbody>
							@foreach($users as $val)
							<tr>
								 
					     	<td>{{$count++}}</td>
					     	<td>{{$val->name}}</td>
					     	<td>{{$val->description}}</td> 
					     	<td>
					     		<a class="waves-effect btn-success btn btn-social-icon btn-bitbucket" href="{{url('Departments/Edit')}}/{{$val->id}}">
									<i class="fa fa-edit"></i> 
								  </a>

					     		<a class="waves-effect btn-danger delete btn btn-social-icon btn-bitbucket" data-link="{{url('Departments/Delete')}}/{{$val->id}}">
									<i class="fa fa-trash"></i> 
								  </a>
					     	 
					     		
					     		
					     	</td> 
							 
							</tr>
							@endforeach
							 
							
						</tbody>
						 
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --></div>
			</div>
		</section>
 

 
@endsection

