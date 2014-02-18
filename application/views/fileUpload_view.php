<?php $this->load->view('includes/header'); ?>
	<div id="content">
		<h3>Upload a File</h3>
        <div id="fileUploadForm">
			<?= form_open_multipart('librarian/file_upload');?>  
				<label for="csvfile">Upload a .csv file only</label>
				<br/>
				<input type="file" name="csvfile" value="" placeholder="" required>
				<br/> 
				<input type="submit" class="btn btn-primary" value="Upload" name="upload">
			<?= form_close(); ?>
        </div>
		<a href="<?= site_url('librarian/index') ?>"><button class="btn btn-danger" id="back_button1">Back</button></a>
	</div>
<?php $this->load->view('includes/footer'); ?>