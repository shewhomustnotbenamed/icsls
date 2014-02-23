<?= $this->load->view('includes/header') ?>
	


	<!-- Form Searching References -->
    
<br>
<br>


<div id="content">
         <div class="col-sm-offset-1" id="search_top">

    <form action = "<?= base_url() . 'index.php/librarian/display_search_results' ?>" method = 'GET'>
      <select  class="dropdown"name = 'selectCategory'>
       <option value = 'title' <?php echo ($this->input->get('selectCategory') == 'title') ? "selected" : ""; ?>>Title</option>
       <option value = 'author' <?php echo ($this->input->get('selectCategory') == 'author') ? "selected" : ""; ?>>Author</option>
       <option value = 'isbn' <?php echo ($this->input->get('selectCategory') == 'isbn') ? "selected" : ""; ?>>ISBN</option>
       <option value = 'course_code' <?php echo ($this->input->get('selectCategory') == 'course_code') ? "selected" : ""; ?>>Course Code</option>
       <option value = 'publisher' <?php echo ($this->input->get('selectCategory') == 'publisher') ? "selected" : ""; ?>>Publisher</option>
      </select>
      
      <input type = 'text' name = 'inputText' pattern = '.{1,}' value = '<?= $this->input->get('inputText') ?>'/>
  
      <input type = 'submit' class="btn btn-primary" name = 'submit' value = 'Submit' />
      <a href="#advanceSearch"data-toggle="modal"> <input type="submit" name="aSearch" class="btn btn-primary"  value="Advanced Search"/></a>
  </div>
  		

  		 <div id="advanceSearch" class="modal fade in" role="dialog">  
