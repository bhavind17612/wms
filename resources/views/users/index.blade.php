@extends('layouts.app')

@section('content')  
	   
 
<section class="content">
			<div class="row">
				 			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				<div class="pull-left">  <h3 class="box-title">List of Users</h3> </div>

				  <div class="pull-right">
				 
				  <a class="btn btn-success" href="{{url('Users/Add')}}"> <i class="fa fa-plus"></i> Add User </a> 
				</div></div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
							 
								<th>S. N.</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Username</th>
								<th>Status</th>
								<th>Action</th> 
							</tr>
						</thead>
						<tbody>
							@foreach($users as $val)
							<tr>
								 
					     	<td>{{$count++}}</td>
					     	<td>{{$val->first_name}}</td>
					     	<td>{{$val->last_name}}</td>
					     	<td>{{$val->email}}</td>
					     	<td>{{$val->username}}</td>
					     	<td><span class="badge @if($val->status=="Active") badge-success @else badge-danger @endif">{{$val->status}}</span></td>
					     	<td>
					     		<a class="waves-effect btn-success btn btn-social-icon btn-bitbucket" href="{{url('Users/Edit')}}/{{$val->id}}">
									<i class="fa fa-edit"></i> 
								  </a>

					     		<a class="waves-effect btn-danger delete btn btn-social-icon btn-bitbucket" data-link="{{url('Users/Delete')}}/{{$val->id}}">
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

