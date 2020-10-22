 <?php require_once 'includes/header1.php'; ?>
 
  
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row ">
            <div class="col-lg-10">
                <h2>Add Employee</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Hr</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Add new</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Employee info</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
										
										<form action="" method="post" >
										
										<div class="form-group row"><label class="col-sm-2 col-form-label">Product</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="name" >
													
													<?php 
													include "db.php";
											$product_query1 = "select * from product  ";
							$run_query1 = mysqli_query($connect,$product_query1);
							if(mysqli_num_rows($run_query1) > 0){
		
										while($row = mysqli_fetch_array($run_query1)){
											
											$product_id = $row['product_id'];
											$product_name = $row['product_name'];
													?>
                                                        <option value="<?php echo $product_id;?>"><?php echo $product_name;?></option>
                                                       
							<?php }  } ?>	
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Review:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <textarea type="text" name="review"class="form-control" placeholder="write ...">
														</textarea>

                                                    </div>
                                                </div>
                                            </div>
											
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="submit1" class="form-control btn btn-success" placeholder="image name"></div>
                                            </div>
						

                                            
										</form>
                                        </fieldset>
										
										
										
										<?php 
										if (isset($_POST["submit1"])) {
											$name = $_POST["name"];
											$username = $_SESSION['username'];
											
											$review = $_POST["review"];
											
											$date = date("Y-m-d");
											
											$sql = "INSERT INTO `review`
													(`prod_Id`, `username`, `msg`, `date`) 
													VALUES ('$name','$username','$review','$date')";
													if (mysqli_query($connect,$sql)) {
														echo "
															<div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your Review is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="add_review.php";
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
                                </div>
                            </div>
                    </div>
                </div>
            </div>

  
                        <!-- /.panel-body -->
						
						
						
						 <?php require_once 'includes/footer1.php'; ?>
       
