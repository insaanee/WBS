<?php require_once 'includes/header1.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Supplier</li>
		</ol>

		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Supplier</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

							<div class="panel panel-success">
									<div class="panel-heading">	<center>All Supplier List</center></div>
																			
							</div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
						
																				
																	<?php
				if($_SESSION['type'] == 1)
							
							{
							?>
							<a href="addsupplier.php" class="btn btn-primary" style="float:right;">   Add supplier  </a>
							
								
																		<?php
							}
							
							?>		
				
					
				</div> <!-- /div-action -->				
				
				<table class="table table-striped "  >
					<thead>
						<tr>

							<th>SL</th>						
							<th>Supplier Name</th>
							<th>Status</th>
																				<?php
				if($_SESSION['type'] == 1)
							
							{
							?>
							<th>Action</th>
					<?php
							}
							
							?>		
							
						</tr>
						
						<?php 
							
$sl = 0;

							$product_query = "select * from  supplier ";
							$run_query = mysqli_query($connect,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id = $row['id'];
											
											$name = $row['name'];
											
											$status = $row['status'];
											
											?>
						
						<tr>  
						<td> <?php echo $sl ;?>  </td>
						<td> <?php echo $name ;?>  </td>
						
						<td><?php 
											
										if($status == 1)
											
											{
												echo "<a class='btn btn-success' style='color:black;'>Avialable</a>";
											}
											if($status == 0)
											
											{
												echo "Unavialable";
											}



											?></td>
											
											
																							<?php
				if($_SESSION['type'] == 1)
							
							{
							?>	
											
											<td> <a href="insertpro.php?sup_del_id=<?php echo $id ;?> " class="btn btn-danger" > Delete </a>  </td>
									
																		<?php
							}
							
							?>
						</tr>
						
						
						
						<?php
						
										}
							}
						?>
				
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
			
			
			<?php 
			if(isset($_GET["id"]))
			{
				$did = $_GET["id"];
				
				$product_query = "Delete * from  supplier  where id = '$did' ";
							$run_query = mysqli_query($connect,$product_query);
							if($run_query)
							{
								echo "
															<div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Supplierr is deleted !</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="suplier.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														
													}
				
			}
			
			?>
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->


<!-- add categories -->
<div class="modal fade" id="addCategoriesModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal"  action="" method="post">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-categories-messages"></div>

	        <div class="form-group">
	        	<label for="categoriesName" class="col-sm-4 control-label">Supplier Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control"  placeholder="Categories Name" name="supname" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="categoriesStatus" class="col-sm-4 control-label">Status: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <select class="form-control"  name="status">
				      	<option value="">..SELECT..</option>
				      	<option value="1">Available</option>
				      	<option value="2">Not Available</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	         	        
	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" name="addsup" class="btn btn-primary" > <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
			
			</form>
			
			
			 <?php 
			
			if(isset($_POST["addsup"]))
			{
				$s_name = $_POST["supname"];
				$s_status = $_POST["status"];
				
				
					$sql = "INSERT INTO ` supplier`
													(`name`,`status`) 
													VALUES ('$s_name','$s_status')";
													if (mysqli_query($connect,$sql)) {
														echo "
															<div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Supplier is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="supplier.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
				
				
			}
			?>
			
			
			
			
			
	      </div> <!-- /modal-footer -->	  


			
     	 <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add categories -->


<!-- edit categories brand -->
<div class="modal fade" id="editCategoriesModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editCategoriesForm" action="php_action/editCategories.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Category</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-categories-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-categories-result">
		      	<div class="form-group">
		        	<label for="editCategoriesName" class="col-sm-4 control-label">Categories Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editCategoriesName" placeholder="Categories Name" name="editCategoriesName" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		        <div class="form-group">
		        	<label for="editCategoriesStatus" class="col-sm-4 control-label">Status: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <select class="form-control" id="editCategoriesStatus" name="editCategoriesStatus">
					      	<option value="">..SELECT..</option>
					      	<option value="1">Available</option>
					      	<option value="2">Not Available</option>
					      </select>
					    </div>
		        </div> <!-- /form-group-->	 
		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editCategoriesFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editCategoriesBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
		 
		 
		 
		
		 
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- /categories brand -->

<!-- categories brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeCategoriesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove </h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeCategoriesFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeCategoriesBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /categories brand -->


<script src="custom/js/categories.js"></script>

<?php require_once 'includes/footer1.php'; ?>