<?php require_once 'includes/header1.php'; ?>


													<div class="row">
														<div class="col-md-12">
																	
																				<ol class="breadcrumb">
																				  <li><a href="dashboard.php">Home</a></li>		  
																				  <li class="active">Brand</li>
																				</ol>
																		
																		
																		
																	

															<div class="panel panel-info">
																<div class="panel-heading">
																	<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Brand</div>
																</div> <!-- /panel-heading -->
																<div class="panel-body">

																	
																	<!-- /table -->
																	
																	
																	
																	
																	<center> <h2>  Add new Employee </h2> <center> <hr/>
																	
																	
																	<form action="" method="post">
																	
																	<label> Username </label>
																	<input type="text" name="username" class="form-control" >
																	
																	<label> Password </label>
																	<input type="password" name="password" class="form-control" >
																	
																	<label> Access Type </label>
																	<select name="type" class="form-control">
								 
								
								  <option value="0" class="form-control">Employee </option>
								  
							
								</select>
																	
																	
																	<br/>
																	<input type="submit" name="submit" class="btn btn-primary" >
																	
																	
																	</form>
																	
																<?php
																if(isset($_POST["submit"])){
							
							$usrname = $_POST["username"];
							$password = $_POST["password"];
							$type = $_POST["type"];
							
							
							$sql = "INSERT INTO `users`
													(`username`,`password`,`type`) 
													VALUES ('$usrname','$password','$type')";
													if (mysqli_query($connect,$sql)) {
														echo "
															<div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>User is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="settings.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														
													}
						}
						





                                                                    ?>																
																	

																</div> <!-- /panel-body -->
															</div> <!-- /panel -->		
														</div> <!-- /col-md-12 -->
													</div> <!-- /row -->


<script src="custom/js/brand.js"></script>

<?php require_once 'includes/footer1.php'; ?>