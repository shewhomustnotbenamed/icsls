<?php $this->load->view('includes/header'); ?>
<script type="text/javascript">	
			window.onload = function(){
					createForm.password.onblur = validatePassword;
					createForm.repassword.onblur = validateRePass;
			}
			
			function validatePassword(){
				msg = "Invalid input!  ";
				str = createForm.password.value;
				
				if(str == "") msg+="Password is required. ";
				if(str.match(/^[a-z]$/)) msg="Strength: Weak";
				else if(str.match(/^[0-9]+$/)) msg="Strength: Weak";
				else if(str.match(/^[a-z0-9]+$/)) msg="Strength: Medium";
				else if(str.match(/^[a-zA-Z0-9]+$/)) msg="Strength: Strong";
				
				if(msg == "Invalid input!  ") msg="";
				document.getElementsByName("helppass")[0].innerHTML=msg;
				
			}
				
			function validateRePass(){
				msg = "Invalid input!  ";
				str = createForm.repassword.value;
				
				if(str != createForm.password.value) msg+="Password does not match. ";
				else msg="Passwords match.";
				
				if(msg == "Invalid input!  ") msg="";
				document.getElementsByName("helprepass")[0].innerHTML=msg;
				if(msg == "") return true;
				
			}	
		</script>
<div id="content">
	<div id="left">
	<div class = "profile-description">
		<img height='200' width='200' src='<?=base_url('img/user_images/'.  $query_user->profile_picture)?>'/>
		<?=$query_user->profile_picture?>

		<form action="<?=base_url()."index.php/borrower/change_profile_picture"?>" method="post" accept-charset="utf-8" enctype="multipart/form-data"><!--Profile Form-->
			Profile picture: <input type='file' id='profile_picture' name='profile_picture' required/><br/>
			<?=form_submit('submit','Change Profile Picture')?>
		</form>
		<form action="<?=base_url()."index.php/borrower/save"?>" method="post" name="createForm"><!--Profile Form-->
			<?=$save_message?> <!--Save Message-->
			<?=$username_exist?><!--Username Message-->
		<br/>
	        <table class="col-sm-8">
	            <tr>
					<h2><?=$query_user->last_name?>, <?=$query_user->first_name?> <?=$query_user->middle_name?></h2>
	            </tr>
	            <tr>
	            	<?php if($query_user->user_type=='S') { //if user is student?>
	            		<td align="right"><button type="button" class="btn btn-primary" >Student Number</button></td>
	            		<td align="right"> <input type="text" class="form-control" DISABLED id="student_number" value="<?=$query_user->student_number?>" name="student_number" pattern="^[0-9][0-9\-]{11}[0-9]$"  width="5em"></td>
					<?php }?>
					<?php if($query_user->user_type=='F') { //if user is FACULTY?>
	            		<td align="right"><button type="button" class="btn btn-primary" >Employee Number</button></td>
	            		<td align="right"> <input type="text" class="form-control" DISABLED id="student_number" value="<?=$query_user->employee_number?>" name="student_number" pattern="^[0-9][0-9\-]{11}[0-9]$"  width="5em"></td>
					<?php }?>
	            </tr>
	            <tr>
	            	<?php if($query_user->user_type=='S') { //if user is student?>
	            		<td align="right"><button type="button" class="btn btn-primary" >College</button></td>
	            		<td align="right"> <input type="text" class="form-control" DISABLED id="college" value="<?=$query_user->college?>" name="college" pattern="^[0-9][0-9\-]{11}[0-9]$"  width="5em"></td>
					<?php }?>
	            </tr>
	            <tr>
	            	<?php if($query_user->user_type=='S') { //if user is student?>
	            		<td align="right"><button type="button" class="btn btn-primary">Degree Course</button></td>
	            		<td align="right"> <input type="text" class="form-control" DISABLED id="degree" value="<?=$query_user->degree?>" name="degree" pattern="^[0-9][0-9\-]{11}[0-9]$"  width="5em"></td>
					<?php }?>
	            </tr>
	            <tr>
	                <td align="right"><button type="button" class="btn btn-primary">Email Address</button></td>
	                <td align="right"> <input type="text" class="form-control" DISABLED id="email_address" value="<?=$query_user->email_address?>" name="email_address" pattern = "^([a-z0-9._]{2,}@[a-zA-Z0-9.-]{2,}\.[a-zA-Z]{2,})(\.[a-zA-Z])*$"  width="5em"></td>
	            </tr>
	            <tr>
	                <td align="right"><button type="button" class="btn btn-primary"  >Username</button></td>
	                <td align="right"> <input type="text" class="form-control" id="username" name="username" value="<?=$query_user->username?>" pattern = "[A-Za-z_.0-9]+" width="3em" ></td>
	            </tr>
	            <tr>
	                <td align="right"><button type="button" class="btn btn-primary" width="3em" >Password</button></td>
	                <td align="right"> <input type="text" class="form-control" id="password" name="password" pattern="^[A-Z][A-Z0-9]{0,4}[0-9]$" width="3em"
	                	></span></td>
	                <td align="right"><span name="helppass"></td>
	            </tr>
	            <tr>
	                <td align="right"><button type="button" class="btn btn-primary" width="3em" >Confirm Password</button></td>
	                <td align="right"> <input type="text" class="form-control" id="repassword" name="repassword" pattern="^[A-Z][A-Z0-9]{0,4}[0-9]$" width="3em" ></span></td>
	                <td align="right"><span name="helprepass"></td>
	            </tr>
	            <tr>
		            <td align="right"><button type="button" class="btn btn-primary" width="3em" >College Address</button></td>
	                <td align="right"> <textarea class="form-control" id="college_address" name="college_address" pattern="^[A-Z0-9]{0,300}$"><?=$query_user->college_address?></textarea></td>
	            </tr>
	            <tr>
	                <td align="right"><button type="button" class="btn btn-primary" width="3em" >Contact Number</button></td>
	                <td align="right"> <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?=$query_user->contact_number?>" pattern="^[0-9]{10,12}$" ></td>
	            </tr>
	            <tr>
	                <td align="center">
	                <button type="submit" class="btn btn-default btn" name="submit">Edit</button>
	            	</td>
	            </tr>
	     </table>
	</form>
	</div>	
	</div>	
</div>
<?php $this->load->view('includes/footer'); ?>