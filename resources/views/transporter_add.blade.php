@extends('layouts.master')

 @section('content')

<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">Transporter List </h3>
			<div class="page-bar">
				<ul class="page-breadcrumb grey-cascade">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="transporter_add">Transporter</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="transporter_list">Transporter List</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green util-btn-group">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Transporter List
							</div>
							<div class="actions">
								<a href="#modelboxadd" class="btn btn-default btn-sm btn_add" data-toggle="modal" >
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
									 S.No
								</th>
								
								<th>Transporter
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
									Cargo Courier
								</td>
								
								<td>
									<a href="#modelboxedid" class="btn btn-icon-only green" data-toggle="modal">
											<i class="fa fa-edit"></i>
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
									Cargo 2
								</td>
							
								<td>
									<a href="#" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
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
									Cargo Third
								</td>
								
								<td>
									<a href="#" class="btn btn-icon-only green">
											<i class="fa fa-edit"></i>
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
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
</div>
<!-- Modal For Edit Data -->

<div id="modelboxedid" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
			      <div class="modal-header" style="background-color:#26a69a;color:white;">
			        <button type="button" class="close " data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Update Transporter</h4>
		          </div>

        <div class="modal-body">

        	<div class="row">
                    <div class="col-md-3 col-sm-6"> </div>
        		<div class="col-md-6 col-sm-6"> 
			             <div class="form-group">
						   <label for="unitname">Transporter type:</label>
						   <input type="text" name="transport_type" class="form-control" id="transport_type" value="Transporter Name" required="">
						 </div>
                </div>
				<div class="col-md-6 col-sm-6"> 		 
					 
			</div>	 
	    </div>
			      <div class="modal-footer">
			      	<button type="button" class="btn green" data-dismiss="modal">Edit</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
    </div>

  </div>
</div>

<!-----------------End Model------------------->

<!-- Modal -->
<div id="modelboxadd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
			      <div class="modal-header" style="background-color:#26a69a;color:white;">
			        <button type="button" class="close " data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Add Transporter</h4>
		          </div>

        <div class="modal-body">

        	<div class="row">
                    <div class="col-md-3 col-sm-6"> </div>
				<div class="col-md-6 col-sm-6"> 		 
						 <div class="form-group">
						    <label for="unittype">Transporter Type:</label>
						    <input type="text" class="form-control" name="unit_type" id="unit_type">
						 </div>
				</div>		 
			</div>	 
	    </div>
			      <div class="modal-footer">
			      	<button type="button" class="btn green" data-dismiss="modal">Save</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
    </div>

  </div>
</div>

<!-----------------End Model  Add Data------------------->

@endsection

@section('js')

<script src="assets/global/js/jquery.validate.min.js" type="text/javascript"></script>
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
            	content:'Delete the Unit'
            });
        },
        cancel: function () {
            $.alert({
            	title:'Cancel',
            	content:'Cancel the Unit'
            });
        }
    }
});


});

});
</script>

<script>

$('#unit_type').validate({
    rules : {
        unit_type : {
            required : true,
            max :availablePoints
        }
    },
    messages : {
        unit_type : {
            required : 'Please enter the total loyalty points you wish to apply to this order.',
            max : 'You may only apply '+availablePoints+' to this order.'
        }
    }
});
</script>

@endsection


