@extends('layouts.master')

 @section('content')

<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">Performa Invoice List </h3>

			<div class="page-bar">

				<ul class="page-breadcrumb grey-cascade">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="performa_invoice_list">Performa Invoice</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="performa_invoice_list">Invoice List</a>
					</li>
				</ul>
		    </div>

		    <div class="row" >

				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green util-btn-group">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Invoice List
							</div>
							<div class="actions">
								<a href="performa_invoice_add" class="btn btn-default btn-sm btn_add">
								<i class="fa fa-plus btn-fa-icon"></i> Add </a>
							</div>
						</div>
						
						<div class="portlet-body">
						<div class="row">
							<div class="col-md-8">
								<form method="GET">
									<div class="table-reponsive">
										<table class="table">
											<tr>
												<td class="table-align" width="20%">
													<input type="text" name="search_Inv" placeholder="Invoice No" class="form-control">
												</td>
												<td class="table-align" width="20%">
													<input type="text" name="search_Inv" placeholder=" Transaction Date From" class="form-control date-picker"  >
												</td>
												<td class="table-align" width="20%">
													<input type="text" name="search_Inv" placeholder="Transaction Date To" class="form-control date-picker">
												</td>
												<td class="table-align">
													<button class="btn btn green" name="save">GO</button>
												</td>
											</tr>
										</table>
									</div>	
								</form>
							</div>

								<div class="col-md-4">
								<div class="page-toolbar pull-right">
										<div class="btn-group">
											<button type="button" class="btn btn green" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
											Actions <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="#">Pending</a>
												</li>
												<li>
													<a href="#">Converted</a>
												</li>
												
											</ul>
										</div>
									</div>		
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
								<thead>
									<tr>
										<th class="table-checkbox">
											<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
										</th>
										<th>
											S_No
										</th>
										<th>
											Invoice Number
										</th>
										<th>
											Transaction Date
										</th>
										<th>
											Amount
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
									 1
								</td>
								<td>
									 KARNAWAT/19-20/IN-001
								</td>
								<td>
									01/06/2019
								</td>
								<td>
									5005
								</td>
								<td>
									<a href="performa_invoice_edit" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="performa_invoice_view" class="btn btn-icon-only yellow">
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
									 2
								</td>
								<td>
									 KARNAWAT/19-20/IN-002
								</td>
								<td>
									03/06/2019
								</td>
								<td>
									105889
								</td>
							<td>
									<a href="performa_invoice_edit" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="performa_invoice_view" class="btn btn-icon-only yellow">
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
									 3
								</td>
								<td>
									 KARNAWAT/19-20/IN-003
								</td>
								<td>
									04/06/2019
								</td>
								<td>
									56395
								</td>
								<td>
									<a href="performa_invoice_edit" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
									</a>
									<a href="performa_invoice_view" class="btn btn-icon-only yellow">
											<i class="fa fa-eye"></i>
									</a>
									<a href="#" class="btn btn-icon-only red  alert_conform"  >
											<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>

							</tbody>
							</table>
						</div>
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

<!----for select jquery-->
<script type="text/javascript" src="assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<!----end for select jquery-->
<!-----------extra ------>

<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>

<!-----------extra ------>
<script src="assets/global/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/global/js/additional-methods.min.js" type="text/javascript"></script>


<script src="assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/components-dropdowns.js"></script>

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
