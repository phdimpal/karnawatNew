@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">Users List </h3>
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
							<a href="users_master_list">Users List</a>
						</li>
					</ul>
			  </div>
			  <div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green util-btn-group">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Users List
							</div>
							<div class="actions">
								<a href="user_master" class="btn btn-default btn-sm btn_add">
								<i class="fa fa-plus btn-fa-icon"></i> Add </a>
								
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
								</th>
								<th>
									 Users Name
								</th>
								<th>
									 Mobile 
								</th>
								
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
							
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 third user
								</td>
								<td>
									9999998989
								</td>
							
								<td>
									<a href="edit_user_master" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="view_users" class="btn btn-icon-only yellow">
											<i class="fa fa-eye"></i>
									</a>
									<a href="#" class="btn btn-icon-only red  alert_conform"  >
											<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>



							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 first users
								</td>
								<td>
										773634447
								</td>
							
								<td>
									<a href="edit_user_master" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="view_users" class="btn btn-icon-only yellow">
											<i class="fa fa-eye"></i>
									</a>
									<a href="#" class="btn btn-icon-only red  alert_conform" >
											<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>



							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 second users
								</td>
								<td>
										8889765434
								</td>
								
								<td>
									<a href="edit_user_master.html" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="view_users.html" class="btn btn-icon-only yellow">
											<i class="fa fa-eye"></i>
									</a>
									<a href="#" class="btn btn-icon-only red   alert_conform">
											<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>

							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
				
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			
		</div>
</div>
@endsection

@section('js')

<script src="assets/global/js/jquery-confirm.min.js"type="text/javascript"></script>

<script>

jQuery(document).ready(function() {

$('.alert_conform').click(function() {

	$.confirm({
    title: 'Confirm!',
    content: 'Are you sure you want to delete',
    buttons: {
        OK: function () {
            $.alert({
            	title:'Confirm',
            	content:'Delete the customer'
            });
        },
        cancel: function () {
            $.alert({
            	title:'Cancel',
            	content:'Cancel the customer'
            });
        }
    }
});


});

});
</script>
@endsection
