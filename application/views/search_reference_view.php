<?= $this->load->view('includes/header_librarian_login') ?>
	


	<!-- Form Searching References -->
    






<br>
<br>


<div id="content">
         <div class="col-sm-offset-1" id="search_top">

    <form action = "<?= base_url() . 'index.php/librarian/display_search_results' ?>" method = 'GET'>
      <select  class="dropdown"name = 'selectCategory'>
        <option value = 'title'>Title</option>
        <option value = 'author'>Author</option>
        <option value = 'isbn'>ISBN</option>
        <option value = 'course_code'>Course Code</option>
        <option value = 'publisher'>Publisher</option>
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
                   <input type = 'radio' id = 'likeRadio' name = 'radioMatch' value = 'like' checked = 'checked' />
                   <label for = 'matchRadio'>Exact Match</label>
                  <input type = 'radio' id = 'matchRadio' name = 'radioMatch' value = 'match' />
                  <br />

              <label><strong>Sort By:</strong></label>
      <label for = 'selectSortCategory'>Category:</label>
      <select id = 'selectSortCategory' name = 'selectSortCategory'>
        <option value = 'title'>Title</option>
        <option value = 'author'>Author</option>
        <option value = 'category'>Reference Type</option>
        <option value = 'course_code'>Course Code</option>
        <option value = 'times_borrowed'>Number of times borrowed</option>
        <option value = 'total_stock'>Total stock</option>
      </select>
      <label for = 'selectOrderBy'>Order:</label>
      <select id = 'selectOrderBy' name = 'selectOrderBy'>
        <option value = 'ASC'>Ascending</option>
        <option value = 'DESC'>Descending</option>
      </select>

      <br />
      <label><strong>Search only: </strong></label>
      <br />
      <label for = 'selectAccessType'>Access Type: </label>
      <select id = 'selectAccessType' name = 'selectAccessType'>
        <option value = 'N'></option>
        <option value = 'F'>Faculty</option>
        <option value = 'S'>Student</option>
      </select>
      <br />
      <label for = 'del'>Status</label>
      <select id = 'del' name = 'checkDeletion'>
        <option value = 'N'></option>
        <option value = 'T'>To be Removed</option>
        <option value = 'F'>Available</option>
      </select>

      <br />
      <label for = 'selectRows'>Rows per page</label>
      <select id  = 'selectRows' name = 'selectRows'>
        <option value = '10'>10</option>
        <option value = '20'>20</option>
        <option value = '50'>50</option>
        <option value = '100'>100</option>
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
				<button type = "button" id = "markAll" value = "markAll">Mark All</button>
				<input type = "submit" value = "Delete Selected" onclick = "return confirmDelete()" />
				<br />
				<center><?= $this->pagination->create_links() ?></center>
				<table id = 'booktable' border = "1" cellpadding = "5" cellspacing = "2">
					<thead>
						<tr>
							<th></th>
							<th>Row</th>
							<th>Course Code</th>
							<th>Title</th>
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
								<td><input type = "checkbox" class = "checkbox" name = "ch[]" value = '<?= $r->id ?>'/></td>
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
				
      				
				<center><?= $this->pagination->create_links() ?></center>
			
			
				<?= 'Number of rows retrieved: ' . $total_rows ?>
				
			</form>
		<?php } ?>
		<!-- End of form for displaying, deleting, and viewing searched references -->
		</div>
<?= $this->load->view('includes/footer') ?>