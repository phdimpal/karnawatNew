@extends('layouts.master')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
        <h3 class="page-title">Add Company</h3>
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
                  <a href="add_company">Add Company</a>
                </li>
              </ul>
         </div>
        <div class="portlet box green util-btn-group">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-gift"></i>Add Company
                </div>
              </div>
       </div> 
     <div class="portlet-body form">  

    <form id="company_form" name="company_form" method="post" action="#" class="horizontal-form" enctype="multipart/form-data" runat="server">
<div class="form-body">

<div class="row">
  <div class="col-md-4">
  <div class="form-group">
    <label class="control-label">Company Name</label>
    <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Name">
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label class="control-label">Company Mobile</label>
    <input type="number" name="company_mobno" id="company_mobno" class="form-control" placeholder="Mobile ">
  </div>
</div>
<!--/span-->
<div class="col-md-4">
  <div class="form-group">
    <label class="control-label">Company Email</label>
    <input type="email" id="company_email" name="company_email" class="form-control" placeholder="Email">
    
  </div>
</div>
<!--/span-->
</div>
<!--/row-->

<!--/row-->
<div class="row">
<div class="col-md-4">
  <div class="form-group">
    <label class="control-label">Country</label>
    <select name="country_name" id="country_name" class="form-control select2" required="">
  <option value="">--Country--</option>     
    <option value="India">India</option>
    <option value="China">China</option>
    
          </select>
  </div>
</div>
<!--/span-->
<div class="col-md-4">
  <div class="form-group">
    <label class="control-label">State</label>
      <select name="state_name" id="state_name" class="form-control select2" required="" >
  <option selected="">--State--</option>      
    <option value="Rajasthan">Rajasthan</option>
    <option value="Gujarat">Gujarat</option>
    
          </select>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
    <label class="control-label">City</label>
        <select name="state_name" id="city_name" class="form-control select2"required="">
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
      <input type="text"  id="company_gst" name="company_gst" class="form-control" placeholder="Gst number">
    </div>
  </div>
<!--/span-->
  <div class="col-md-4">
    <div class="form-group">
      <label class="control-label">PAN Number</label>
      <input type="text" id="company_panno" name="company_panno" class="form-control" placeholder="Pan Number">
    </div>
  </div>
<div class="col-md-4">
    <div class="form-group">
        <input type="file" name="photo" required  class="image" id="image" style="display:none;" accept="image/*">
        <img id="imgshw1" src="assets/image/pen.jpg" class="img-responsive thumbnail" style="height: 50px;width: 50px;">
        <label id="uploadimg" style="cursor: pointer;margin-top: -16px;margin-left: 8px;"><b>Upload Signature <span class="required">*</span></b></label>
    </div>
  </div>
<!--/span-->
</div>
         <!--------------Start Add Row Functionality Address------------>

         <label class="control-label"> <h4> <strong>Company Address</strong> </h4></label>
<div class="row">
                            <div class="col-md-12">
                              <table class="table table-striped table-bordered">
                                  <thead class="portlet box green util-btn-group tablescroll">
                                    
                                      <tr >
                                          <th class="thColor" style="width: 20px">S.No</th>
                                          <th class="thColor" style="width: 200px">Addresses</th>
                                          <th class="thColor" style="width: 50px">Is Default</th>
                                          <th class="thColor" style="width: 100px">Actions</th>
                                      </tr>
                                     
                                  </thead>
                                  <tbody id="main-tbody">
                                  
                                  </tbody>
                                 
                              </table>
                            </div>
                    
            
           
        </div>

         <!---------------End Add Row Functionality Address------------>

         <!---------------Start Add Row Functionality Bank------------>

       <label class="control-label"><h4> <strong>Bank Detail</strong> </h4></label>

          <div class="row">
                            <div class="col-md-12" style="height: 150px; overflow-y: scroll;">
                              <table class="table table-striped table-bordered">
                                  <thead class="portlet box green util-btn-group ">
                                      <tr>
                                          <th class="thColor tablescroll" style="width: 20px">S.No</th>

                                          <th class="thColor tablescroll" style="width: 80px">Bank Name</th>

                                          <th class="thColor tablescroll" style="width: 60px">Branch Name</th>

                                          <th class="thColor tablescroll" style="width: 80px">Account Number</th>

                                          <th class="thColor tablescroll" style="width: 80px">RTGS Code</th>

                                          <th class="thColor tablescroll" style="width: 20px">Is Default</th>
                                          <th class="thColor tablescroll" style="width: 50px">Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody id="main-tbody_bank">
                                  
                                  </tbody>
                                 
                              </table>
                            </div>
                    
             </div>
          <!---------------End Add Row Functionality Bank------------>
           </div>
          <div class="form-actions right">
          <button type="button" class="btn default">Cancel</button>
          <button type="submit" class="btn green"><i class="fa fa-check"></i> Save</button>
          </div>
      </form> 
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

<script>

jQuery(document).ready(function() {    

  $('#country_name').select2();
  $('#state_name').select2();
  $('#city_name').select2();
    
});

