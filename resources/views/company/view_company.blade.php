@extends('layouts.master')

@section('content')

<div class="page-content-wrapper">
		<div class="page-content" style="min-height:1300px">
				<h3 class="page-title">Company Detail </h3>
			
				<div class="page-bar">
						<ul class="page-breadcrumb grey-cascade">
							<li>
								<i class="fa fa-home"></i>
								<a href="dashboard">Home</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="company">Company</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="view_company">Company Detail</a>
							</li>
						</ul>
			   </div>

			   <div class="row">
				<div class="col-md-12">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
									<i class="fa fa-gift"></i>Company Detail
							</div>
						</div>

						<div class="portlet-body ">
							<table class="table">
								<tbody>
									<tr>
										<th scope="row">Company Name</th>
										<td> test.pvt lted</td>

										<th scope="row">Company Country</th>
										<td>india</td> 
									</tr>
									<tr>
										<th scope="row">Company Mobile</th>
										<td>999999999999999</td>
										<th scope="row">Company State</th>
										<td>Rajasthan</td>

									</tr>
									<tr>
										<th scope="row">Company Email</th>
										<td>Larry@gmail.com</td>

										<th scope="row">Company City</th>
										<td>Udaipur</td> 
									</tr>
									<tr>
										<th scope="row">Company GSTIN Number </th>
										<td>F6F5EGH87EJM33E4</td> 

										<th scope="row">Company PAN Nmber</th>
										<td>A5R4T6FYU8K</td> 
									</tr>
									<tr>
									<td class="portlet box green"colspan="4"  >
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>
												Company Bank Detail
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">Company Bank Name </th>
									<td>SBI</td> 

									<th scope="row">Bank Branch Name</th>
									<td>Udaipur</td> 
								</tr>
								<tr>
									<th scope="row"> Bank Account RTGS Code</th>
									<td>qw4rfh7HYUD3</td> 

									<th scope="row">Default </th>
									<td>-------</td> 
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

     </div>
</div>
@endsection