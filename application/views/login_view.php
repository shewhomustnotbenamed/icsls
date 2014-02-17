	<?=$this->load->view("includes/header")?>

	<!-- Insert contents here -->
	<div id="right">
	<div class="container" id="signin">
	<?=$loginMessage?>
	<form action="<?=base_url().'index.php/login'?>" method='post'>
		Username: <input type='text' name='username'class="form-control" placeholder="Username" required autofocus/>
		Password: <input type='password' class="form-control" placeholder="Password"name='password' required/>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    <button class="btn btn-sm btn-success btn-block" type="submit">Create Account</button>
		
	</form>
		<table class="table table-bordered" id="announ">
			<th>Announcements</th>
			<th>Date</th>
			<tr>
				<td>ITEM1</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM2</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM3</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM4</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM4</td>
				<td>00/00/00</td>
			</tr>
		</table>
    </div>  
	</div>
	 
	</div>
	
<?=$this->load->view("includes/footer")?>