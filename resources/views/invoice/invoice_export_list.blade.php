@extends('layouts.master')

 @section('content')

<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">
			Performa Invoice List 
			</h3>

			<div class="page-bar">

				<ul class="page-breadcrumb grey-cascade">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="invoice_export_list">Export Invoice</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="invoice_export_list">Export Invoice List</a>
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
								<i class="fa fa-user"></i>Invoice List
							</div>
							                                     
						</div>

						<div class="portlet-body">
						<div class="row">
							<div class="col-md-12">
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
									<a href="annexure.html" class="btn  grey">
                                            
                                          Create ANNEXURE-C
									</a>
									<a href="packing_list.html" class="btn  grey">
                                            
											Create Packing List
									  </a>
									  <a href="examin_report.html" class="btn  grey">
                                            
											Examination Report
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



@endsection
