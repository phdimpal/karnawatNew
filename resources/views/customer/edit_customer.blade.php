@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green util-btn-group">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Edit Customer
										</div>
									
									</div>
									<div class="portlet-body form">

							<form id="cus_form" action="customer_list" class="horizontal-form"  method="post">
					<div class="form-body">

								<div class="row">
									<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer Name</label>
										<input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer Mobile</label>
										<input type="number" name="customer_mobno" id="customer_mobno" class="form-control" placeholder="Mobile ">
									</div>
								</div>
								<!--/span-->
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer Email</label>
										<input type="email" id="customer_email" name="customer_email" class="form-control" placeholder="Email">
										
									</div>
								</div>
								<!--/span-->
								</div>
								<!--/row-->

								<!--/row-->
								<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer Country</label>
										  <select name="country_name" id="country_name" class="form-control select2">
									<option selected="">--Country--</option>	  	
								    <option value="India">India</option>
								    <option value="China">China</option>
								    
								          </select>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer State</label>
										  <select name="state_name" id="state_name" class="form-control select2" >
									<option selected="">--State--</option>	  	
								    <option value="Rajasthan">Rajasthan</option>
								    <option value="Gujarat">Gujarat</option>
								    
								          </select> 
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Customer City</label>
											  <select name="state_name" id="city_name" class="form-control select2">
									   <option selected="">--City--</option>	  	
								       <option value="Udaipur">Udaipur</option>
								       <option value="Jaipur">Jaipur</option>
								       <option value="Jodhpur">Jodhpur</option>
								       <option value="Ajmer">Ajmer</option>
								               </select>
									</div>
								  </div>

								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">GSTIN Number</label>
											<input type="text"  id="customer_gst" name="customer_gst" class="form-control" placeholder="Gst number">
										</div>
									</div>
								<!--/span-->
									
								<!--/span-->
								</div>
         <!--------------Start Add Row Functionality Address------------>

         <label class="control-label"> <h4> <strong>Customer Address</strong> </h4></label>
<div class="row">
                            <div class="col-md-12" style="height: 150px; overflow-y: scroll;">
                              <table class="table table-striped table-bordered">
                                  <thead class="portlet box green util-btn-group">
                                  	<div class="caption">
                                      <tr >
                                          <th class="thColor tablescroll" style="width: 20px">S.No</th>
                                          <th class="thColor tablescroll" style="width: 200px">Addresses</th>
                                          <th class="thColor tablescroll" style="width: 200px">State</th>
                                          <th class="thColor tablescroll" style="width: 200px">City</th>
                                          <th class="thColor tablescroll" style="width: 50px">Is Default</th>
                                          <th class="thColor tablescroll" style="width: 100px">Actions</th>
                                      </tr>
                                      </div>
                                  </thead>
                                  <tbody id="main-tbody">
                                  
                                  </tbody>
                                 
                              </table>
                            </div>
                    
            
            <table>

              <tbody id="sub-body" class="hidden">
                 <tr>
                    <td style="vertical-align: bottom;" class="index"> 

                   <input class="index" type="number" name="id">

                   </td>
                    <td style="vertical-align: bottom;"> 

                    <textarea name="customer_address" class=" company_address form-control " id="customer_address" required="">  </textarea>

                    </td>

                    <td style="vertical-align: bottom;"> 

		                   <select name="state_name_add" id="state_name_add" class="form-control select2"  required="">
							<option selected="">--State--</option>	  	
						    <option value="Rajasthan">Rajasthan</option>
						    <option value="Gujarat">Gujarat</option>
          					</select>
                    </td>
                     <td style="vertical-align: bottom;"> 

							<select name="city_name_add" id="city_name_add" class="form-control select2" required="">
							<option selected="">--City--</option>	  	
							<option value="Udaipur">Udaipur</option>
							<option value="Jaipur">Jaipur</option>
							<option value="Jodhpur">Jodhpur</option>
							<option value="Ajmer">Ajmer</option>
							</select>
                    </td>

                    <td style="vertical-align: bottom;"> 
                     
                    <input type="checkbox" class="is_default" name="is_default" id="is_default" value="1" checked class="form-check-input">

                    </td>
                     
                    <td style="vertical-align: bottom;"> <button type="button" id="plus" class="btn btn-sm "><i class="fa fa-plus"></i></button>
                      <button type="button" id="minus" class="btn btn-sm "><i class="fa fa-minus"></i></button></td>
                </tr>
              </tbody>
            </table>
        </div>

         <!---------------End Add Row Functionality Address------------>

				<!--add contact person code-->
				<label class="control-label"> <h4> <strong>Customer Contact Person</strong> </h4></label>
					<div class="row">
							<div class="col-md-12" style="height: 150px; overflow-y: scroll;">
								<table class="table table-striped table-bordered fixed_headers" id="main_table">
										<thead class="portlet box green util-btn-group">
											<div class="caption">
												<tr >
														<th class="thColor tablescroll"  style="width: 20px">S.No</th>
														<th class="thColor tablescroll" style="width: 200px">Name</th>
														<th class="thColor tablescroll" style="width: 200px">Mobile No</th>
														<th class="thColor tablescroll" style="width: 200px">Address</th>
														<th class="thColor tablescroll" style="width: 100px">Actions</th>
												</tr>
												</div>
										</thead>
										<tbody id="address_tbody">
										
										</tbody>
										
								</table>
							</div>
					</div>		
				<!--ends code for contact person-->
         
</div>
<div class="form-actions right">
<button type="button" class="btn default">Cancel</button>
<button type="submit" class="btn green"><i class="fa fa-check"></i> Edit</button>
</div>
</form>
<!-- END FORM-->
</div>
</div>
</div>
</div>


			
		</div>
