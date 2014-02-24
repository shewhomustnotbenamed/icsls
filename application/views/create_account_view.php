<?=$this->load->view('includes/header')?>
<!-- View to fill forms to create account of administrator and librarian (Admin module) -->
<!-- Erika C. Kimhoko January 27,2014 -->
<!-- Updated: January 29,2014 -->
<!-- Note: d q sure kung tama ung patterns na nilagay ko. Pacheck na lang tnx -->

	<!--alert to inform the user about the error -->

	<div id="add_acc">
	<?php if(isset($_POST['submit'])) {echo "<script>alert(\"Your email has already been used. Please enter a another one.\");</script>";} ?>
		<table>	
	<form action="<?=base_url().'index.php/administrator/create_account'?>" method='post'>
		
		<?php 
			//setting values of the form
			$employee_no = isset($_POST['submit']) ? $_POST['employee_no'] : null; 
			$last_name = isset($_POST['submit']) ? $_POST['last_name'] : null; 
			$first_name = isset($_POST['submit']) ? $_POST['first_name'] : null; 
			$middle_name = isset($_POST['submit']) ? $_POST['middle_name'] : null; 
			$user_type = isset($_POST['submit']) ? $_POST['user_type'] : null; 
			$college_address = isset($_POST['submit']) ? $_POST['college_address'] : null; 
			$contact = isset($_POST['submit']) ? $_POST['contact'] : null; 
			$email_address = isset($_POST['submit']) ? $_POST['email_address'] : null; 
			$username = null;
			$password = null;
		?>
		
			<tr>
				<td align="right"><button type="button" class="btn btn-primary" width="2em" >Employee Number</button></td>
				<td align="right"><input type='text' class="form-control" name='employee_no' pattern="[A-Za-z0-9]{9}" value="<?=$employee_no?>" required/></td>
			</tr>
			<tr>
				<td align="right"><button type="button" class="btn btn-primary" width="2em" >Last Name:</button></td>
				<td align="right"><input type='text'class="form-control" name='last_name' pattern="[A-Za-z]{1,32}" value="<?=$last_name?>" required/></td>
	       </tr>
	       <tr>
			<td align="right"><button type="button" class="btn btn-primary" width="2em" >First Name:</button></td>
			<td align="right"><input type='text' class="form-control"name='first_name' pattern="[A-Za-z]{1,32}" value="<?=$first_name?>" required/></td>
		</tr>
		<tr>
			<td align="right"><button type="button" class="btn btn-primary" width="2em" >Middle Name:</button></td>
			<td align="right"><input type='text'class="form-control" name='middle_name' pattern="[A-Za-z]{1,32}" value="<?=$middle_name?>" required/></td>
		</tr>
		<tr>
		<td align="right"><button type="button" class="btn btn-primary" width="2em" >User Type:</button></td>
			<td align="right"><select  class="btn btn-default" name='user_type' value="L">
			  <option value="">----</option>
			  <option value="A">Admin</option>
			  <option value="L">Librarian</option>
			</select>
		</tr>
		<tr>
			<td align="right"><button type="button" class="btn btn-primary" width="2em" >Username:</button></td>
			<td align="right"><input type='text' class="form-control"name='username' pattern="[A-Za-z0-9_]{1,30}" value="<?=$username?>" required/></td>
		</tr>
		<tr>
		<td align="right"><button type="button" class="btn btn-primary" width="2em" >Password:</button></td>
		<td align="right"><input type='password'class="form-control" name='password' pattern="[A-Za-z0-9_]{1,32}" value="<?=$password?>" required/></td>
		</tr>
		<tr>
			<td align="right"><button type="button" class="btn btn-primary" width="2em" >College Address:</button></td>
		<td align="right"><input type='text' class="form-control"name='college_address' pattern="[A-Za-z0-9]{1,150}" value="<?=$college_address?>" required/></td>
		</tr>
		<tr>
		<td align="right"><button type="button" class="btn btn-primary" width="2em" >Email Address:</button></td>
		<td align="right"><input type='email' class="form-control"name='email_address' value="<?=$email_address?>" required/></td>
		</tr>
		<tr>
		<td align="right"><button type="button" class="btn btn-primary" width="2em" >Contact Number:</button></td>
		<td align="right"><input type='text' class="form-control"name='contact' pattern="[0-9]{11}" value="<?=$contact?>" required/></td>
		</tr>
		<tr>
		<td align="center"><input type='submit' name='submit' value='Submit'/></td>
	   </tr>
	</form>

</table>
</div>
<?=$this->load->view("includes/footer")?>