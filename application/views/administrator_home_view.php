<!-- Administrator Home Page -->

<?=$this->load->view('includes/header')?>

	<?php //if(isset($notification_message)){echo '<script> alert("You successfully created the account") </script>';} ?>
<div id="content">
	<div id="carou">
      <!--  Carousel -->
      <!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
		<div id="this-carousel-id" class="carousel slide">
	        <div class="carousel-inner" id="img-car">
				<div class="item active">
			            <a href=""> <img src="<?php echo base_url('img/1.jpg');?>" alt="Image 1" />
			            <div class="carousel-caption">
						<p></p>
						<p><a href=""> &raquo;</a></p>
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
	
	<div class="link-gr">
			<a href="" target="_blank" class="link-pic" id="uplb"><div class="title-link">UPLB</div></a>
			<a href="" target="_blank" class="link-pic" id="ics"><div class="title-link">ICS</div></a>
			<a href="" target="_blank" class="link-pic" id="add"><div class="title-link">Mordor</div></a>
	</div>
	<!-- Insert contents here -->

	 
	</div>
	
<?=$this->load->view('includes/footer')?>