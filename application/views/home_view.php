<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
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
		<link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/template.css'); ?>">

		<script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') ?>"></script>
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

			<!-- Collect the nav links, forms, and other content for toggling -->
        <?php if($this->session->userdata('userType') == 'L') { ?>
        <div id="nav-in">
            <div class="navbar-collapse collapse">
	            <ul class="nav nav-pills">
	                <li class="active">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> name_of_librarian <b class="caret"></b></a>
		                <ul class="dropdown-menu">
		                    <li><a href="#">View Profile</a></li>
		                    <li><a href="#">View Student/Faculty</a></li>
		                    <li><a href="<?=base_url().'index.php/librarian/search_reference_index'?>">Search References</a></li>
		                    <li class="dropdown-submenu">
		                    <a tabindex="-1" href="#">Add Reference</a>
		                        <ul class="dropdown-menu">
		                            <li> <a href="<?= site_url('librarian/add_reference') ?>">Add Reference</a></li>
		                            <li><a href="<?= site_url('librarian/file_upload') ?>">File Upload</a></li>
		                        </ul>
		                    </li>
		                  	<li><a href="<?=base_url().'index.php/librarian/add_reference_index'?>">Add Reference</a></li>
		                  	<li><a href="<?=base_url().'index.php/librarian/view_report_index'?>">Generate Report</a></li>
		                  	<li><a href="<?=base_url().'index.php/logout'?>">Logout</a></li>
		                </ul>
	                </li>
	            </ul>
            </div>     
        </div>
        <?php }else if($this->session->userdata('userType') == 'S' || $this->session->userdata('userType') == 'F') { ?>
        <div id="nav-in">
            <div class="navbar-collapse collapse">
	            <ul class="nav nav-pills">
	              <li class="active">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('username')?><b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                  <li><a href="<?=base_url().'index.php/borrower/view_borrower_profile_index'?>">View Profile</a></li>
	                  <li><a href="#">Search References</a></li>
	                  <li><a href="#">View Cart</a></li>
	                  <li><a href="<?=base_url().'index.php/logout'?>">Logout</a></li>
	                </ul>
	              </li>
	            </ul>
            </div>     
        </div>
        <?php }else{ ?>
		 	<div id="nav-in">
					<form class="navbar-form navbar-left nav-in-search" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Search</button>
						<a href="#advanceSearch1"data-toggle="modal">
							<input type="submit" name="aSearch" class="btn btn-primary" value="Advanced Search"/>
						</a>
					</form>
					<div id="advanceSearch1" class="modal fade in" role="dialog">  
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">  
									<a class="close" data-dismiss="modal">&times;</a>
									<h4>Advanced Search</h4>  
								</div>
								<div class="modal-body">
									<form name="aSearch" method='post' class = 'form-horizontal' style = 'margin-bottom: 0px;'>
										<div class="row">
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-btn">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></button>
														<ul class="dropdown-menu">
															<li><a href="#">Course Code</a></li>
															<li><a href="#">Title</a></li>
															<li><a href="#">Author</a></li>
															<li><a href="#">Publisher</a></li>
														</ul>
													</div><!-- /btn-group -->
													<input type="text" class="form-control">
												</div><!-- /input-group -->
											</div><!-- /.col-lg-10 -->
											<br/><br/>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-btn">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></button>
														<ul class="dropdown-menu">
															<li><a href="#">Course Code</a></li>
															<li><a href="#">Title</a></li>
															<li><a href="#">Author</a></li>
															<li><a href="#">Publisher</a></li>
														</ul>
													</div><!-- /btn-group -->
													<input type="text" class="form-control">
												</div><!-- /input-group -->
											</div><!-- /.col-lg-10 -->
											<br/><br/>
											<div class="col-lg-10">
												<div class="input-group">
													<div class="input-group-btn">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></button>
														<ul class="dropdown-menu">
															<li><a href="#">Course Code</a></li>
															<li><a href="#">Title</a></li>
															<li><a href="#">Author</a></li>
															<li><a href="#">Publisher</a></li>
														</ul>
													</div><!-- /btn-group -->
													<input type="text" class="form-control">
												</div><!-- /input-group -->
											</div><!-- /.col-lg-10 -->
											<br/><br/>
											<div class="col-lg-10">
												<div class="input-group">
													<span class="input-group-addon">Exact Match</span>
													<input type="text" class="form-control">
												</div>  
											</div>
											<br/></br/>
											<div class="col-lg-10">
												<div class="input-group">
													<span class="input-group-addon">Search Expression</span>
													<input type="text" class="form-control">
												</div>  
											</div>
										</div>
									</form>
									<div class="modal-footer">
										<button class="btn btn-primary" name="search">Search</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
        <?php } ?>
			</div>
		</div>
	</div><!--navbar-fixed-top-->
	
	<div id="content">
		<div id="left">
			<div id="carou">
			<!--  Carousel -->
			<!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
				<div id="this-carousel-id" class="carousel slide">
					<div class="carousel-inner" id="img-car">
						<div class = "item active">;
							<a href = ""><img src = "<?php echo base_url('img/5.jpg'); ?>" alt="Image 1" /></a>;
							<div class = "carousel-caption">
								<p></p>
								<p><a href = "">&raquo;</a></p>
							</div>
						</div>
						<?php for($i = 6; $i < 9; $i++){ ?>
							<div class="item">
								<a href=""> <img src="<?php echo base_url("img/". $i .".jpg") ?>" alt="Image 1" /></a>
								<div class="carousel-caption">
									<p></p>;
									<p><a href="">&raquo;</a></p>;
								</div>;
							</div>;
						<?php } ?>
					</div><!-- .carousel-inner -->
				<!--  next and previous controls here
				href values must reference the id for this carousel -->
					<a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
				</div><!-- .carousel -->
			</div>
			<!-- end carousel -->
	
			<div class="link-gr">
				<a href="" target="_blank" class="link-pic" id="uplb">
					<div class="title-link">UPLB</div>
				</a>
				<a href="" target="_blank" class="link-pic" id="ics">
					<div class="title-link">ICS</div>
				</a>
				<a href="" target="_blank" class="link-pic" id="add">
					<div class="title-link">Mordor</div>
				</a>
			</div>
		</div>
	
		<div id="right">
			<div class="container" id="signin">
				<form action="<?=base_url().'index.php/login'?>" class="form-signin" role="form" method='post'>
					<input type="text" name='username' class="form-control" placeholder="Username">
					<input type="password" name='password' class="form-control" placeholder="Password">
					<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					<button class="btn btn-sm btn-success btn-block" type="submit">Create Account</button>
				</form>

				<!-- Create Account Modal -->
				<div class="modal fade bs-modal-lg" tabindex="-1" id="createAccount" tabindex="-1" role="dialog" aria-labelledby="createAccountLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg"> 
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Create Account</h4>
							</div>
							<div class="modal-body">
								<form method="post" action = "<?php base_url('index.phph/create_account/account_created'); ?>" role="form" accept-charset="utf-8" name="createForm"> <!-- FORM -->
								<!--div class="form-group"-->
									<label> Name </label></br>
									<div class="row">
										<div class="form-inline">
											<div class="form-group">
												<input type="text" class="form-control" id="first_name" name = "first_name" pattern = "([A-Za-z]{2,32}\s*)+" placeholder="First Name" required>
											</div>
											<div class="form-group">
												<div class="col-xs-offset-6">
													<input type="text" class="form-control" id="middle_name" name = "middle_name" pattern = "[A-Za-z]{1,32}" placeholder="Middle Name" required>
												</div>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="last_name" name = "last_name" pattern = "[A-Za-z]+" placeholder="Last Name" required> 
											</div>
										</div>
									</div><br/>

									<table class="form-group table">
										<tr>
											<td align="right" class="col-md-4"><label> Username</label></td>
											<td><input type="text" class="form-control col-md-6" id="username" name = "username" pattern = "[A-Za-z_.0-9]+" required></td>
										</tr>						
										<tr>
											<td align="right" class="col-md-4"><label> Password</label> </td>
											<td><input type="password" class="form-control" id="password" name="password" required>
												<span name="helppass" id="helppass"></span>
											</td>
										</tr>						
										<tr>
											<td align="right" class="col-md-4"><label> Re-type Password</label> </td>
											<td><input type="password" class="form-control" id="repass" name = "repass" required/>
												<span name="helprepass" id="helprepass"></span></br>
											</td>
										</tr>
										<tr>
											<td align="right" class="col-md-4"><label> Contact Number</label> </td>
											<td><input type="text" class="form-control" id="contact_number" name = "contact_number" pattern = "09[0-9]{9}" placeholder="09XXXXXXXXX" required></td>
										</tr>
										<tr>
											<td align="right" class="col-md-4"><label> E-mail Address</label> </td>
											<td><input type="text" class="form-control" id="email_address" name = "email_address" pattern = "^([a-z0-9._]{2,}@[a-zA-Z0-9.-]{2,}\.[a-zA-Z]{2,})(\.[a-zA-Z])*$" placeholder="icsrecario@gmail.com" required/></td>
										</tr>
										<tr>
											<td align="right" class="col-md-4"><label> College Address</label> </td>
											<td><input type="text" class="form-control" id="college_address" name = "college_address" required></td>
										</tr>
										<tr>
											<td align="right" class="col-md-4"></br>
												<select name="usertype" class="form-control typeDropdown">
													<option value="">Select User Type</option>
													<option value="S"> Student </option>
													<option value="F"> Faculty </option>
												</select>
											</td>
											<td>
											</td>
										</tr>
										<tr id="student_number">
											<td align="right" class="col-md-4"><label id = 'stdno'> Student No.</label> </td>
											<td><input type="text" class="form-control"  id="student_number" name="student_number" pattern = "^[0-9]{4}[-]{1}[0-9]{5}$"/></br></td>
										</tr>
										<tr class="collegeSet">
											<td align="right" class="col-md-4"><label>College</label> </td>
											<td>
												<select name="college" class="form-control collegeDropdown">
													<option value="">Select College</option>
													<option value="CAS"> College of Arts and Sciences </option>
													<option value="CA-CAS"> College of Agriculture - College of Arts and Sciences</option>
													<option value="CDC"> College of Development Communication </option>
													<option value="CEM"> College of Economics and Management </option>
													<option value="CEAT"> College of Engineering and Agro-Industrial Technology </option>
													<option value="CFNR"> College of Forestry and Natural Resources </option>
													<option value="CHE"> College of Human Ecology </option>
													<option value="CVM"> College of Veterinary Medicine </option>
													<option value="GS"> Graduate School </option>
												</select>
											</td>
										</tr>
										<tr class="degreeSet">
											<td align="right" class="col-md-4"><label>Degree</label> </td>
											<td>
												<select name="degree" class="form-control degreeDropdown">
													<option value="">Select Degree</option>
												</select>
											</td>
										</tr>
										<tr id="employee_number">
											<td align="right" class="col-md-4"><label id = 'enum'> Employee No.</label> </td>
											<td><input type="text" id = 'employee_number' class="form-control" name="employee_number" pattern="[0-9]{9}" required/></td>
										</tr>
									</table>
							
								   <!--/div-->				
							   </form> <!-- END OF FORM -->
					        </div>
	        				<div class="modal-footer">
	          					<button class="btn btn-primary" name="login">Create Account</button>
					        </div>
	      				</div><!-- /.modal-content -->
	    			</div><!-- /.modal-dialog -->
	  			</div><!-- /.modal -->
		  
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
	<!--footer-->
	<div class="navbar-fixed-bottom" id="test">
		<div class="text-center"> ICS Library 2014. 
			<p class="pull-right"><u><a href="http://www.portnine.com" target="_blank">ABOUT US<u></a></p>
			<p class="pull-right1"><u><a href="http://www.portnine.com" target="_blank">FAQ<u></a></p> 
		</div>
	</div>

 

    <!-- Main jumbotron for a primary marketing message or call to action -->

     <!-- /container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url("js/vendor/jquery-1.10.1.js") ?>"><\/script>')</script>
	<script src="<?php echo base_url("js/jquery-2.0.3.min.js"); ?>"></script>
	<script src="<?php echo base_url('js/vendor/bootstrap.min.js'); ?>"></script>

	<script src="<?php echo base_url('js/main.js'); ?>"></script>

	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src='//www.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

	<script type="text/javascript">	
		window.onload = function(){
				createForm.password.onblur = validatePassword;
				createForm.repass.onblur = validateRePass;
				
				$("#stdno").hide();
				$("#student_number").hide();
				$(".collegeDropdown").hide();
				$(".degreeDropdown").hide();
				$("#enum").hide();
				$("#employee_number").hide();
				
				$("#employee_number").attr("disabled", "disabled");
				$("#student_number").attr("disabled", "disabled");
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
			str = createForm.repass.value;
			
			if(str != createForm.password.value) msg+="Password does not match. ";
			else msg="Passwords match.";
			
			if(msg == "Invalid input!  ") msg="";
			document.getElementsByName("helprepass")[0].innerHTML=msg;
			if(msg == "") return true;
			
		}	
	</script>

	<script>
		$(".typeDropdown").change(function() {
			var type=$(this).val();
			if(type == 'S'){
				$("#stdno").show();
				$("#student_number").show();
				$(".degreeDropdown").show();
				$(".collegeDropdown").show();
				
				$("#enum").hide();
				$("#employee_number").hide();
				
				$("#student_number").removeAttr("disabled");
			} else if(type == 'F'){
				$("#employee_number").attr("disabled", "disabled");
				$("#student_number").attr("disabled", "disabled");
				
				$("#stdno").hide();
				$("#student_number").hide();
				$(".degreeDropdown").hide();
				$(".collegeDropdown").hide();
				
				$("#enum").show();
				$("#employee_number").show();
				
				$("#employee_number").removeAttr("disabled");
			}
		});
	</script>
	<!-- Degree Program JS Script -->
	<script type="text/javascript">
		<!--
			$(".collegeDropdown").change(function() {
				var col=$(this).val();
										 
				function fillDegreeDropdown(colDegOption) {
					$.each(colDegOption, function(val, text) {
						$('.degreeDropdown').append($('<option></option>').val(val).html(text));
					});
				}
													
				function clearDegreeDropdown() {
					$('.degreeDropdown option:gt(0)').remove();
				}

				if(col == 'CA') {
					clearDegreeDropdown();
														
					var CaOption={
						BSA:'BS Agriculture',
						BSABT: 'BS Agricultural Biotechnology',
						BSFT: 'BS Food Technology'
					};
				fillDegreeDropdown(CaOption);
				} else if(col == 'CAS'){
					clearDegreeDropdown();
														
					var CasOption={
						BACA:'BA Communication Arts',
						BAS: 'BA Sociology',
						BAP: 'BA Philosophy',
						BSAM: 'BS Applied Mathematics',
						BSAP: 'BS Applied Physics',
						BSB: 'BS Biology',
						BSC: 'BS Chemistry',
						BSCS: 'BS Computer Science',
						BSM: 'BS Mathematics',
						BSMST: 'BS Mathematics and Science Teaching',
						BSS: 'BS Statistics'
					};
				fillDegreeDropdown(CasOption);
				} else if(col == 'CA-CAS'){
					clearDegreeDropdown();
														
					var CaCasOption={
						BSAC: 'BS Agricultural Chemistry'
					};
				fillDegreeDropdown(CaCasOption);
				} else if(col == 'CDC'){
					clearDegreeDropdown();
														
					var CdcOption={
						BSDC: 'BS Development Communication'
					};
				fillDegreeDropdown(CdcOption);
				} else if(col == 'CEAT'){
					clearDegreeDropdown();
														
					var CeatOption={
						BSAeng: 'BS Agricultural and Biosystems Engineering',
						BSChE: 'BS Chemical Engineering',
						BSCE: 'BS Civil Engineering',
						BSEE: 'BS Electrical Engineering',
						BSIE: 'BS Industrial Engineering'
					};
				fillDegreeDropdown(CeatOption);
				} else if(col == 'CEM'){
					clearDegreeDropdown();
														
					var CemOption={
						BSAE: 'BS Agricultural Economics',
						BSABM: 'BS Agribusiness Management',
						BSE: 'BS Economics'
					};
				fillDegreeDropdown(CemOption);
				} else if(col == 'CFNR'){
					clearDegreeDropdown();
														
					var CfnrOption={
						BSF: 'BS Forestry'
					};
				fillDegreeDropdown(CfnrOption);
				} else if(col == 'CHE'){
					clearDegreeDropdown();
														
					var CheOption={
						BSHE: 'BS Human Ecology',
						BSN: 'BS Nutrition'
					};
				fillDegreeDropdown(CheOption);
				} else if(col == 'CVM'){
					clearDegreeDropdown();
														
					var CvmOption={
						DVM: 'Doctor of Veterenary Medicine'
					};
				fillDegreeDropdown(CvmOption);
				} else if(col == 'GS'){
					clearDegreeDropdown();
														
					var GsOption={
						MSAC: 'MS Agricultural Chemistry',
						MSAE: 'MS Agricultural Economics',
						MSAEd: 'MS Agricultural Education',
						MSAg: 'MS Agrometeorology',
						MSAgr: 'MS Agronomy',
						MSAS: 'MS Animal Science',
						MSAN: 'MS Applied Nutrition',
						MSBC: 'MS Biochemistry',
						MSB: 'MS Botany',
						MSCE: 'MS Chemical Engineering',
						MSC: 'MS Chemistry',
						MSCS: 'MS Computer Science',
						MSCo: 'MS Community',
						MSD: 'MS Development',
						MSDC: 'MS Development Communication',
						MSDMG: 'MS Development Management and Governance',
						MSE: 'MS Economics',
						MSEn: 'MS Entomology',
						MSES: 'MS Environmental Science',
						MSExE: 'MS Extension Education',
						MSFRM: 'MS Family Resource Management',
						MSFS: 'MS Food Science',
						MSFBS: 'MS Forestry: Forest Biological Sciences',
						MSFRM: 'MS Forestry: Forest Resources Management',
						MSFSFI: 'MS Forestry: Silviculture and Forest Influences',
						MSFSF: 'MS Forestry: Social Forestry',
						MSGH: 'MS Genetics Horticulture',
						MSM: 'MS Mathematics',
						MSMB: 'MS Microbiology',
						MSMBB: 'MS Molecular Biology and Biotechnology',
						MSNRC: 'MS Natural Resources Conservation',
						MSPB: 'MS Plant Breeding',
						MSPGRC: 'MS Plant Genetics Resources Conservation and Management',
						MSPP: 'MS Plant Pathology',
						MSRS: 'MS Rural Sociology',
						MSSS: 'MS Social Science',
						MSS: 'MS Statistics',
						MSVM: 'MS Veterenary Medicine',
						MSWS: 'MS Wildlife Studies',
						MSZ: 'MS Zoology',
						MF: 'Master of Forestry',
						MIT: 'Master of Information Technology',
						MACA: 'MA Communication Arts',
						MAS: 'MA Sociology',
						MAg: 'Master of Agriculture',
						MMAbm: 'Master of Management - Agribusiness Management and Entrepreneurship',
						MMBM: 'Master of Management - Business Management',
						MMCM: 'Master of Management - Cooperative Management',
						PAC: 'PhD Agricultural Chemistry',
						PAE: 'PhD Agricultural Economics',
						PAEd: 'PhD Agricultural Education',
						PAEng: 'PhD Agricultural Engineering',
						PAgr: 'PhD Agronomy',
						PAS: 'PhD Animal Science',
						PBC: 'PhD Biochemistry',
						PSB: 'PhD Botany',
						PCS: 'PhD Computer Science',
						PCD: 'PhD Community Development',
						PDC: 'PhD Development Communication',
						PDS: 'PhD Development Studies',
						PEn: 'PhD Entomology',
						PES: 'PhD Environmental Science',
						PExE: 'PhD Extension Education',
						PFS: 'PhD Food Science',
						PFBS: 'PhD Forestry: Forest Biological Sciences',
						PFRM: 'PhD Forestry: Forest Resources Management',
						PFSFI: 'PhD Forestry: Silviculture and Forest Influences',
						PSFWT: 'PhD Forestry: Wood Science and Technology',
						PGH: 'PhD Genetics Horticulture',
						PHN: 'PhD Human Nutrition',
						PMB: 'PhD Microbiology',
						PMBB: 'PhD Molecular Biology and Biotechnology',
						PPB: 'PhD Plant Breeding',
						PPP: 'PhD Plant Pathology',
						PSS: 'PhD Social Science',
						PSS: 'PhD Statistics',
					};
				fillDegreeDropdown(GsOption);
				}
			});
		-->
		</script>
    </body>
</html>