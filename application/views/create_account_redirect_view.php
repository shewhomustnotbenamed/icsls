<?=$this->load->view('includes/header')?>
<!-- View to re-fill forms which has the same values in the database (email,password,username)-->
<!-- Erika C. Kimhoko January 27,2014 -->

	<form action="<?=base_url().'index.php/administrator/insert_create'?>" method='post'>
		
		Employee No: <input type='text' name='employee_no' pattern="[A-Za-z0-9]{9}" value=<?=$employee_no?> required/><br/>
		Last Name: <input type='text' name='last_name' pattern="[A-Za-z]{1,32}" value=<?=$last_name?> required/><br/>
		First Name: <input type='text' name='first_name' pattern="[A-Za-z]{1,32}" value=<?=$first_name?> required/><br/>
		Middle Name: <input type='text' name='middle_name' pattern="[A-Za-z]{1,32}" value=<?=$middle_name?> required/><br/>
		User Type: <input type='text' name='user_type' pattern="[LlAa]{1}" value=<?=$user_type?> required/><br/>
		Username: <input type='text' name='username' pattern="[A-Za-z0-9_]{1,30}" required/><br/>
		Password: <input type='password' name='password' pattern="[A-Za-z0-9_]{1,32}" required/><br/>
		College Address: <input type='text' name='college_address' pattern="[A-Za-z0-9]{1,150}" value=<?=$college_address?> required/><br/>
		Email Address: <input type='email' name='email_address' required/><br/>
		Contact Number: <input type='text' name='contact' pattern="[0-9]{11}" value=<?=$contact?> required/><br/>
		
		<input type='submit' name='submit' value='submit'/>
	</form>

<?=$this->load->view("includes/footer")?>