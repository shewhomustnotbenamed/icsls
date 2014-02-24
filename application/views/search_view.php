<?= $this->load->view('includes/header') ?>
		<br>
		<br>
		<div id="content">
         <div class="col-sm-offset-1" id="search_top">
				<form action="<?php echo base_url('index.php/search/search_rm'); ?>" method="get" accept-charset="utf-8">
				
					<input type="text" name="keyword" size = "30" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']; ?>"/>
					<input type="submit" class="btn btn-default" name="search1" value="Search"/>
					<a href="#advanceSearch"data-toggle="modal"> <input name="aSearch" class="btn btn-primary"  value="Advanced Search"/></a>
				</form>
				
			</div>
			<!-- Advance Search Form -->
		</div>	
				

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
		

	<script type="text/javascript">
	//javascript for hiding/showing the advance search form
		$(document).ready( function(){
			var i = 0;
			$('.search-hidden').hide();
			$('.search-toggle').click(function() {
			    $('.search-hidden').slideToggle();
			    if(i == 0){
					$('.search-toggle').html('Hide Advanced Search');
					i = 1;
				}else{
					 $('.search-toggle').html('Advanced Search');
					 i = 0;
				}
			});
		});
	</script>		
	</body>
</html>
	
<?=$this->load->view("includes/footer")?>