<div class="modal-dialog">  
          <div class="modal-content">
            <div class="modal-header">  
              <a class="close" data-dismiss="modal">&times;</a>
            <h4>Advanced Search</h4>  
            </div><!--modal header-->
            <div class="modal-body">
                <br />
                   <label for = 'likeRadio'>Like</label>
                   <input type = 'radio' id = 'likeRadio' name = 'radioMatch' value = 'like' <?php echo ($this->input->get('radioMatch') != 'match') ? "checked" : ""; ?> />
                   <label for = 'matchRadio'>Exact Match</label>
                  <input type = 'radio' id = 'matchRadio' name = 'radioMatch' value = 'match' <?php echo ($this->input->get('radioMatch') == 'match') ? "checked" : ""; ?> />
                  <br />

              <label><strong>Sort By:</strong></label>
      <label for = 'selectSortCategory'>Category:</label>
      <select id = 'selectSortCategory' name = 'selectSortCategory'>
        <option value = 'title' <?php echo ($this->input->get('selectSortCategory') == 'title') ? "selected" : ""; ?>>Title</option>
        <option value = 'author' <?php echo ($this->input->get('selectSortCategory') == 'author') ? "selected" : ""; ?>>Author</option>
        <option value = 'category' <?php echo ($this->input->get('selectSortCategory') == 'category') ? "selected" : ""; ?>>Reference Type</option>
        <option value = 'course_code' <?php echo ($this->input->get('selectSortCategory') == 'course_code') ? "selected" : ""; ?>>Course Code</option>
        <option value = 'times_borrowed' <?php echo ($this->input->get('selectSortCategory') == 'times_borrowed') ? "selected" : ""; ?>>Number of times borrowed</option>
        <option value = 'total_stock' <?php echo ($this->input->get('selectSortCategory') == 'total_stock') ? "selected" : ""; ?>>Total stock</option>
      </select>
      <label for = 'selectOrderBy'>Order:</label>
      <select id = 'selectOrderBy' name = 'selectOrderBy'>
        <option value = 'ASC' <?php echo ($this->input->get('selectOrderBy') == 'ASC') ? "selected" : ""; ?>>Ascending</option>
        <option value = 'DESC' <?php echo ($this->input->get('selectOrderBy') == 'DESC') ? "selected" : ""; ?>>Descending</option>
      </select>

      <br />
      <label><strong>Search only: </strong></label>
      <br />
      <label for = 'selectAccessType'>Access Type: </label>
      <select id = 'selectAccessType' name = 'selectAccessType'>
        <option value = 'N' <?php echo ($this->input->get('selectAccessType') == 'N') ? "selected" : ""; ?>></option>
        <option value = 'F' <?php echo ($this->input->get('selectAccessType') == 'F') ? "selected" : ""; ?>>Faculty</option>
        <option value = 'S' <?php echo ($this->input->get('selectAccessType') == 'S') ? "selected" : ""; ?>>Student</option>
      </select>
      <br />
      <label for = 'del'>Status</label>
      <select id = 'del' name = 'checkDeletion'>
        <option value = 'N' <?php echo ($this->input->get('checkDeletion') == 'N') ? "selected" : ""; ?>></option>
        <option value = 'T' <?php echo ($this->input->get('checkDeletion') == 'T') ? "selected" : ""; ?>>To be Removed</option>
        <option value = 'F' <?php echo ($this->input->get('checkDeletion') == 'F') ? "selected" : ""; ?>>Available</option>
      </select>

      <br />
      <label for = 'selectRows'>Rows per page</label>
      <select id  = 'selectRows' name = 'selectRows'>
        <option value = '10' <?php echo ($this->input->get('selectRows') == '10') ? "selected" : ""; ?>>10</option>
        <option value = '20' <?php echo ($this->input->get('selectRows') == '20') ? "selected" : ""; ?>>20</option>
        <option value = '50' <?php echo ($this->input->get('selectRows') == '50') ? "selected" : ""; ?>>50</option>
        <option value = '100' <?php echo ($this->input->get('selectRows') == '100') ? "selected" : ""; ?>>100</option>
      </select>
      <br />
              <div class="modal-footer">
                <button class="btn btn-primary" name="search">Search</button>
              </div> <!-- modal footer -->
            </div>
          </div>
        </div>
    </div>

    </form>
    <!-- End of Form for Searching Reference -->

    <!-- Display table for references already for deletion (complete stock) -->

    <!-- END -->
 
		<!-- Display table for references not ready or not scheduled for deletion -->
		<table id = 'booktable' border = '1'></table>
		<!-- Form for displaying, deleting, and viewing searched references -->
		<?php if(isset($references) && $numResults > 0){ ?>
			<form name = "forms" action = "<?= base_url() . 'index.php/librarian/delete_reference/' ?>" method = "POST">
				<div id="paginationStyle"><?= $this->pagination->create_links() ?></div>
				<table id = 'booktable' border = "1" cellpadding = "5" cellspacing = "2">
					<thead>
						<tr>
							<th><button type = "button" class="btn btn-primary"  id = "markAll" value = "markAll" formaction="<?= base_url() . 'index.php/librarian/claim_return/' ?>" /><span class="glyphicon glyphicon-check"></span></button>
				<button type = "submit" class="btn btn-primary" value = "Delete Selected" onclick = "return confirmDelete()" /> <span class="glyphicon glyphicon-trash"></span> </button>
				<button type = "submit" class="btn btn-primary" value = "Edit Selected" formaction="<?php echo base_url('index.php/librarian/claim_return'); ?>" method="get" /> <span class="glyphicon glyphicon-edit"></span></button>
				<br /></th>
							<th>Row</th>
							<th>Course Code</th>
							<th><center>Title</center></th>
							<th>Author/s</th>
							<th>Reference Type</th>
							<th>Access Type</th>
							<th>Times Borrowed</th>
							<th>Current number</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody style = "text-align: center" >

					<?php
						$offset = $this->input->get('per_page') ? $this->input->get('per_page') : 0;
						$rowID = 1 + $offset;
						foreach($references as $r): ?>
							<tr>
								<td><center><input type = "checkbox" class = "checkbox" name = "ch[]" value = '<?= $r->id ?>'/></center></td>
								<td><?= $rowID++ ?></td>
								<td><?= $r->course_code ?></td>
								<td><?= (anchor(base_url() . 'index.php/librarian/view_reference/' . $r->id, $r->title)) ?></td>
								<td><?= ($r->author) ?></td>
								<td>
									<?php
										if($r->category == 'B')
											echo 'Book';
										else if($r->category == 'M')
											echo 'Magazine';
										else if($r->category == 'T')
											echo 'Thesis';
										else if($r->category == 'S')
											echo 'Special Problem';
										else if($r->category == 'C')
											echo 'CD/DVD';
										else if($r->category == 'J')
											echo 'Journal';
										?>
								</td>
								<td>
									<?php
										if($r->access_type == 'F')
											echo 'Faculty';
										else if($r->access_type == 'S')
											echo 'Student';
									?>
								</td>
								<td><?= $r->times_borrowed ?></td>
								<td><?= $r->total_available . ' / ' . $r->total_stock ?></td>
								<td>
									<?php
										if($r->for_deletion == 'F')
											echo 'Available';
										else if($r->for_deletion == 'T')
											echo 'To be removed';
									?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				
      				
				<div id="paginationStyle"><?= $this->pagination->create_links() ?></div>
			
			
				<?= 'Number of rows retrieved: ' . $total_rows ?>
				
			</form>
		<?php } ?>
		<!-- End of form for displaying, deleting, and viewing searched references -->
		</div>
<?= $this->load->view('includes/footer') ?>