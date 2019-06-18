@extends('layouts.master')

 @section('content')

<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">Performa <small>Invoice</small></h3>
				
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="performa_invoice_list">Performa Invoice</a>
					</li>
				</ul>
			</div>
			<div class="portlet box green util-btn-group">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Add Performa Invoice
					</div>
				</div>
				<div class="portlet-body form">
					<form id="company_form" action="#" class="horizontal-form">
						<div class="form-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										  <label class="control-label">Company
										   </label>
										  <select name="company_name" id="company_name" class="form-control select2">
											<option selected="">--Company--</option>	  	
										    <option value="India">Karnawat</option>
										    <option value="China">Php Poets</option>
								    
								          </select>
									</div>
							   </div>
															
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Invoice No.</label>
										<br/>
										<span>
											<label>KARNAWAT/19-20/IN-001</label>
										</span>	
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer Name</label>
										<select name="customer_id" class="form-control select2" id="customer_id">
											<option>---Select---</option>
											<option value="Karnawat">Karnawat</option>
										</select>
									</div>
								</div>
								
							</div>	
							<div class="row">

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Transaction Date</label>
										<input type="text" id="transaction_date" name="transaction_date" class="form-control date-picker" placeholder="Date">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer Address</label>
										<textarea name="customer_address" class=" company_address form-control " id="customer_address" required="">  </textarea>
										<a href="#get_address" data-toggle="modal" >
											<span>Select Default Address</span>
										</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">GSTIN Number</label>
										<input type="text"  id="company_gst" name="company_gst" class="form-control" placeholder="Gst number" readonly="">
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-12">
									<label class="control-label"><h4> <strong>Invoice Detail</strong> </h4></label>
									<div class="table-responsive">
										<table class="table table-striped table-bordered" id="main_table">
											<thead class="portlet box green util-btn-group">
												<tr>
													<th class="thColor" style="width: 20px">S.No</th>
													<th class="thColor" style="width: 150px">Description</th>
													<th class="thColor" style="width: 30px">Quantity</th>
													<th class="thColor" style="width: 50px">Rate</th>
													<th class="thColor" style="width: 80px">Amount</th>
													<th class="thColor" style="width: 50px">Actions</th>
												</tr>
											</thead>
											
											 <tbody id="main_tbody_bank">
                                  
											</tbody>
											<tfoot>
												<tr>
													<td colspan="4" style="text-align:right"><b>Total</b></td>
													<td colspan="2" style="text-align:center">
														<input style="width:200px;text-align:center" type="text" class="form-control sub_total" readonly name="sub_total">
													</td>
												</tr>
												<tr>
													<td colspan="4" style="text-align:right"><b>CGST 9%</b></td>
													<td colspan="2" style="text-align:right">
														<input type="text" style="width:200px;text-align:center" class="form-control cgst_amt" readonly name="cgst_amt">
													</td>
												</tr>
												<tr>
													<td colspan="4" style="text-align:right"><b>SGST 9%</b></td>
													<td colspan="2" style="text-align:right">
														<input type="text" style="width:200px;text-align:center" class="form-control sgst_amt" readonly name="sgst_amt">
													</td>
												</tr>
												<tr>
													<td colspan="4" style="text-align:right"><b>Total INR</b></td>
													<td colspan="2" style="text-align:right">
														<input type="text" style="width:200px;text-align:center" class="form-control total_amt" readonly name="total_amt">
													</td>
												</tr>
											</tfoot>
										</table>
									</div>	
								</div>	
							</div>
							<div class="form-actions right">
								<button type="button" class="btn default">Cancel</button>
								<button type="submit" class="btn green"><i class="fa fa-check"></i> Save</button>
							</div>							
						</div>	
					</form>	
				</div>
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
<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.9/adapters/jquery.js"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>

<!-----------extra ------>
<script src="assets/global/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/global/js/additional-methods.min.js" type="text/javascript"></script>


<script src="assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/components-dropdowns.js"></script>

<script>
$('#customer_id').select2();
	$('#company_name').select2();
