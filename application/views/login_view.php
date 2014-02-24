	<?=$this->load->view("includes/header")?>

	<!-- Insert contents here -->
	<div id="right">
	<div class="container" id="signin1">
	<div id="alertmessage1"class="alert alert-danger"><?=$loginMessage?></a></div>
	<form action="<?=base_url().'index.php/login'?>" method='post'>
		Username: <input type='text' name='username'class="form-control" placeholder="Username" required autofocus/>
		Password: <input type='password' class="form-control" placeholder="Password"name='password' required/>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    <button class="btn btn-sm btn-success btn-block" type="submit">Create Account</button>
		
	</form>
		
    </div>  
	</div>
	 
	</div>
	
<?=$this->load->view("includes/footer")?>