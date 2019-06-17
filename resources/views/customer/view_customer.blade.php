@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">Customer Detail</h3>
			<div class="page-bar">

				<ul class="page-breadcrumb grey-cascade">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="customer_list">Customer</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="view_customer">Customer Detail</a>
					</li>
				</ul>
			</div> 

			<div class="row">
				<div class="col-md-12">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
									<i class="fa fa-gift"></i>Customer Detail
							</div>
						</div>

						<div class="portlet-body ">
							<table class="table">
								<tbody>
									<tr>
										<th scope="row">Customer Name</th>
										<td> Johan </td>

										<th scope="row">Customer Country</th>
										<td>india</td> 
									</tr>
									<tr>
										<th scope="row">Customer Mobile</th>
										<td>996789943</td>
										<th scope="row">Customer State</th>
										<td>Rajasthan</td>

									</tr>
									<tr>

										<th scope="row">Customer Email</th>
										<td>Larry@gmail.com</td>

										<th scope="row">Company City</th>
										<td>Udaipur</td> 

									</tr>
									<tr>
										<th scope="row">Customer GSTIN Number </th>
										<td>F6F5EGH87EJM33E4</td> 		
									</tr>
									
							</tbody>
						</table>			<!-- BEGIN FORM-->
						</div>
					</div>
				</div>
			</div>
			
			
			
		</div>
</div>
@endsection

@section('js')
@endsection
