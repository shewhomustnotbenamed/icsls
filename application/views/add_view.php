<?= $this->load->view('includes/header') ?>
	<div id="content">
		<div id="librarian">

			<a href="<?= site_url('librarian/add_reference') ?>">Add Reference</a>
			<a href="<?= site_url('librarian/file_upload') ?>">File Upload</a>
			<?= anchor(base_url() . 'index.php/librarian', 'Back') ?>
		</div>
	</div>
<?= $this->load->view('includes/footer') ?>