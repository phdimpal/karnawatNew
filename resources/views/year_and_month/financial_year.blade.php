@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">

			 <h3 class="page-title">
			Financial Year List 
			</h3>		
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
		
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green util-btn-group">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Year List
							</div>
							
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover">
							<thead>
							<tr>
								
								<th>
									 S_No
								</th>
								<th>
									 From
								</th>

								<th>
									 To
								</th>

								<th>
									 Status
								</th>
								
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
							
							<tr class="odd gradeX">
								
								<td>
									 1
								</td>
								<td>
									01-04-2018
								</td>
								<td>
									31-03-2019
								</td>
								<td>
									closed
								</td>
							    <td>
									<button title="Closed" class="btn btn green alert_open">Open</button>
									<button title="Opened" class="btn btn red alert_close">Close</button>
									
								</td>
							</tr>

							<tr class="odd gradeX">
								
								<td>
									 2
								</td>
								<td>
									01-04-2019
								</td>
								<td>
									31-03-2020
								</td>
								<td>
									closed
								</td>
								<td>
									<button title="Closed" class="btn btn green alert_open">Open</button>
									<button title="Opened" class="btn btn red alert_close">Close</button>
									
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

$('.alert_open').click(function() {

	$.confirm({
    title: 'Confirm!',
    content: 'Are you sure you want to Closed',
    buttons: {
        OK: function () {
            $.alert({
            	title:'Confirm',
            	content:'Closed the Financial Month'
            });
        },
        cancel: function () {
            $.alert({
            	title:'Cancel',
            	content:'Cancel to Closed the Financial Month'
            });
        }
    }
});


});

$('.alert_close').click(function() {

	$.confirm({
    title: 'Confirm!',
    content: 'Are you sure you want to Opened',
    buttons: {
        OK: function () {
            $.alert({
            	title:'Confirm',
            	content:'Opened the Financial Month'
            });
        },
        cancel: function () {
            $.alert({
            	title:'Cancel',
            	content:'Cancel to Opened the Financial Month'
            });
        }
    }
});

});

});
</script>

@endsection
