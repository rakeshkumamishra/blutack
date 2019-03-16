
<?php
 echo
	'<div class="row user-registration-form">
		<p style="font-size:16px;text-transform:uppercase;font-weight:600;color:#FF0000;display:none;padding-bottom:10px;" id="register_error"><span style="padding-right:5px;"><i class="fa fa-warning" style=""></i></span><span id="register_error_child">Invalid Register Details</span></p>
		<p style="font-size:16px;text-transform:uppercase;font-weight:600;color:rgba(30,200,0,1);display:none;padding-bottom:10px;" id="register_success"><span style="padding-right:5px;"><i class="fa fa-warning" style=""></i></span><span id="register_success_child">Successful</span></p>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="fName" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="First Name*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="lName" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="Last Name" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="emailId" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="Email ID" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="mobNo" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="number" placeholder="Mobile No.*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="addr1" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="Address Line 1*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="addr2" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="Address Line 2*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="city" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="City*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<select id="state" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="text" placeholder="State*" value="">
				<option value="Bihar">State-Bihar</option>
				<option value="Jharkhand">State-Jharkhand</option>
				</select>
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="zip" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="number" placeholder="Zipcode*" value="" />
			</div>
		</div>
		
		
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<select id="category" style="cursor:pointer;font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);">
					<option value="0">Choose One</option>
					<option value="party">Party</option>
					<option value="Institute">Institute</option>
				</select>
			</div>
		</div>
		
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="password" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="password" placeholder="Password*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="cnf_password" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="password" placeholder="Confirm Password*" value="" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<input id="followup_date"  style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="date" placeholder="Follow Date" value="Follow date" />
			</div>
		</div>
		<div class="s-12 m-6 l-6" style="padding-bottom:10px;">
			<div style="padding:0px 20px 10px 0px;">
				<textarea name="comments" id="comments" style="font-size:14px;width:100%; border-radius:5px; padding:10px 16px; box-shadow:0 0 5px rgba(0,0,0,0.06); border-style:none; border:1px solid rgba(0,0,0,0.1);" type="comments" placeholder="Comments" value="" ></textarea>
			</div>
		</div>
		<div class="row user-registration-form">
			<div class="s-12 m-12 l-6" style="padding-bottom:10px;">
				<div style="padding:0px 20px 10px 0px">
					<p id="user-registration-button" style="width:100%;font-size:16px;color:rgba(245,245,245,1);background-color:rgba(5,142,208,1);font-weight:600;text-transform:uppercase;text-align:center;cursor:pointer;padding:10px 15px;">
						<span style="padding-right:5px;"><i class="fa fa-pencil"></i></span>REGISTER
					</p>
				</div>
			</div>
			<div class="s-12 m-12 l-6" style="padding-bottom:10px;">
				<div style="padding:0px 20px 10px 0px">
					<p id="user-registration-cancle-button" style="width:100%;font-size:16px;color:rgba(245,245,245,1);background-color:rgba(5,142,208,1);font-weight:600;text-transform:uppercase;text-align:center;cursor:pointer;padding:10px 15px;">
						<span style="padding-right:5px;"><i class="fa fa-pencil"></i></span><button type="button">CANCEL</button> 
					</p>
				</div>
			</div>
		</div>
	</div>';
;?>
<style>
input[type="date"]:before {
    content: attr(placeholder) !important;
    color: #aaa;
    margin-right: 0.5em;
  }
  input[type="date"]:focus:before,
  input[type="date"]:valid:before {
    content: "";
  }
  </style>
<!--<script>
 $(function() 
 {   $( ".datepicker" ).datepicker({
         changeMonth:true,
         changeYear:true,
         yearRange:"-100:+0",
         dateFormat:"dd MM yy" });
 });

 </script>-->
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){
            location.reload(true);
        });
    });
</script>
<script>
	$('#user-registration-button').click(function(e){
			var error=0;
			var fName = $('#fName').val();
			var lName = $('#lName').val();
			var emailId = $('#emailId').val();
			var mobNo = $('#mobNo').val();
			var password = $('#password').val();
			var cnf_password = $('#cnf_password').val();
			var followup_date =$('#followup_date').val();
			var comments=$('#comments').val();
			var addr1 = $('#addr1').val();
			var addr2 = $('#addr2').val();
			var city = $('#city').val();
			var zip = $('#zip').val();
			var state = $('#state').val();
			//var country = $('#country').val();
			var cust_type = $('#category').val();
			//var username = $('#username').val();
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var phoneno = /^\d{10}$/;

			if(fName.length<3)
			{
				$("#register_error_child").text("First Name Should be of minimum of 3 Characters");
				$('#register_error').css("display","block");
				error=1;
			}
			/*else if(lName.length<2)
			{
				$("#register_error_child").text("Last Name Should be of minimum of 3 Characters");
				$('#register_error').css("display","block");
				error=1;
			}
			else if(!emailId.match(mailformat))
			{
				$("#register_error_child").text("Invalid Email Id");
				$('#register_error').css("display","block");
				error=1;
			}*/
			else if(!mobNo.match(phoneno))
			{
				$("#register_error_child").text("Invalid Mobile No");
				$('#register_error').css("display","block");
				error=1;
			}else if(category==0)
			{
				$("#register_error_child").text("category should not blank");
				$('#register_error').css("display","block");
				error=1;
			}
			else if(password.length<6)
			{
				$("#register_error_child").text("Password must be of minimum six character");
				$('#register_error').css("display","block");
				error=1;
			}
			else if(cnf_password!=password)
			{
				$("#register_error_child").text("Password and Confirm Password doesn't match");
				$('#register_error').css("display","block");
				error=1;
			}
			if(error==0)
			{
				$.ajax({
					url: "add-new-customer-by-admin.php",
					data:{
						"fname":fName,
						"lname":lName,
						"emailId":emailId,
						"mobNo":mobNo,
						"addr1":addr1,
						"addr2":addr2,
						"city":city,
						"state":state,
						"zip":zip,
						"followup_date":followup_date,
						"comments":comments,
						//"country":country,
						"cust_type":cust_type,
						//"username":username,
						"password":password,
						"follow_date":followup_date,
					},
					method:"POST",
					success: function(data){
						if(data=="success"){
							//window.location.href = "index.php";
							//$("#button-login-header").hide();
							$("#register_success").show();
						}
						else{
							  $("#register_error_child").text(data);
								$('#register_error').css("display","block");
							
							}
						}
					
				});
			}
		});
		
</script>	
