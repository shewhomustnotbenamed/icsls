<?=$this->load->view("includes/header")?>
<div id="content">

	
<?php 
	//prompts the User that he/she can still reserve a book (if the Waitlist button was clicked)
	if($this->session->userdata('canReserve') == true && $flag == 0){
		?>
		<div id="warning_top">
		<?php
		echo "This book is still available. Do you want to reserve it?";?>
		<?php echo '<form method="get" accept-charset="utf-8" action="'?><?php echo base_url('index.php/search/transaction'); ?><?php echo '">';?>
		
		<?php echo '<input type="submit" name="reserve" id="reserve" value="Reserve"/>';
		echo '<input type="submit" name="cancel" value="Cancel"/>';
		echo '<input type="hidden" name = "id" value="' . $this->session->userdata('referenceId') . '"/>';
		echo '</form>';
	} 
	//prompts the User that he/she can still waitlist a book (if the Reserve button was clicked)
	if($this->session->userdata('canWaitlist') == true && $flag == 0){ ?>
		<div id="warning_top">
		<?php echo "This book is not available for now. Do you want to wait list?";?>
		<?php echo '<form method="get" accept-charset="utf-8" action="'?><?php echo base_url('index.php/search/transaction'); ?><?php echo '">';?>
		<?php echo '<input type="submit" name="waitlist" id="waitlist" value="Waitlist"/>';
		echo '<input type="submit" name="cancel" value="Cancel"/>';
		echo '<input type="hidden" name = "id" value="' . $this->session->userdata('referenceId') . '"/>';
		echo '</form>';
	}
	?>
</div>
		<br/>
		<br/>
			<div class="col-sm-offset-1" id="search_top">
				<form action="<?php echo base_url('index.php/search/search_rm'); ?>" method="get" accept-charset="utf-8">
				
					<input type="text" name="keyword" size = "30" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>"/>
					<input type="submit" class="btn btn-default" name="search1" value="Search"/>
					<a href="#advanceSearch"data-toggle="modal"> <input name="aSearch" class="btn btn-primary"  value="Advanced Search"/></a>
				</form>
				
			</div>
			<!-- Advance Search Form -->
			<div id="advanceSearch" class="modal fade in" role="dialog">  
<div class="modal-dialog">  
          <div class="modal-content">
            <div class="modal-header">  
              <a class="close" data-dismiss="modal">&times;</a>
            <h4>Advanced Search</h4>  
            </div><!--modal header-->
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/search/advanced_search_reference'); ?>" method="get" accept-charset="utf-8">
        <table>
          <tr>
            <td align="right"><button class="btn btn-primary"><input value="title" type="checkbox" name="projection[]" checked="true">Title:</button></td>
            <td align="right"><input type="text" class="form-control" name="title" size = "30" value="<?php if(isset($temparray) && in_array('title',$temparray)) echo $temparrayvalues[array_search('title', $temparray)]?>"><br/></td></tr>
          <tr>
          	<td align="right"><button class="btn btn-primary"><input value="author" type="checkbox" name="projection[]">Author:</button></td>
          	<td align="right"><input type="text" name="author" size = "30" class="form-control"value="<?php if(isset($temparray) && in_array('author',$temparray)) echo $temparrayvalues[array_search('author', $temparray)]?>"><br/></td></tr>
          <tr>
          	<td align="right"><button class="btn btn-primary"><input value="year_published" type="checkbox" name="projection[]">Year Published:</button></td>
          	<td align="right"><input type="text" name="year_published" class="form-control"size = "30" value="<?php if(isset($temparray) && in_array('year_published',$temparray)) echo $temparrayvalues[array_search('year_published', $temparray)]?>"><br/></td></tr>
          <tr>
          	  <td align="right"><button class="btn btn-primary"><input value="publisher" type="checkbox" name="projection[]">Publisher:</button></td>
          	<td align="right"><input type="text" name="publisher" class="form-control"size = "30" value="<?php if(isset($temparray) && in_array('publisher',$temparray)) echo $temparrayvalues[array_search('publisher', $temparray)]?>"><br/></td></tr>
          <tr>
          	  <td align="right"><button class="btn btn-primary"><input value="course_code" type="checkbox" name="projection[]" >Subject:</button></td>
          
          	<td><input type="text" name="course_code"class="form-control" size = "30" value="<?php if(isset($temparray) && in_array('course_code',$temparray)) echo $temparrayvalues[array_search('course_code', $temparray)]?>"><br/></td></tr>    <tr>
          <tr>
          	  <td align="right"><button class="btn btn-primary">Category:</button></td>
            <td align="right">
              <select class="form-control" >
                <option value="B">Book</option>
                <option value="J">Journal</option>
                <option value="T">Thesis</option>
                <option value="D">CD</option>
                <option value="C">Catalog</option>
              </select><br/>
            </td>
          </tr>
            <tr>
            <td align="left"><input type="radio" name="sort" value="sortalpha"checked="true" />Sort from A to Z</td>
            <td align="left"><input type="radio" name="sort" value="sortbeta" />Sort from Z to A</td>
          </tr> 
          <tr>
            <td align="left"><input type="radio" name="sort" value="sortyear" />Sort by year</td>
            <td align="left"><input type="radio" name="sort" value="sortauthor" />Sort by author(A-Z)</td>
          </tr> 
        </table>
        
       

              <div class="modal-footer">
                <input  class="btn btn-primary"type="submit" value="Advanced Search" />
                 </form> 
              </div> <!-- modal footer -->
            </div>
          </div>
        </div>
    </div> 
			</div>
				
			</div>
	
		<!-- displays the search results -->
		<div>			
			<div id="pagination_view"><?php 
				echo $this->pagination->create_links();
				if(!empty($rows)){
				?> </div>
				<table id = 'booktable1' class="table table-hover">
					<thead>
						<tr>
							
							<th><center>Title</center></th>
							<th>Author/s</th>
							<th>Publisher</th>
							<th>Actions</th>
							
						</tr>
					</thead>
					<tbody style = "text-align: center" >
				<?php	
				foreach($rows as $row): ?>
					<form action="<?php echo base_url('index.php/search/transaction'); ?>" method="get" accept-charset="utf-8">
					<tr>
						
					<td><?=$row->title?></td>
					<td><?=$row->author?></td>
					<td><?=$row->publisher?></td>
					<td>
					<input type="hidden" name="id" value=<?=$row->id?> />
					<?php echo anchor('search/view_reference/'.$row->id, 'View Book');?>
					<?php echo anchor('cart_controller/add_to_cart/'.$row->id, 'Add to Cart'); ?>
					<input type="submit" name="reserve" id="reserve" value="Reserve"/>
					<input type="submit" name="waitlist" id="waitlist" value="Waitlist"/>
				</td>
					
			</tr>
				</form>

			<?php endforeach; ?>
		</table>
			<?php }

			else{
				echo 'No Materials found.';
			}
			?>
			
		</div>
	
	
<?=$this->load->view("includes/footer")?>