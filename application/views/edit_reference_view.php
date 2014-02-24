<?php $this->load->view('includes/header') ?>
	<?php
		/* Save result from database as AssocArray '$row' */
		if($number_of_reference != 1)
			redirect('librarian');
		
			foreach ($reference_material as $row){}
			/*Session start*/
			session_start();
			$_SESSION['id'] = $row->id;
	?>	
		<form name="edit_form" action="<?= base_url() . 'index.php/librarian/edit_reference/' . $row->id ?>" method="POST">
			
				<h3>Edit Reference Form</h3>
				<span>required fields *</span><br/><br/>
			 <div id="addReferenceForm">
					<table class="col-lg-9">
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Title</button></td>
                        <td align="right"> <input type="text"  class="form-control" id="title" name="title" pattern="^.*[A-Za-z0-9]{1,}.*$" onblur="validate_title()" value="<?php echo $row->title; ?>" required/> </td>
                </tr>
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Author</button></td>
                        <td align="right"> <input type="text"  class="form-control" id="author" name="author" pattern="^[a-zA-Z\ ][a-zA-Z\ \.\,]*$" value="<?php echo $row->author;  ?>" onblur='validate_author()' required/></td>
                </tr>
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">ISBN</button></td>
                        <td align="right"> <input type="text"  class="form-control" id="isbn" name="isbn" pattern="^[0-9][0-9\-]{11}[0-9]$" value="<?php echo $row->isbn; ?>" onblur="validate_isbn()"/> </td>
                </tr>
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Category</button></td>
                        <td align="right"> <select name="category" class="form-control" id="category">
									<option value="M" <?php echo ($row->category == "M")? "selected":""; ?>>Magazine</option>
									<option value="T" <?php echo ($row->category == "T")? "selected":""; ?>>Thesis</option>
									<option value="S" <?php echo ($row->category == "S")? "selected":""; ?>>Special Problem</option>
									<option value="B" <?php echo ($row->category == "B")? "selected":""; ?>>Book</option>
									<option value="C" <?php echo ($row->category == "C")? "selected":""; ?>>CD/DVD</option>
									<option value="J" <?php echo ($row->category == "J")? "selected":""; ?>>Journal</option>	
						</select></td>
                </tr>
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Description</button></td>
                        <td align="right"> <textarea id="description" row="4" cols="50" name="description" pattern="^.*[A-Za-z0-9]{1,}.*$" onblur="validate_description()"><?php echo $row->description; ?></textarea><br/></td>
                </tr>
                
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Publisher</button></td>
                        <input type="text" id="publisher" name="publisher" pattern="^.*[A-Za-z0-9]{1,}.*$" value="<?php echo $row->publisher; ?>" onblur="validate_publisher()"/>
                </tr>                             
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Publication Year</button></td>
                        <td align="right"> <input type="text" id="publication_year" name="publication_year" pattern="^[0-9][0-9][0-9][0-9]$" value="<?php echo $row->publication_year; ?>" onblur="validate_publication_year()"/><br/></td>
                </tr>
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Access Type</button></td>
                        <td align="right"><select name="access_type"  id="access_type">
									<option value="F" <?php echo ($row->access_type == "F")? "selected":""; ?>>Faculty</option>
									<option value="S" <?php echo ($row->access_type == "S")? "selected":""; ?>>Student</option>	
						</select></td>
                </tr>
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Course Code</button></td>
                        <td align="right"> <input type="text" id="course_code" name="course_code" pattern="^[A-Z][A-Z0-9]{0,4}[0-9]$" value="<?php echo $row->course_code; ?>" onblur="validate_course_code()" required/></td>
                </tr>
                 <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Total Stock</button></td>
                        <td align="right"><input type="number" min='0' id="total_stock" name="total_stock" onchange="validate_total_stock()" value="<?php echo $row->total_stock; ?>"/></td>
						<td align="right"><input type='hidden' id="total_available" value="<?php echo $row->total_available; ?>"/> </td>
                </tr>
            </table>
			<input id="button_ref" class="btn btn-success"type="submit"name="submit" value="Submit">    
		</div>	

		</form>
<?= $this->load->view("includes/footer.php") ?>	