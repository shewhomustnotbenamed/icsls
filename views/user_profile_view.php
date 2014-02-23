
<?=$this->load->view('includes/header')?>

<div id="container">

	<table id="viewResults">
	<?php
		/*displays the information of the user*/
		foreach($results as $row){?>
			<tr>
				<td align="right"><button type="button" class="btn btn-primary" >Username</button></td>
                <td align="right"><input  disabled type="text" class="form-control" value='<?php echo $row->username; ?>' /></td>
			</tr>
			<tr>
				<td align="right"><button type="button" class="btn btn-primary" >Name</button></td>
                <td align="right"><input disabled type="text" class="form-control" value='<?php echo $row->first_name." ".$row->middle_name." ".$row->last_name; ?>' /></td>
			</tr>
			<tr>
				<?php 
					if($row->student_number!=NULL){ ?>
					<td align="right"><button type="button" class="btn btn-primary" >Student Number</button></td>
                	<td align="right"><input  disabled type="text" class="form-control" value='<?php echo $row->student_number;?>' /></td>
				<?php } ?>
				<?php 
				if($row->employee_number!=NULL){?>
					
				<td align="right"><button type="button" class="btn btn-primary" >Employee Number</button></td>
                <td align="right"><input disabled type="text" class="form-control" value='<?php echo $row->employee_number;?>' /></td>
                <?php }?>
			</tr>
			<tr>
				<?php 
					if($row->user_type=='F'){ ?>
					<td align="right"><button type="button" class="btn btn-primary" >User Type</button></td>
                	<td align="right"><input  disabled type="text" class="form-control" value="Faculty" /></td>
				<?php } ?>
				<?php 
					if($row->user_type=='S'){ ?>
					<td align="right"><button type="button" class="btn btn-primary" >User Type</button></td>
                	<td align="right"><input  disabled type="text" class="form-control" value="Student" /></td>
				<?php } ?>
				<?php 
					if($row->user_type=='L'){ ?>
					<td align="right"><button type="button" class="btn btn-primary" >User Type</button></td>
                	<td align="right"><input  disabled type="text" class="form-control" value="Librarian" /></td>
				<?php } ?>
				<?php 
					if($row->user_type=='A'){ ?>
					<td align="right"><button type="button" class="btn btn-primary" >User Type</button></td>
                	<td align="right"><input  disabled type="text" class="form-control" value="Administrator" /></td>
				<?php } ?>
				
			</tr>

	<?php }?>
			<div id="edit_profile_button"><?=anchor('administrator/edit_account/'.$row->id, '<button class="btn btn-success">Edit Account</button>')?></button></tr></div>
	</table>

</div>

<?=$this->load->view('includes/footer')?>
