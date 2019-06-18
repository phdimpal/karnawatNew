@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">

         <h3 class="page-title">Financial Month List </h3>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green util-btn-group">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i>Month List
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
									 Month
								</th>

								<th>
									 Year
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
									April
								</td>
								<td>
									2019
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
									May
								</td>
								<td>
									2019
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
									 3
								</td>
								<td>
									Jun
								</td>
								<td>
									2019
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
									 4
								</td>
								<td>
									July
								</td>
								<td>
									2019
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
									 5
								</td>
								<td>
									August
								</td>
								<td>
									2019
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
									 6
								</td>
								<td>
									September
								</td>
								<td>
									2019
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
									 7
								</td>
								<td>
									October
								</td>
								<td>
									2019
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
									 8
								</td>
								<td>
									November
								</td>
								<td>
									2019
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
									 9
								</td>
								<td>
									December
								</td>
								<td>
									2019
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
									 10
								</td>
								<td>
									January
								</td>
								<td>
									2020
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
									 11
								</td>
								<td>
									February
								</td>
								<td>
									2020
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
									 12
								</td>
								<td>
									March
								</td>
								<td>
									2020
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
