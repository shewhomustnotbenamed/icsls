<!--
		Description: PSEUDO REDIRECT PAGE ONLY! SHOULD REDIRECT TO USER PROFILE.
		ONCE REDIRECTED, CAN ALREADY BE DELETED IN THE 'application\views' FOLDER.	
		Author: Zinnia Kale A. Malabuyoc
		Last Modified: February 10, 2014
-->

<!DOCTYPE html>
<html>
<head>
	<title>ICS Library System | Edit User Profile</title>
</head>
	<body>
		<b><h1>Saved!</h1></b>
		<?=anchor('administrator/view_accounts', 'View All Account')?>
	</body>
<?=$this->load->view('includes/footer')?>

</html>