@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">User Detail </h3>
			
			    <div class="page-bar">
						<ul class="page-breadcrumb grey-cascade">
							<li>
								<i class="fa fa-home"></i>
								<a href="dashboard">Home</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="users_master_list">Users</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="view_users">User Detail</a>
							</li>
						</ul>
			   </div>

			   <div class="row">
				<div class="col-md-12">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
									<i class="fa fa-gift"></i>User Detail
							</div>
						</div>

						<div class="portlet-body ">
							<table class="table">
								<tbody>
									<tr>
										<th scope="row"> Name</th>
										<td> Johan dev </td>

										<th scope="row">User Name</th>
										<td>abcd</td> 
									</tr>
									<tr>
										<th scope="row">User Mobile</th>
										<td>996789943</td>

										<th scope="row">User Email</th>
										<td>Larry@gmail.com</td>
										

									</tr>
									<tr>
                                        <th scope="row">Joining Date</th>
										<td>05-Jun-2019</td>
			
										<th scope="row">User Address</th>
										<td>udaipur</td>

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
