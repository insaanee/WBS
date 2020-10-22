<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header1.php'; ?>
 <div class="row">
                <div class="col-lg-12">
                   <center> <h2> Review </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
				
				<span style="float:right"> <a href="add_review.php"class="btn btn-default button1"  style="margin-left:15px;margin-bottom:7px"><i class="glyphicon glyphicon-plus-sign"></i> Add New </a></span>
            </div>
			
			
			
			 <div class="row">
                <div class="col-md-12">
				
				<div class="panel-primary">
							<div class="panel-heading">
							<b>Product review</b>
						    </div>
							<div class="panel-body">
                		
								
							<table class="table">
    <thead>
      <tr>
        <th>SL</th>
		 <th>Date</th>
		  <th>Product Image</th>
        <th>Product name</th>
        <th>Review</th>
		<th>By</th>
		
		<th>Action</th>
		
      </tr>
    </thead>
    <tbody>

							<?php 
							


							$product_query = "select * from review ;";
							$run_query = mysqli_query($connect,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit= 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id = $row['id'];
											
											$date = $row['date'];
											$prod_Id = $row['prod_Id'];
											$msg = $row['msg'];
				                            
											
											$username = $row['username'];
											
											
											
											$product_query1 = "select * from product where  product_id = '$prod_Id' ";
							$run_query1 = mysqli_query($connect,$product_query1);
							if(mysqli_num_rows($run_query1) > 0){
		
										while($row = mysqli_fetch_array($run_query1)){
											
											
											$product_name = $row['product_name'];
											$product_image = $row['product_image'];
											
											
										}
										
							}											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $date; ?></td>
											<td><img src="image/<?php echo $product_image;?>" style="height:100px;width:100px;"/></td>
											<td><?php echo $product_name; ?></td>
											<td><?php echo $msg; ?></td>
											<td><?php echo $username; ?></td>
											
											<td>
											<a href="?did=<?php echo $id ?>" class="btn btn-default button1">Delete</a>
											
											</td>
											
											
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>
  
  
  
  
  
  
  
  
  
  <?php 
  
  															
			if (isset($_GET["did"])) {
											$prodid= $_GET["did"];
											
											$sql = "DELETE FROM review WHERE id = '$prodid' ";
													if (mysqli_query($connect,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Review is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="review.php";
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
  
  
  
  
  
  
                </div>
				 </div>
				  </div>
				
				
                <!-- /.col-lg-12 -->
            </div>




<?php require_once 'includes/footer1.php'; ?>