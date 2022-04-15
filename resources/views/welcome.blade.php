@extends('layouts.app')

@section('content')  
       
 
	<section class="content">
			<div class="row">
				<div class="col-xl-4 col-12">
					<div class="box box-body">
					  <h6>
						<span class="text-uppercase fs-18">Revenue</span>
						<span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="fs-26">$845,1258</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="fs-12"><i class="ion-arrow-graph-down-right text-primary me-1"></i> %18 decrease from last month</div>
					</div>
				</div>
				<!-- /.col -->

				<div class="col-xl-4 col-12">
					<div class="box box-body">
					  <h6>
						<span class="text-uppercase fs-18">Units Sold</span>
						<span class="float-end"><a class="btn btn-xs btn-danger-light" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="fs-26">159,1258</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="fs-12"><i class="ion-arrow-graph-down-right text-danger me-1"></i> %95 down</div>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xl-4 col-12">
					<div class="box box-body">
					  <h6>
						<span class="text-uppercase fs-18">Shelfs Overview</span>
						<span class="float-end"><a class="btn btn-xs btn-info-light" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="fs-26">84,9658</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-info" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="flexbox fs-12">
						<span><i class="ion-arrow-graph-down-right text-info me-1"></i> %54 up</span>
						<span>+90258</span>
					  </div>
					</div>
				</div>
				<!-- /.col -->
								
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Purchase By Week</h4>
						</div>
						<div class="box-body py-0">
							<div id="hour-data"></div>
						</div>						
					</div>
				</div>					
				<div class="col-xl-6 col-12">					
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Warehouse By City</h4>
						</div>
						<div class="box-body py-0">
							<div id="city-data"></div>
						</div>						
					</div>
				</div>
				<div class="col-12 col-xl-4">
					<div class="box">		
						<div class="box-header bg-success">
							<h4 class="box-title text-white">Revenue Overview</h4>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#" class="btn btn-success-light px-10 base-font">Export</a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body px-0 py-0 bg-success rounded-0">	
							<div id="revenue1" class="text-dark"></div>
						</div>
						<div class="box-body up-mar40 bg-white position-relative">	
							<div class="row">
								<div class="col-6">
									<div class="px-30 py-10">
										<div class="text-fade fw-600">Profit</div>
										<div class="fs-18 fw-600">$150K</div>
									</div>
								</div>
								<div class="col-6">
									<div class="px-30 py-10">
										<div class="text-fade fw-600">Revenue</div>
										<div class="fs-18 fw-600">$15,250k</div>
									</div>
								</div>
								<div class="col-6">
									<div class="px-30 py-10">
										<div class="text-fade fw-600">Taxes</div>
										<div class="fs-18 fw-600">$50k</div>
									</div>
								</div>
								<div class="col-6">
									<div class="px-30 py-10">
										<div class="text-fade fw-600">Yearly </div>
										<div class="fs-18 fw-600">$44,850k</div>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>	
				<div class="col-xl-8 col-12">
					<div class="box position-static">
						<div class="box-header">
							<h4 class="box-title">Section Overview</h4>
							<div class="box-controls pull-right">
								<input class="form-control no-border bg-lightest" id="e" type="date">
							</div>
						</div>
						<div class="box-body">
							<div class="row mb-20">
								<div class="col-lg-3 col-md-6 col-12">
									<div class="row g-0 row-cols-auto">
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-12">
									<div class="row g-0 row-cols-auto">
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<div class="w-40 h-40 m-5">	</div>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="row g-0 row-cols-auto">
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<div class="w-40 h-40 m-5">	</div>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-6 col-12">
									<div class="row g-0 row-cols-auto">	
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-12">
									<div class="row g-0 row-cols-auto">
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>								
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<div class="w-40 h-40 m-5">	</div>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>										
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="row g-0 row-cols-auto">
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<div class="w-40 h-40 m-5">	</div>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning-light d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Empty</h4>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
										<div class="col">
											<div class="section-bx">
												<a href="#" class="w-40 h-40 m-5 bg-warning d-block rounded10">	
													<div class="bx-dec">
														<div class="section-dec d-flex align-items-center">
															<div class="box-img">
																<img src="{{asset('/images/box.png')}}" class="img-fluid" alt="" />
															</div>
															<div class="dec">
																<h4 class="text-white my-0">Row 3 #124578</h4>
																<p class="text-white">H60 x W60 x 20 KG</p>
																<p class="mb-0 text-white-50">Delivered 06:15PM</p>
															</div>
														</div>
													</div>										
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex mt-20">
								<div class="d-flex">
									<div class="w-20 h-20 bg-warning-light rounded"></div>
									<h5 class="mx-15 my-0">Free Place</h5>
								</div>
								<div class="d-flex">
									<div class="w-20 h-20 bg-warning rounded"></div>
									<h5 class="mx-15 my-0">Loaded Place</h5>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Inventory Stock</h4>
						</div>
						<div class="box-body">
							<div id="recent_trend"></div>
						</div>								
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Top Cities</h4>
						</div>
						<div class="box-body py-0">
							<div id="topcities"></div>
						</div>
						<div class="box-footer">
							<div class="d-flex justify-content-between">
								<div class="d-flex">
									<p class="mb-0 me-10">Show</p>
									<div class="btn-group">
									  <button class="btn btn-xs btn-primary-light dropdown-toggle" type="button" data-bs-toggle="dropdown">5 Result</button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="#">10 Result</a>
										<a class="dropdown-item" href="#">15 Result</a>
										<a class="dropdown-item" href="#">20 Result</a>
									  </div>
									</div>
								</div>
								<div class="d-flex">
									<p class="mb-0 me-10">Short By</p>
									<div class="btn-group">
									  <button class="btn btn-xs btn-primary-light dropdown-toggle" type="button" data-bs-toggle="dropdown">Order</button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="#">Delivery Date</a>
										<a class="dropdown-item" href="#">Payment</a>
									  </div>
									</div>
		 						</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</section>
		<!-- /.content -->
 

 
@endsection

