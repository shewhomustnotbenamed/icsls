
<?=$this->load->view('includes/header')?>

<div id="container">
	<?php
		/*displays the information of the user*/
		foreach($results as $row){
			echo $row->username. "<br>";
			echo $row->first_name." ".$row->middle_name." ".$row->last_name."<br>";
			if($row->student_number!=NULL) echo $row->student_number."<br>";
			if($row->employee_number!=NULL) echo $row->employee_number."<br>";
			if($row->user_type=='F') echo "Faculty<br>";
			else if($row->user_type=='S') echo "Student<br>";
			else if($row->user_type=='L') echo "Librarian<br>";
			else if ($row->user_type=='A') echo "Admininstrator<br>";
			if($row->college!=NULL) echo $row->college. "<br>";
			if($row->degree!=NULL) echo $row->degree. "<br>";
			echo $row->college_address."<br>";
			echo $row->email_address."<br>";
			echo $row->contact_number."<br>";
		}	
	?>
	<?=anchor('administrator/edit_account/'.$row->id, 'Edit Account')?>
	
</div>

<?=$this->load->view('includes/footer')?>
