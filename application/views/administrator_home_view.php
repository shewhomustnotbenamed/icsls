<!-- Administrator Home Page -->

<?=$this->load->view('includes/header')?>

	<?php //if(isset($notification_message)){echo '<script> alert("You successfully created the account") </script>';} ?>
<div id="content">
	<div id="left">
	<div id="carou">
      <!--  Carousel -->
      <!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
		<div id="this-carousel-id" class="carousel slide">
	        <div class="carousel-inner" id="img-car">
				<div class="item active">
			            <a href=""> <img src="<?php echo base_url('img/5.jpg');?>" alt="Image 1" />
			            <div class="carousel-caption">
						<p></p>
						<p><a href=""> &raquo;</a></p>
			            </div>
					</div>
				<?php
					for($i=6;$i<9; $i++){
					echo '<div class="item">';
			            echo '<a href=""> <img src="img/'.$i.'.jpg" alt="Image 1" /></a>';
			            echo '<div class="carousel-caption">';
						echo '<p></p>';
						echo '<p><a href=""> &raquo;</a></p>';
			            echo '</div>';
					echo '</div>';
				}
				?>  
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
	</div>
	<!-- Insert contents here -->
	<div id="right">
	<div class="container" id="signin">
	
		<table class="table table-bordered" id="announ">
			<th>Announcements</th>
			<th>Date</th>
			<tr>
				<td>ITEM1</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM2</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM3</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM4</td>
				<td>00/00/00</td>
			</tr>
			<tr>
				<td>ITEM4</td>
				<td>00/00/00</td>
			</tr>
		</table>
    </div>  
	</div>
	 
	</div>
	
<?=$this->load->view('includes/footer')?>