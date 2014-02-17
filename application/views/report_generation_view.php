
<?=$this->load->view("includes/header")?>
	<div id="content">
		<div id="view_report">
	<?php echo form_open('librarian/view_report') ;?>
		<select name="print_by">
			<option value="daily">Daily Report</option>
			<option value="weekly">Weekly Report</option>
			<option value="monthly">Monthly Report</option>
		</select>
		<input type="submit">
	</form>

</div>
</div>

<?=$this->load->view("includes/footer")?>