
<?=$this->load->view("includes/header")?>
	<div id="content">
		<h3>Generate Report</h3>
		<div id="view_report">
	<?php echo form_open('librarian/view_report') ;?>
	<div id="buttonsReport">
		<select  class="btn btn-primary"name="print_by">
			<option value="daily">Daily Report</option>
			<option value="weekly">Weekly Report</option>
			<option value="monthly">Monthly Report</option>
		</select>
		<input class="btn btn-danger"type="submit">
	</div>
	</form>

</div>
</div>

<?=$this->load->view("includes/footer")?>