</div>



@endsection

@section('js')


<!----for select jquery-->
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


<script>


jQuery(document).ready(function() {    
		$('#country_name').select2();
		$('#state_name').select2();
		$('#city_name').select2();
});

</script>

<!-----------------script for add row Company Address------------------->
     
<script type="text/javascript">
add_row();
add_contact_row();
$(document).on('click','#plus',function(){
           add_row();
      });
       $(document).on('click','#minus',function(){
           var count=$('#main-tbody').children().length;
            if(count >= 2)
            {
              $(this).parent().parent().remove();
              rename_row();
            }
        });

   function add_row()
    {
      var tr = $('#sub-body>tr:last').clone();

      $('#main-tbody').append(tr);

           $('#main-tbody').find('tr').each(function()
        {
            /*$(this).find('.product_id').attr('autofocus','autofocus');*/

        });
      rename_row();
    }

      function rename_row()
      {
        var i=0;
        $('#main-tbody').find('tr').each(function()
        {
            i++;
            $(this).find('.index').html(i);
            $(this).find('.company_address').attr('name','company_addresses['+i+'][company_address]');
						$(this).find('#state_name_add').attr('name','company_addresses['+i+'][state_id]').select2();
						$(this).find('#city_name_add').attr('name','company_addresses['+i+'][city_id]').select2();
             $(this).find('.is_default').attr('name','company_addresses['+i+'][is_default]');
            
          });
          
       }
 
			 $(document).on('click','#contact_plus',function(){
           add_contact_row();
    });
    $(document).on('click','#contact_minus',function(){
           var count=$('#address_tbody').children().length;
            if(count >= 2)
            {
              $(this).parent().parent().remove();
              rename_contact_row();
            }
		});		
		function add_contact_row()
    {
      var tr = $('#address_sub_body>tr:last').clone();

      $('#address_tbody').append(tr);

           $('#address_tbody').find('tr').each(function()
        {
            /*$(this).find('.product_id').attr('autofocus','autofocus');*/

        });
				rename_contact_row();
    }
		function rename_contact_row()
      {
        var i=0;
        $('#address_tbody').find('tr').each(function()
        {
            i++;
            $(this).find('.index').html(i);
						$(this).find('.company_address').attr('name','contact_persons['+i+'][person_name]');
            $(this).find('.mobile_no').attr('name','contact_persons['+i+'][mobile_no]');
            $(this).find('.contact_person_address').attr('name','contact_persons['+i+'][address]');
        });
          
       }
     </script>

     <script>
  
  $(document).ready(function(){

    jQuery('#customer_gstin').keyup(function() {
    $(this).val($(this).val().toUpperCase());
  });

      jQuery('#customer_name').keyup(function() {
    var caps = jQuery('#customer_name').val(); 
    caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#customer_name').val(caps);
  });
    
$.validator.addMethod("gst", function(value3, element3) {
    var gst_value = value3.toUpperCase();
    var reg = /^([0-9]{2}[a-zA-Z]{4}([a-zA-Z]{1}|[0-9]{1})[0-9]{4}[a-zA-Z]{1}([a-zA-Z]|[0-9]){3}){0,15}$/;
    if (this.optional(element3)) {
      return true;
    }
    if (gst_value.match(reg)) {
      return true;
    } else {
      return false;
    }

  }, "Please specify a valid GSTTIN Number");
     $('#cus_form').validate({

  rules:{

        customer_name:{
          required:true,
          lettersonly:true,
        },
        customer_email:{

          required:true,
          email:true,


        },

         customer_mobno:{
                 required:true,
                 number:true,
                 rangelength: [10, 10],
        },

        customer_gstin:{

          required:true,
          gst:true,
        },

        country_name:{
        	required:true,
        },

        state_name:{
        	required:true,
        },

        city_name:{
        	required:true,
        },

        addresses:{

                  required:true,
        },

      },

      messages:{

        customer_name:{
          required:"Please Enter Customer Name",
          lettersonly:"Please enter only letters"
        },

         customer_email:{
           required:"Please enter email",
          email:"Please enter valid email (Use @ ) format"
        },

         customer_mobno:{
            required: "Please Enter Mobile Number",
            number:"Please Enter only Number",
            rangelength: "Please Enter The 10 Number Mobile Number",
        },

        customer_gstin:{
         required:"Please Enter Customer GstIn Number",
         rangelength:"Please Enter 15 Latters (alpha-numeric) Gst Number"
        },

        country_name:{
         required:"Please select Your Countary",
        },

         state_name:{
         required:"Please select Your State",
        },

         city_name:{
         required:"Please select Your City",
        },

         addresses:{
         required:"Please Enter Customer Address",
        },

      }
});
});

</script>

@endsection

<table>
			<tbody id="address_sub_body" class="hidden">
				 <tr>
						<td style="vertical-align: bottom;" class="index"> 
							 <input class="index" type="number" name="id">
					 </td>
					 <td style="vertical-align: bottom;" > 
							<input class="form-control person_name" type="text" name="person_name">
					</td>
					<td style="vertical-align: bottom;" > 
							<input class="form-control mobile_no" type="text" name="mobile_no">
					</td>
						<td style="vertical-align: bottom;"> 
							<textarea name="customer_address" class=" contact_person_address form-control " id="customer_address" required="">  </textarea>
					</td>
					<td style="vertical-align: bottom;">
							 <button type="button" id="contact_plus" class="btn btn-sm "><i class="fa fa-plus"></i></button>
								<button type="button" id="contact_minus" class="btn btn-sm "><i class="fa fa-minus"></i></button>
					</td>
				</tr>
			</tbody>
	</table>