add_row_bank();
rename_row_bank();
$(document).on('click','#plus_bank',function(){
           add_row_bank();
      });
       $(document).on('click','#minus_bank',function(){
           var count=$('#main_tbody_bank').children().length;
            if(count >= 2)
            {
              $(this).parent().parent().remove();
              rename_row_bank();
            }
        });

   function add_row_bank()
    {
      var tr = $('#sub-body_bank>tr:last').clone();

      $('#main_tbody_bank').append(tr);

           $('#main_tbody_bank').find('tr').each(function()
        {
            $(this).find('.product_id').attr('autofocus','autofocus');

        });
      rename_row_bank();
    }

      function rename_row_bank()
      {
        var i=0;
        $('#main_tbody_bank').find('tr').each(function()
        {
            i++;
            $(this).find('.index_bank').html(i);

            $(this).find('.description').attr('name','company_bank['+i+'][description]').ckeditor({
	toolbar: [
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{name: "colors", items: ["TextColor", "BGColor"] },
        {name: "insert", items: ["Table"] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'basicstyles', items: [ 'Bold', 'Italic', "Underline", "Strike", "Subscript", "Superscript", "-"]},
        {name: "paragraph", items: ["NumberedList", "BulletedList", "-", "Outdent", "Indent", "-", "JustifyLeft", "JustifyCenter", "JustifyRight"]}
	]
  
  });

            $(this).find('.quantity').attr('name','company_bank['+i+'][quantity]');
            $(this).find('#getunit').attr('name','company_bank['+i+'][unit]').select2();

            $(this).find('.rate').attr('name','company_bank['+i+'][rate]');

             $(this).find('.ammount').attr('name','company_bank['+i+'][ammount]');
            
            
          });
          
       }
 
     
        $(document).ready(function () {
            $("#customer_id").change(function () {
                var value = $(this).val();
                var address = "Phppoets It solution,Subhash nagar ,sevashram"
                $("#customer_address").val(address);

                var gst_val="08AFAPG9816M1Z4";

                $("#company_gst").val(gst_val);
            });

        //function for validate the address field is null or not

            $("#get_address").click(function () {

            var	texttwo =$('#customer_address').val();
              
                 if(texttwo == '')
                 {
					alert(" Please Select Customer Name First");
					return false;
                 
                 }             
             
            });

		///get value for calculation	
			$(".quantity").blur(function () {
					
				calculation();
			
			});
			$(".rate").blur(function () {
					
				calculation();
			
			});
          
        });
		
		$('#getunit').change(function(){
			var unit = $(this).val(); 
			$(this).closest('tr').find('.showrate').html('INR/'+unit);
			
		});	
		
		function calculation(){
			var quantity=0;
			var rate=0;
			var amount=0;
			$('#main_table tbody#main_tbody_bank tr.main_tb').each(function(){ 
				 quantity = $(this).find('.quantity').val();
				
				 rate = $(this).find('.rate').val();
				 
				 amount = quantity*rate;
				 
				 if(isNaN(amount)){
					amount
				 }
				 $(this).find('.ammount').val(amount);
					
			});
			
			$('.sub_total').val(amount);
			var cgst =amount*9/100;
			$('.cgst_amt').val(cgst);
			$('.sgst_amt').val(cgst);
			$('.total_amt').val(amount+cgst*2);
		
		}

</script>
@endsection

<!-- END CONTAINER -->
<div id="get_address" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#26a69a;color:white;">
				<button type="button" class="close " data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Select Default Addresses</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#collapse_1">sector 11</a></h4>
						</div>	
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#collapse_1">
									savina
								</a>
							</h4>
						</div>	
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#collapse_1">
									surajpole
								</a>
							</h4>
						</div>	
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a href="#collapse_1">
									hathipole
								</a>
							</h4>
						</div>	
					</div>      
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!----->
<table>
	<tbody id="sub-body_bank" class="hidden">
		<tr class="main_tb">
			<td style="vertical-align: inherit;" class="index_bank"> 
				<input class="index_bank" type="number" name="id_bank">
			</td>
			<td style="vertical-align: inherit;"> 
				<textarea  name="description" id="description" class=" form-control description"  required >
				</textarea>
			</td>
			<td style="vertical-align: inherit;"> 
				<input type="text" name="quantity" class="quantity form-control" id="quantity" required>
				<br/>
				<select name="q" id="getunit" class="form-control">
					<option>---Unit---</option>
					<option value="Sq. Feet">Sq. Feet</option>
					<option value="Sq. Meter">Sq. Meter</option>
					<option value="MT">MT</option>
					<option value="Cubic Meter">Cubic Meter</option>
					<option value="Cubic Ft.">Cubic Ft.</option>
					<option value="No. of Pieces">No. of Pieces</option>
				</select>	
			</td>
			<td style="vertical-align: inherit;"> 
				<label class="control-label showrate"></label>
				<input type="text" name="rate" class="rate form-control" id="rate" required>
			</td>
			<td style="vertical-align: inherit;"> 
				<input type="number" name="ammount" readonly class="ammount form-control" id="ammount" required>
			</td>
			<td style="vertical-align: inherit;"> 
				<button type="button" id="plus_bank" class="btn btn-sm "><i class="fa fa-plus"></i></button>
				<button type="button" id="minus_bank" class="btn btn-sm "><i class="fa fa-minus"></i></button>
			</td>
		</tr>
	</tbody>
</table>	
<!----->	