add_row();

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
      $(this).find('.is_default').attr('name','company_addresses['+i+'][is_default]');
    });
  }
 

  add_row_bank();

  $(document).on('click','#plus_bank',function(){
     add_row_bank();
  });
  
  $(document).on('click','#minus_bank',function(){
     var count=$('#main-tbody_bank').children().length;
    if(count >= 2)
    {
      $(this).parent().parent().remove();
      rename_row_bank();
    }
  });

   function add_row_bank()
    {
      var tr = $('#sub-body_bank>tr:last').clone();

      $('#main-tbody_bank').append(tr);

           $('#main-tbody_bank').find('tr').each(function()
        {
            $(this).find('.product_id').attr('autofocus','autofocus');

        });
      rename_row_bank();
    }

      function rename_row_bank()
      {
        var i=0;
        $('#main-tbody_bank').find('tr').each(function()
        {
            i++;
            $(this).find('.index_bank').html(i);

            $(this).find('.bank_name').attr('name','company_bank['+i+'][bank_name]');

            $(this).find('.branch_name').attr('name','company_bank['+i+'][branch_name]');

            $(this).find('.account_number').attr('name','company_bank['+i+'][account_number]');

             $(this).find('.rtgs_code').attr('name','company_bank['+i+'][rtgs_code]');
            
             $(this).find('.is_default_bank').attr('name','company_bank['+i+'][is_default_bank]');
            
          });
          
       }
 
</script>

<script>
  
  $(document).ready(function(){

    jQuery('#company_gst').keyup(function() {
    $(this).val($(this).val().toUpperCase());
  });

      jQuery('#company_name').keyup(function() {
    var caps = jQuery('#company_name').val(); 
    caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#company_name').val(caps);
  });
    
  $(".image").change(function(){

var fup = document.getElementById("image");
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf(".") + 1);
if(ext == "jpg" || ext == "jpeg" || ext == "png")
{
 
              readPathh(this);

} 
else
{
 alert("Upload jpg/jpeg/png  files only");
 fup.focus();
 return false;
}

});

$("#uploadimg").click(function() {
 $("#image").click();
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
     $('#company_form').validate({

  rules:{

        company_name:{
          required:true,
         
          lettersonly:true,
        },

        company_mobno:{
                 required:true,
                 number:true,
                 rangelength: [10, 10],
        },

        company_email:{

          required:true,
          email:true,


        },   

        company_gst:{

          required:true,
          gst:true
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
        company_panno:{
          required:true,
        },

        addresses:{

                  required:true,
        },


      },

      messages:{

        company_name:{
          required:"Please Enter Customer Name",
          lettersonly:"Please enter only letters"
        },

         company_email:{
           required:"Please enter email",
          email:"Please enter valid email (Use @ ) format"
        },

         company_mobno:{
            required: "Please Enter Mobile Number",
            number:"Please Enter only Number",
            rangelength: "Please Enter The 10 Number Mobile Number",
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
<script>
  $('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'png':
            $('#signature-img').attr('disabled', false);
            break;
        default:
            alert('This  file type Not Allowed Please select jpg and png File type .');
            this.value = '';
    }
});

function handlebrowseclick()
    {
      var fileinput = document.getElementById('image');
      fileinput.click();
    }
     function readPathh(input)
    { 
      if (input.files && input.files[0])
      {
        var reader = new FileReader();
        reader.onload = function (e)
        {
          $("#imgshw1").attr("src",e.target.result);

        }
        reader.readAsDataURL(input.files[0]);
      }
    }
</script>
@endsection

<table>
    <tbody id="sub-body" class="hidden">
      <tr>
        <td style="vertical-align: inherit;" class="index"> 
            <input class="index" type="number" name="id">
        </td>
        <td style="vertical-align: inherit;"> 
            <textarea name="company_address" class=" company_address form-control " id="company_address" required="">  </textarea>
        </td>
        <td style="vertical-align: inherit;"> 
            <input type="checkbox" class="form-control is_default" name="is_default" id="is_default" value="1" checked class="form-check-input">
        </td>
        <td style="vertical-align: inherit;"> 
          <button type="button" id="plus" class="btn btn-sm "><i class="fa fa-plus"></i></button>
          <button type="button" id="minus" class="btn btn-sm "><i class="fa fa-minus"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
<!----Ends code for address add table --->
<!----Start code for bank detail add table --->
  <table>
    <tbody id="sub-body_bank" class="hidden">
      <tr>
        <td style="vertical-align: inherit;" class="index_bank"> 
          <input class="index_bank" type="number" name="id_bank">
        </td>
        <td style="vertical-align: inherit;"> 
          <input type="text" name="bank_name" class="bank_name form-control" id="bank_name" required>
        </td>
        <td style="vertical-align: inherit;"> 
          <input type="text" name="branch_name" class="branch_name form-control" id="branch_name" required>
        </td>
        <td style="vertical-align: inherit;"> 
          <input type="number" name="account_number" class="account_number form-control" id="account_number" required>
        </td>
        <td style="vertical-align: inherit;"> 
          <input type="text" name="rtgs_code" class="rtgs_code form-control" id="rtgs_code" required>
        </td>
        <td style="vertical-align: inherit;"> 
          <input type="checkbox" class="is_default_bank" name="is_default_bank" id="is_default_bank" value="1" checked class="form-check-input">
        </td>
        <td style="vertical-align: inherit;"> 
          <button type="button" id="plus_bank" class="btn btn-sm "><i class="fa fa-plus"></i></button>
          <button type="button" id="minus_bank" class="btn btn-sm "><i class="fa fa-minus"></i></button>
        </td>
      </tr>
    </tbody>
  </table>