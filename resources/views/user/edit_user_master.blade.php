@extends('layouts.master')
 @section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<h3 class="page-title">Edit User</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb grey-cascade">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="users_master_list">User</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="edit_user_master">Edit User</a>
					</li>
				</ul>
			</div>

			<div class="portlet box green util-btn-group">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Edit User
					</div>
				</div>
				<div class="portlet-body form">
<!-- BEGIN FORM-->
<form id="user_form" name="user_form" method="post" action="#" class="horizontal-form">
<div class="form-body">

<div class="row">
	<div class="col-md-4">
	<div class="form-group">
		<label class="control-label">Name</label>
		<input type="text" name="u_name" id="u_name" class="form-control" placeholder="Name">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label class="control-label">User Mobile</label>
		<input type="number" name="user_mobno" id="user_mobno" class="form-control" placeholder="Mobile ">
	</div>
</div>
<!--/span-->
<div class="col-md-4">
	<div class="form-group">
		<label class="control-label">User Email</label>
		<input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email">
		
	</div>
</div>
<!--/span-->
</div>
<!--/row-->

<!--/row-->


<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label class="control-label">Joining Date</label>
			<input type="text"  id="join_date" name="join_date" class="form-control date-picker" placeholder="Date">
		</div>
	</div>
<!--/span-->
	
<!--/span-->
</div>
         <!--------------Start Add Row Functionality Address------------>

         <label class="control-label"> <h4> <strong>User Address</strong> </h4></label>
<div class="row">
                            <div class="col-md-12">
                              <table class="table table-striped table-bordered">
                                  <thead class="portlet box green util-btn-group">
                                  	<div class="caption">
                                      <tr >
                                          <th class="thColor" style="width: 20px">S.No</th>
                                          <th class="thColor" style="width: 200px">Addresses</th>
                                          <th class="thColor" style="width: 50px">Is Default</th>
                                          <th class="thColor" style="width: 100px">Actions</th>
                                      </tr>
                                      </div>
                                  </thead>
                                  <tbody id="main-tbody">
                                  
                                  </tbody>
                                 
                              </table>
                            </div>
                               
        				</div>

         <!---------------End Add Row Functionality Address------------>

        
						</div>
					<div class="form-actions right">
					<button type="button" class="btn default">Cancel</button>
					<button type="submit" class="btn green"><i class="fa fa-check"></i> Edit</button>
					</div>
			</form>
			</div>
</div>
			
		</div>
</div>
@endsection

@section('js')

<script>

jQuery(document).ready(function() {   
	Metronic.init(); // init metronic core componets
	Layout.init(); 
	QuickSidebar.init(); // init quick sidebar
	Demo.init();
	ComponentsPickers.init();
	ComponentsDropdowns.init();
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
$(this).find('.user_address')
.attr('name','user_addresses['+i+'][user_address]');
$(this).find('.is_default')
.attr('name','user_addresses['+i+'][is_default]');
		});
	}

</script>

<script>
  
 jQuery(document).ready(function() {

      jQuery('#u_name').keyup(function() {
    var caps = jQuery('#u_name').val(); 
    caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#u_name').val(caps);
  });
    

     $('#user_form').validate({

  rules:{

        u_name:{
          required:true,
          /*lettersonly:true,*/
        },

        user_mobno:{
                 required:true,
                 number:true,
                 rangelength: [10, 10],
        },

        user_email:{

          required:true,
          email:true,
        },   

        user_name:{

          required:true,
        },

        password:{
        	required:true,
        },

        re_password:{
        	required:true,
        	equalTo:"password",
        },

        addresses:{

                  required:true,
        },

        join_date:{
        	required:true,
        }


      },

      messages:{

        u_name:{
          required:"Please Enter User  Name",
/*          lettersonly:"Please enter only letters"
*/        },

         user_email:{
           required:"Please enter email",
          email:"Please enter valid email (Use @ ) format"
        },

         user_mobno:{
            required: "Please Enter Mobile Number",
            number:"Please Enter only Number",
            rangelength: "Please Enter The 10 Number Mobile Number",
        },

        password:{
        	required:"Please Enter Password",
        },

        re_password:{
        	required:"Please Re_Enter Password",
        	equalTo:"Please Enter the Same Password",
        },

        join_date:{
        	required:"Please select date",
        },

         addresses:{
         required:"Please Enter user Address",
        },


      }
});

});

</script>


@endsection

<!----Start code for address add table --->
	<table>
		<tbody id="sub-body" class="hidden">
			<tr>
				<td style="vertical-align: inherit;" class="index"> 
						<input class="index" type="number" name="id">
				</td>
				<td style="vertical-align: inherit;"> 
						<textarea name="user_address" class=" user_address form-control " id="user_address" required="">  </textarea>
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
<!----Ends code for address add table --->
