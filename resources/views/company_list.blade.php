@extends('layouts.master')

@section('content')

<h3 class="page-title">
			Company List 
			</h3>

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
						<a href="company">Company List</a>
					</li>
				</ul>
			</div>
				
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
		
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green util-btn-group">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Company List
							</div>
							<div class="actions">
								<a href="add_company" class="btn btn-default btn-sm btn_add">
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
									 Company Name
								</th>
								<th>
									 Mobile 
								</th>
								<th>
									 Email
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
									 test
								</td>
								<td>
									999999999
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">
									test@gmail.com </a>
								</td>
								<td>
									<a href="edit_company.html" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="view_company.html" class="btn btn-icon-only yellow">
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
									 second test recor
								</td>
								<td>
										777777777777
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">
									phppoets@123.gmail.com </a>
								</td>
								<td>
									<a href="edit_company.html" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="view_company.html" class="btn btn-icon-only yellow">
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
									 second test
								</td>
								<td>
										88888888888
								</td>
								<td>
									<a href="mailto:userwow@gmail.com">
									test1234@gmail.com </a>
								</td>
								<td>
									<a href="edit_company.html" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="view_company.html" class="btn btn-icon-only yellow">
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
				
@endsection


@section('js')

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

 
</script>

@endsection