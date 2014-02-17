<!-- Administrator Home Page -->

<?=$this->load->view('includes/header')?>

	<?php if(isset($notification_message)){echo '<script> alert("You successfully created the account") </script>';} ?>

<?=$this->load->view('includes/footer')?>