<?php $this->load->view('includes/header') ?>
     
		<h3>Add References</h3>
        <div id="alertmessage"class="alert alert-success"><?=$message?></a></div>
        <div id="addReferenceForm">
            
            <?= form_open('librarian/add_reference/'); ?>
            <table class="col-lg-9">
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Title</button></td>
                        <td align="right"> <input name="title" class="form-control"type="text" id="inputNum" required> </td>
                </tr>
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Author</button></td>
                        <td align="right"> <input name="author" class="form-control"type="text" id="inputAuthor" required> </td>
                </tr>
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">ISBN</button></td>
                        <td align="right"> <input name="isbn" class="form-control"type="text" id="inputISBN" > </td>
                </tr>
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Category</button></td>
                        <td align="right"> <select class="form-control"name="category" id="inputCategory" required>
                            <option value="B" selected>Book</option>
                            <option value="M">Magazine</option>
                            <option value="T">Thesis</option>
                             <option value="S">Special Problem</option>
                        <option value="C">CD/DVD</option>
                        <option value="J">Journal</option>
                </select>  </td>
                </tr>
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Description</button></td>
                        <td align="right"> <textarea name="description"  row="4" cols="50" class="form-control" id="inputDesc" > </textarea></td>
                </tr>
                
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Publisher</button></td>
                        <td align="right"> <input name="publisher" class="form-control"type="text" id="inputPublisher" > </td>
                </tr>                             
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Publication Year</button></td>
                        <td align="right"> <input name="year" class="form-control"type="number"min="1900" max="2014" id="inputYear" > </td>
                </tr>
                <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Access Type</button></td>
                        <td align="right"> <input name="access_type" class="form-control"type="text" id="inputAccess" > </td>
                </tr>
               <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Course Code</button></td>
                        <td align="right"> <input name="course_code" class="form-control"type="text" id="inputCoursecode" > </td>
                </tr>
                 <tr>
                        <td align="right"><button type="button" class="btn btn-primary">Total Stock</button></td>
                        <td align="right"> <input name="total_stock" class="form-control"type="text" id="inputTotalSt" min="1" required > </td>
                </tr>
                
            </table>
             <input id="button_ref" class="btn btn-success"type="submit"name="submit" value="Submit">              
            <?= form_close(); ?>
           <td><a href="<?= site_url('librarian/index') ?>"><button class="btn btn-danger" id="back_button">Back</button></a>
           
        </div>

<?php $this->load->view('includes/footer') ?>