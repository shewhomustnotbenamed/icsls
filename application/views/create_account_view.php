<?=$this->load->view('includes/header')?>
<!-- View to fill forms to create account of administrator and librarian (Admin module) -->
<!-- Erika C. Kimhoko January 27,2014 -->
<!-- Updated: January 29,2014 -->
<!-- Note: d q sure kung tama ung patterns na nilagay ko. Pacheck na lang tnx -->

	<!--alert to inform the user about the error -->
	<?php if(isset($_POST['submit'])) {echo "<script>alert(\"Your email has already been used. Please enter a another one.\");</script>";} ?>
			
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
			
		Employee No: <input type='text' name='employee_no' pattern="[A-Za-z0-9]{9}" value="<?=$employee_no?>" required/><br/>
		Last Name: <input type='text' name='last_name' pattern="[A-Za-z]{1,32}" value="<?=$last_name?>" required/><br/>
		First Name: <input type='text' name='first_name' pattern="[A-Za-z]{1,32}" value="<?=$first_name?>" required/><br/>
		Middle Name: <input type='text' name='middle_name' pattern="[A-Za-z]{1,32}" value="<?=$middle_name?>" required/><br/>
		
		User Type:
			<select name='user_type' value="L">
			  <option value="">----</option>
			  <option value="A">Admin</option>
			  <option value="L">Librarian</option>
			</select>
		<br/>
	
		Username: <input type='text' name='username' pattern="[A-Za-z0-9_]{1,30}" value="<?=$username?>" required/><br/>
		Password: <input type='password' name='password' pattern="[A-Za-z0-9_]{1,32}" value="<?=$password?>" required/><br/>
		College Address: <input type='text' name='college_address' pattern="[A-Za-z0-9]{1,150}" value="<?=$college_address?>" required/><br/>
		Email Address: <input type='email' name='email_address' value="<?=$email_address?>" required/><br/>
		Contact Number: <input type='text' name='contact' pattern="[0-9]{11}" value="<?=$contact?>" required/><br/>
		
		<input type='submit' name='submit' value='Submit'/>
	</form>

<?=$this->load->view("includes/footer")?>