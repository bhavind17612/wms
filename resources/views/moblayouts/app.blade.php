<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/fav.png')}}">
    <title>Shaazo </title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('css/vendors_css.css')}}">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/skin_color.css')}}">
    <style type="text/css">
        th {
    white-space: nowrap;
	}

	@media screen and (min-width: 992px) {
   .mn_menu {
     display: none;
   }
}

  @media only screen and (min-width: 320px) and (max-width: 950px) {
  .menus-not-view {
    display:none;
  }
}
}
    </style> 
    @stack('styles')
</head>
@php $menus = DB::table('menus')->limit(1)->orderBy('id','desc')->get() @endphp
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	<div class="wrapper">
		<div id="loader"></div>
		<header class="main-header">
			<div class="d-flex align-items-center logo-box justify-content-start">  
				<!-- Logo -->
				<a href="index.html" class="logo">
				  <!-- logo-->
				  <div class="logo-mini w-50">
					  <span class="light-logo"><img src="{{asset('images/logo-letter.png')}}" alt="logo"></span>
					  <span class="dark-logo"><img src="{{asset('images/logo-letter.png')}}" alt="logo"></span>
				  </div>
				  <div class="logo-lg">
					  <span class="light-logo"><img src="{{asset('img/name.png')}}" alt="logo" width="101px"></span>
					  <span class="dark-logo"><img src="{{asset('img/name.png')}}" alt="logo"></span>
				  </div>
				</a>    
			</div>  
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item">
							<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
								<i data-feather="align-left"></i>
							</a>
						</li>
						<li class="btn-group d-lg-inline-flex d-none">
							<div class="app-menu">
								<div class="search-bx mx-5">
									<form>
										<div class="input-group">
										  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
										  <div class="input-group-append">
											<button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
										  </div>
										</div>
									</form>
								</div>
							</div>
						</li>
					</ul> 
				</div>
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
				{{$message}} 
				</div>
				@endif
				@if ($message = Session::get('error'))
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{$message}} 
				</div>
				@endif
				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav"> 
						<li class="btn-group nav-item d-xl-inline-flex d-none">
							<a href="help.html" class="waves-effect waves-light nav-link w-p100 full-screen btn-primary-light fs-18 l-h-26">
								Help  
							</a>
						</li>
						
						<li class="btn-group nav-item d-lg-inline-flex d-none">
							<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
								<i data-feather="maximize"></i>
							</a>
						</li>
					  <!-- Notifications -->
					  <li class="dropdown notifications-menu">
						<a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
						  <i data-feather="bell"></i>
						</a>
						<ul class="dropdown-menu animated bounceIn">

						  <li class="header">
							<div class="p-20">
								<div class="flexbox">
									<div>
										<h4 class="mb-0 mt-0">Notifications</h4>
									</div>
									<div>
										<a href="#" class="text-danger">Clear All</a>
									</div>
								</div>
							</div>
						  </li>

						  <li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu sm-scrol">
							  <li>
								<a href="#">
								  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
								</a>
							  </li>
							</ul>
						  </li>
						  <li class="footer">
							  <a href="#">View all</a>
						  </li>
						</ul>
					  </li> 
					  <!-- Control Sidebar Toggle Button -->
					  <!-- User Account-->
					  <li class="dropdown user user-menu">
						<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
							<img src="{{asset('images/avatar/avatar-1.png')}}" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
						</a>
						<ul class="dropdown-menu animated flipInX">
						  <li class="user-body">
							 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
							  
							 <div class="dropdown-divider"></div>
							   <form id="logout-form" action="{{ url('moblogout') }}" method="POST">
													 {{ csrf_field() }}
							 <button class="dropdown-item" type="submit" style="width: 100%;"><i class="ti-lock text-muted me-2"></i> Logout</button>
						   </form>
						  </li>
						</ul>
					  </li>
					</ul>
				</div>
			</nav>
		</header>
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
          <div class="multinav-scroll" style="height: 100%;">   
              <!-- sidebar menu-->
              <ul class="sidebar-menu" data-widget="tree">          
                <li class="  @if(Request::segment(1)=='Dashboard') active @endif   ">
                  <a href="{{url('MobDashboard')}}">
                    <i data-feather="monitor"></i>
                    <span>Dashboard</span></a>
				        </li>
                <li class="  @if(Request::segment(1)=='Users') active @endif   menus-not-view">
                  <a href="{{url('Users')}}">
                    <i data-feather="users"></i>
                    <span>User Management</span></a>
				        </li>  
                <li class="  @if(Request::segment(1)=='Departments') active @endif menus-not-view">
                    <a href="{{url('Departments')}}">
                    <i data-feather="trello"></i>
                    <span>Department Management</span></a>
				        </li> 
                <li class="@if(Request::segment(1)=='Transaction') active @endif menus-not-view">
                    <a href="{{url('Transaction')}}">
                    <i data-feather="trello"></i>
                    <span>Transaction Management</span></a>
				        </li>   
                
                <li class="treeview  ">
                  <a href="#">
                    <i data-feather="list"></i>
                    <span>Warehouse Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">                                            
                    <li class=" ">
                        <a href="#">
                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Create Locations 
                        </a> 
					          </li>  
                    <li class=" ">
                        <a href="#">
                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Create Totes/Trolley    
                      </a> 
                    </li>  
                    <li class=" ">
                        <a href="#">
                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Create Bags/Pallets
                      </a> 
                    </li>                                              
                  </ul>
                </li>
				
                <li  @if(Request::segment(1)=='OrderHeaders')class="treeview menu-open"@else class="treeview menus-not-view" @endif>
                  <a href="#">
                    <i data-feather="truck"></i>
                    <span>Order</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu" @if(Request::segment(1)=='OrderHeaders')style="display:block;"@endif >                    
                    <li><a href="{{url('OrderHeaders')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Order Header</a></li>
                    
                  </ul>
                </li>
                <li class="treeview menus-not-view">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Menu Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="{{url('Menus')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Menu</a></li>
                     <li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
                     
                  </ul>
                </li>
                <!--<li class="treeview">
                  <a href="#">
                    <i data-feather="trello"></i>
                    <span>Tables</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                    <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
                    <li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
                    <li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
                    <li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>                   
                  </ul>
                </li>-->

				<!-- mobile-menus -->
				        <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>First Mile</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Pick from Vendor (CO)</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Pick from Vendor (SO)</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blind Pick from Vendor (SO)</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Drivers</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Inbound</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Receive Customer Order</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Receive Stock Order</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Inbound Users</a></li>
                  </ul>
                </li>
				<li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Quality Check</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Audit Customer Order</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Audit Stock Order</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add QA Users</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Replenishment</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Assign Locations for Customer Orders</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Assign Locations for Stock Orders</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Replenishment users</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Putaway</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Putaway to Storage Location</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Putaway to Order Location</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Putaway to Shipping Location</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Putaway Users</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Picking</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Pick from Storage Task</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Picking Users</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Packing</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Packing Tasks</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Packing Users</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Shipping</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="{{url('Menus')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Execute Shipping Tasks</a></li>
                  </ul>
                </li>
                <li class="treeview mn_menu">
                  <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Returns</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>                  
                  <ul class="treeview-menu">                
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Receive Returns - Order</a></li>
                     <li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Receive Returns - Items</a></li>
                     
                  </ul>
                </li>
				
				<!-- //mobile-menus -->
              </ul>
          </div>
		</div>
    </section>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Main content -->
		@yield('content')
      </div>
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
    
 
        
    
    
    <!-- Vendor JS -->
    <script src="{{asset('js/vendors.min.js')}}"></script>
    <script src="{{asset('js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>   
    <script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
    <script src="{{asset('assets/vendor_components/progressbar.js-master/dist/progressbar.js')}}"></script>
    <script>
        document.getElementById('e').value = new Date().toISOString().substring(0, 10);
    </script>
    
    <!-- Deposito Admin App -->
    <script src="{{asset('js/template.js')}}"></script>
    <script src="{{asset('js/pages/dashboard3.js')}}"></script>
        <script src="{{asset('js/pages/data-table.js')}}"></script>
 
<script src="{{asset('assets/vendor_components/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>

 <script type="text/javascript">

$(".delete").click(function(){

   var link = $(this).attr('data-link');
 
  swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
           window.location=link;
        });
});
</script>
            @stack('scripts')
</body>
 
</html>
