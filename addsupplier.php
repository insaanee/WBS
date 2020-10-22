<?php require_once 'includes/header1.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Category</li>
		</ol>

		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Categories</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

							<div class="panel panel-success">
									<div class="panel-heading">	<center>All Category List</center></div>
																			
							</div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
			
							
						<form   action="" method="post">
						
						
						<div class="panel panel-primary" >
	      <div class="panel-header">
	        
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
	      </div>
	      <div class="panel-body">

	      	<div id="add-categories-messages"></div>

	        <div class="form-group">
	        	<label for="categoriesName" class="control-label">Supplier Name: </label>
	        	
				   
				      <input type="text" class="form-control"  placeholder="Categories Name" name="supname" autocomplete="off">
				
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="categoriesStatus" class=" control-label">Status: </label>

				    
				      <select class="form-control"  name="status">
				      	<option value="">..SELECT..</option>
				      	<option value="1">Available</option>
				      	<option value="0">Not Available</option>
				      </select>
				    
	        </div> <!-- /form-group-->	         	        
	      </div> <!-- /modal-body -->
		  
		  
		  </div>
	      
	      
	     
	        <input type="submit" name="addsup" class="btn btn-primary" >
			
			</form>


 <?php 
			
			if(isset($_POST["addsup"]))
			{
				$s_name = $_POST["supname"];
				$s_status = $_POST["status"];
				
				
					$sql = "INSERT INTO `supplier`
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
														
													}
				
				
			}
			?>

			
				
					
				 <!-- /div-action -->				
				
				

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->


<!-- add categories -->
<!-- /modal-dailog -->
</div> 
<!-- /add categories -->


<!-- /categories brand -->

<!-- categories brand -->



<script src="custom/js/categories.js"></script>

<?php require_once 'includes/footer1.php'; ?>