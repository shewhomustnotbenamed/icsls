<!--
		Description: EDIT ACCOUNTS PAGE INCLUDING FORM FIELDS FOR EDITING USER'S ACCOUNT INFORMATION
		Author: Zinnia Kale A. Malabuyoc
		Last Modified: February 11, 2014
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title ?></title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width">
     <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/template.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main_login.css'); ?>">
        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery-2.0.3.min.js"); ?>"></script>
	<script>
		function checkUsername(){
			var input = $("#input").val();
			$.ajax({
				type: 'POST',
				url: 'http://localhost/Team1&4_Integrated/index.php/administrator/check_username',
				data: 'input='+input,
				success: function(result){
					if(result == "false"){
						alert("Username already exists!");
					}
				}
			});
		}
	</script>
</head>

	<body>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experiensce.</p>
        <![endif]-->
	<div class="navbar-fixed-top" id="test2">
		<div class="container">
			<div class="navbar-header" id="nav-bar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="<?php echo base_url('logo.png'); ?>" width="150" height="45" id="logo">
				</a>
				<div id="nav-in">
					<div class="navbar-collapse collapse">
						<ul class="nav nav-pills">
							<li class="active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> name_of_admin <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">View Profile</a></li>
									<li><a href="#">Search Accounts</a></li>
									<li><a href="#">Add/Edit Accounts</a></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--navbar-fixed-top-->
		<div id="edit_account" class="edit_acc">
			<form action="<?=base_url().'index.php/administrator/save_account_changes'?>" name = 'edit_form' method='post'>
				<table>
					<?php foreach ($account as $row){} ?>
					<br>
					<tr>
						<td align="right">
							<button type="button" class="btn btn-primary" width="2em" >
								<?php if ($row->user_type != 'S'){?>
									Employee No: </button>
									<td align = "right"><input type='text' id = "employee_number" class = "form-control" name='employee_no' pattern='[0-9]{9}' value="<?php echo $row->employee_number; ?>" /></td> <br/>
								<?php }?>
								<?php if ($row->user_type == 'S'){?>
									Student Number: </button>
									<td align = "right"><input type='text' id = "student_number" class = "form-control" name='stud_no' pattern='[\-0-9]{10}' value='<?php echo $row->student_number; ?>' /></td><br/>
								<?php }?>
							</button>
						</td>
					</tr>
					<tr>
						 <td align="right"><button type="button" class="btn btn-primary" width="2em" >Last Name</button></td>
                         <td align="right"><input type="text" class="form-control" id="last_name" name="last_name"pattern='[A-Za-z\s]{1,35}' value='<?php echo $row->last_name; ?>' required/></td>
					</tr>
					<tr>
						<td align="right"><button type="button" class="btn btn-primary" width="2em" >First Name</button></td>
                        <td align="right"><input type="text" class="form-control"  name="first_name" id="first_name" name="first_name" pattern='[A-Z\sa-z]{1,35}' value='<?php echo $row->first_name; ?>' required/></td>
					</tr>
					<tr>
						<td align="right"><button type="button" class="btn btn-primary" width="2em" >Middle Name</button></td>
                        <td align="right"> <input type="text" class="form-control" name="middle+name" id="middle_name" name="middle_name" pattern='[A-Z\sa-z]{1,35}' value='<?php echo $row->middle_name; ?>' /></td>
					</tr>
					<tr>
						<td align="right"><button type="button" class="btn btn-primary" width="2em" >Username</button></td>
                        <td align="right"><input type="text" class="form-control" name="username" id="uname" name="username" pattern='[A-Za-z_0-9]{1,15}' value= '<?php echo $row->username; ?>' onblur="checkUsername()" required/></td>
					</tr>
					<tr>
						<td align="right"><button type="button" class="btn btn-primary" width="2em" >Password</button></td>
                        <td align="right"><input type="password" class="form-control" id="password" name="password" value= '<?php echo $row->password; ?>' required></td>
					</tr>
					<tr>
						<td align="right"><button type="button" class="btn btn-primary" width="2em" >College Address</button></td>
                        <td align="right"> <input type="text" class="form-control" id="college_address" name="college_address" pattern='[A-Za-z\s0-9\.\,]{1,55}' value='<?php echo $row->college_address; ?>'></td>
					</tr>
					<tr>
						 <td align="right"><button type="button" class="btn btn-primary" >Email Address</button></td>
                         <td align="right"><input type="email" class="form-control" id="email_address" name="email_address" pattern='[A-Za-z_@\.0-9]{1,45}' value='<?php echo $row->email_address; ?>' /></td>
					</tr>
					<tr>
						<td align="right"><button type="button" class="btn btn-primary" width="2em" >Contact Number</button></td>
                        <td align="right"> <input type="text" class="form-control" id="contact_number" name="contact" pattern='[\+\-0-9]{1,13}' value='<?php echo $row->contact_number; ?>' ></td>
					</tr>
					<?php if ($row->user_type == 'S'){?>
						<tr>
							<td align="right"><button type="button" class="btn btn-primary" width="2em" >College</button></td>
							<td align="right"><input type="text" class="form-control" id="college" name="college" value='<?php echo $row->college; ?>'></td>
						</tr>
						<tr>
							<td align="right"><button type="button" class="btn btn-primary" width="2em" >Degree</button></td>
							<td align="right"><input type="text" class="form-control" id="degree" name="degree" value='<?php echo $row->degree; ?>'></td>
						</tr>
					<?php } ?>
				</table>

			<button type="submit"  id="submitref" value= "submit" class="btn btn-success" >Save Changes</button>
			</form>
		</div>
		<div class="navbar-fixed-bottom" id="test">
			<div class="text-center"> ICS Library 2014. 
				<p class="pull-right"><u><a href="http://www.portnine.com" target="_blank">ABOUT US<u></a></p>
				<p class="pull-right1"><u><a href="http://www.portnine.com" target="_blank">FAQ<u></a></p> 
			</div>
		</div>

		<!-- /container -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
	
		<script>window.jQuery || document.write('<script src="<?php echo base_url("js/vendor/jquery-1.10.1.js"); ?>"><\/script>')</script>

		<script src="<?php echo base_url('js/vendor/bootstrap.min.js'); ?>"></script>

		<script src="<?php echo base_url('js/main.js'); ?>"></script>

		<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>

	<!-- Insert .js at the bottom of admineditaccount_view.php located at Integrated UI design here -->

<?=$this->load->view('includes/footer')?>

</html>