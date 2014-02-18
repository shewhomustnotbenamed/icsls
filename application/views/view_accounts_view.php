<!-- View Accounts Page -->

<?=$this->load->view('includes/header')?>

	<div class="col-sm-offset-1" id='search_container'>
	
		<form action='<?=base_url('index.php/administrator/search_accounts')?>' method='post'>
			<input type='text' id='search_text' name='search_text' autofocus="autofocus" value='<?=($searchText != '' ? $searchText : '')?>' required/>
			
			<select class="btn btn-primary" id='category' name='category'>
				<option value='username' <?=($searchCategory == 'username' ? "selected='selected'" : '')?>>Username</option>
				<option value='student_number' <?=($searchCategory == 'student number' ? "selected='selected'" : '')?>>Student Number</option>
				<option value='employee_number' <?=($searchCategory == 'employee number' ? "selected='selected'" : '')?>>Employee Number</option>
				<option value='first_name' <?=($searchCategory == 'first name' ? "selected='selected'" : '')?>>First Name</option>
				<option value='last_name' <?=($searchCategory == 'last name' ? "selected='selected'" : '')?>>Last Name</option>
			</select>

			<input  class="btn btn-success" type='submit' name='submit' value='Search Account'/>
		</form>
	</div>
	
	<div class="col-sm-offset-1" id='category_option_container'>
		<form action='<?=base_url('index.php/administrator/view_accounts')?>' method='post'>
			Sort by:
			<input type='hidden' id='hidden_search_text' name='hidden_search_text' value='<?=$searchText?>'/>
			<input type='hidden' id='hidden_category' name='hidden_category' value='<?=$searchCategory?>'/>
			
			<select id='sort_category' class="btn btn-primary"name='sort_category' onchange='this.form.submit()'>
				<option value='last_name' <?=($sortCategory == 'last_name' ? "selected='selected'" : '')?>>Last Name</option>
				<option value='first_name' <?=($sortCategory == 'first_name' ? "selected='selected'" : '')?>>First Name</option>
				<option value='employee_number' <?=($sortCategory == 'employee_number' ? "selected='selected'" : '')?>>Employee Number</option>
				<option value='student_number' <?=($sortCategory == 'student_number' ? "selected='selected'" : '')?>>Student Number</option>
				<option value='user_type' <?=($sortCategory == 'user_type' ? "selected='selected'" : '')?>>User Type</option>
			</select>
		</form>
		<div id="buttonsAdmin">
			<button class="btn btn-primary"><?=anchor('administrator/create_account', 'Create Account')?></button>
			<button class="btn btn-primary"><?=anchor('administrator/view_accounts/', 'View All Accounts')?></button>
		</div>
	</div>

	<div id='search_result_container'>
		<?php if($searchText){ ?>
			Found <?=$accountCount?> with <?=$searchCategory?> '<?=$searchText?>'.
		<?php }else{ ?>
			Found <?=$accountCount?> user accounts.
		<?php } ?>
		
		<?php if($accountCount > 0) { ?>
			    <div id="paginationStyle"><?= $this->pagination->create_links() ?></div>

			<table id="admin_results" border = "1" cellpadding = "5" cellspacing = "2">
				<thead>
					<!-- Creates a checkbox which when clicked, will toggle all existing checkboxes to the same state as this checkbox (Select/Deselect All) using the Javascript function, toggle(). -->
					<th><input type='checkbox' name='selectAll' onClick="toggle(this)"/></th>
					<th>No.</th>
					<th>Employee Number</th>
					<th>Student Number</th>
					<th>Username</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Account Type</th>
					<th>Action</th>
				</thead>
				<!-- Creates a form for deletion. If successful, it will call the view_accounts() in the administrator controller. -->
				<!-- Changelog: 2/5 Restored delete_accounts() method in administrator controller. Will now redirect to delete_accounts() instead.-->
				<form action="<?=base_url().'index.php/administrator/delete_accounts/'?>" method="post">
				<?php $i = 1; ?>
				<tbody>
					<?php foreach ($accounts as $account) : ?>
					<tr>
						<!-- Creates a checkbox which when checked, will be passed to the controller and model to delete the checked row. Value will vary depending on the account type (Employee/Student). -->
						<!--Changelog: 2/5 -Used username as value instead.-->
						<!--Changelog: 2/10 -Used row id (id) as value instead.-->
						<td><input type='checkbox' name='users[]' value="<?=$account->id?>"/></td>
						<td><?=$i++ + $offset?></td>
						<td><?=($account->employee_number != NULL ? $account->employee_number : "--")?>
						</td>
						<td ><?=($account->student_number != NULL ? $account->student_number : "--")?>
						</td>
						<td><?=$account->username?></td>
						<td ><?=$account->last_name?></td>
						<td ><?=$account->first_name?></td>
						<td ><?=$account->middle_name?></td>
						<td><?php
								if($account->user_type == 'A')
									echo "Administrator";
								else if($account->user_type == 'L')
									echo "Librarian";
								else if($account->user_type == 'F')
									echo "Faculty";
								else if($account->user_type == 'S')
									echo "Student";
							?>
						</td>
						<td>
							<!--Changelog: 2/10 -Used row id (id) for both view and edit account-->
							<?=anchor('administrator/view_user_profile/'.$account->id, '<span class="glyphicon glyphicon-new-window"></span>')?>
							<!--Changelog: 2/5 -Added a Edit Account button for edit_account() method-->
							<?=anchor('administrator/edit_account/'.$account->id, '<span class="glyphicon glyphicon-edit"></span>')?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<!-- Creates a submit button that when successful and onclick, will call the Javascript function deleteValidate(), which creates a popup informing the user of the deletion. -->
				<input type="submit" class="btn btn-danger"value="Delete Selected"  name="delete" onclick="deleteValidate()"/>
				</form>
				<?=anchor('administrator/view_user_profile/kenneth', '<button class="btn btn-success"><span class="glyphicon glyphicon-new-window"></button>')?>
			</table>
		<?php } ?>
	</div>

<?=$this->load->view('includes/footer')?>