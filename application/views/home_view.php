<?=$this->load->view("includes/header")?>
<div id="advanceSearch" class="modal fade in" role="dialog">  
<div class="modal-dialog">  
          <div class="modal-content">
            <div class="modal-header">  
              <a class="close" data-dismiss="modal">&times;</a>
            <h4>Advanced Search</h4>  
            </div><!--modal header-->
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/search/advanced_search_reference'); ?>" method="get" accept-charset="utf-8">
        <table>
		<?php
		
		$i = array('Title:','Author:','Year Published:','Publisher:','Subject:');
		$j = array('title','author','year_published','publisher','course_code',);
		$m=null;
		
		for($k=0;$k<count($i);$k++){
			if(isset($temparray) && in_array($j[$k],$temparray)) 
				$m = $temparrayvalues[array_search($j[$k], $temparray)];
		echo '<tr>';
        echo   '<td align="right"><button class="btn btn-primary"><input value="title" type="checkbox" name="projection[]" checked="true">'.$i[$k].'</button></td>';
        echo   '<td align="right"><input type="text" class="form-control" name="title" size = "30" value="'.$m.'"><br/></td></tr>';
	}
		?>
          <tr>
          	  <td align="right"><button class="btn btn-primary">Category:</button></td>
            <td align="right">
              <select class="form-control" >
                <option value="B">Book</option>
                <option value="J">Journal</option>
                <option value="T">Thesis</option>
                <option value="D">CD</option>
                <option value="C">Catalog</option>
              </select><br/>
            </td>
          </tr>
            <tr>
            <td align="left"><input type="radio" name="sort" value="sortalpha"checked="true">Sort from A to Z</td>
            <td align="left"><input type="radio" name="sort" value="sortbeta">Sort from Z to A</td>
          </tr> 
          <tr>
            <td align="left"><input type="radio" name="sort" value="sortyear">Sort by year</td>
            <td align="left"><input type="radio" name="sort" value="sortauthor">Sort by author(A-Z)</td>
          </tr> 
        </table>
        
       

              <div class="modal-footer">
                <input  class="btn btn-primary"type="submit" value="Advanced Search" />
                 </form> 
              </div> <!-- modal footer -->
            </div>
          </div>
        </div>
    </div> 
	<div id="content">
		<div id="left1">
			<div id="carou1">
			<!--  Carousel -->
			<!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
				<div id="this-carousel-id" class="carousel slide">
					<div class="carousel-inner" id="img-car1">
						<div class = "item active">;
							<a href = ""><img src = "<?php echo base_url('img/1.jpg'); ?>" alt="Image 1" /></a>;
							<div class = "carousel-caption">
								<p></p>
								<p><a href = "">&raquo;</a></p>
							</div>
						</div>
						<?php for($i = 2; $i < 5; $i++){ ?>
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
	
			<div class="link-gr1">
				<a href="" target="_blank" class="link-pic" id="uplb1">
					<div class="title-link">UPLB</div>
				</a>
				<a href="" target="_blank" class="link-pic" id="ics1">
					<div class="title-link">ICS</div>
				</a>
				<a href="" target="_blank" class="link-pic" id="add1">
					<div class="title-link">Mordor</div>
				</a>
			</div>
		</div>
	
		<div id="right1">
			<div class="container" id="signin">
				<form action="<?=base_url().'index.php/login'?>" class="form-signin" role="form" method='post'>
					<input type="text" name='username' class="form-control" placeholder="Username" required>
					<input type="password" name='password' class="form-control" placeholder="Password" required>
					<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				
				</form>
				<button class="btn btn-sm btn-success btn-block" href="#createAccount" data-toggle="modal" data-target=".bs-modal-lg">Create Account</button>
	<!-- Create Account Modal -->
	<div class="modal fade bs-modal-lg" tabindex="-1" id="createAccount" tabindex="-1" role="dialog" aria-labelledby="createAccountLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg"> 
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Create Account</h4>
	        </div>
	        <div class="modal-body">
	          <form method="post" action="<?=base_url('index.php/administrator/create_account')?>" role="form" accept-charset="utf-8" name="createForm"> <!-- FORM -->
	          	<!--div class="form-group"-->
	          		<label> Name </label></br>
	          		<div class="row">
	          			<div class="form-inline">
							<div class="form-group">
								<input type="text" class="form-control" id="first_name" name = "first_name" pattern = "[A-Za-z]+" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<div class="col-xs-offset-6">
									<input type="text" class="form-control" id="middle_name" name = "middle_name" placeholder="Middle Name" required>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="last_name" name = "last_name" pattern = "[A-Za-z]+" placeholder="Last Name" required> 
							</div>
						</div>
					</div><br/>

					<table class="form-group table">
						<tr>
							<td align="right" class="col-md-4"><label> Username</label> </td>
							<td><input type="text" class="form-control col-md-6" id="username" name = "username" pattern = "[A-Za-z_.0-9]+" required></td>
						</tr>						
						<tr>
							<td align="right" class="col-md-4"><label> Password</label> </td>
							<td><input type="password" class="form-control" id="password" name="password" required>
							<span name="helppass" id="helppass"></span></td>
						</tr>						
						<tr>
							<td align="right" class="col-md-4"><label> Re-type Password</label> </td>
							<td><input type="password" class="form-control" id="repass" name = "repass" required/>
							<span name="helprepass" id="helprepass"></span></br></td>
						</tr>
						<tr>
							<td align="right" class="col-md-4"><label> Contact Number</label> </td>
							<td><input type="text" class="form-control" id="contact" name = "contact_number" pattern = "[0-9]{11}" placeholder="09XXXXXXXXX" required></td>
						</tr>
						<tr>
							<td align="right" class="col-md-4"><label> E-mail Address</label> </td>
							<td><input type="text" class="form-control" id="email_address" name = "email_address" pattern = "^([a-z0-9._]{2,}@[a-zA-Z0-9.-]{2,}\.[a-zA-Z]{2,})(\.[a-zA-Z])*$" placeholder="icsrecario@gmail.com" required/></td>
						</tr>
						<tr>
							<td align="right" class="col-md-4"><label> College Address</label> </td>
							<td><textarea class="form-control" id="college_address" name = "college_address" required></textarea></td>
						</tr>
						<tr>
							<td align="right" class="col-md-4"></br>
								<select name="user_type" class="form-control typeDropdown">
									<option value="">Select User Type</option>
									<option value="A"> Administrator </option>
									<option value="L"> Librarian </option>
									<option value="S"> Student </option>
									<option value="F"> Faculty </option>
								</select> 
							</td>
							<td>
							</td>
						</tr>
						<tr id="student_number">
							<td align="right" class="col-md-4"><label> Student No.</label> </td>
							<td><input type="text" class="form-control"  id="student_number" name="student_number" pattern = "^[0-9]{4}[-]{1}[0-9]{5}$"/></br></td>
						</tr>
						<tr id="employee_number">
							<td align="right" class="col-md-4"><label> Employee No.</label> </td>
							<td><input type="text" class="form-control" name="employee_number" pattern="[0-9]{9}"/></td>
						</tr>
						<tr class="collegeSet">
							<td align="right" class="col-md-4"><label>College</label> </td>
							<td>
								<select name="college" class="form-control collegeDropdown">
									<option value="">Select College</option>
									<option value="CA"> Cgriculture </option>
									<option value="CAS"> CAS </option>
									<option value="CA-CAS"> CA - CAS</option>
									<option value="CDC"> CDC </option>
									<option value="CEM"> CEM </option>
									<option value="CEAT"> CEAT </option>
									<option value="CFNR"> CFNR </option>
									<option value="CHE"> CHE </option>
									<option value="CVM"> CVM </option>
									<option value="GS"> GS </option>
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
					</table>
			
				   <!--/div-->				
			   
	        </div>
		        <div class="modal-footer">
		          <input class="btn btn-primary" type="submit" name="submit"/>
		        </div>
	        </form> <!-- END OF FORM -->
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
		  
				<table class="table table-bordered" id="announ1">
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
<?=$this->load->view("includes/footer")?>	

 

  