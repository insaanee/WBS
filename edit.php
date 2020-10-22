<?php 


if (isset($_GET["peid"])) {

     $id = $_GET["peid"];
    require_once 'php_action/db_connect.php'; 
 require_once 'includes/header1.php'; 
	   
	?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2> Employee List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
							<table class="table">
    
    <tbody>

							<?php 
							
							$product_query = "select * from hr_table where id = $id ;";
							$run_query = mysqli_query($connect,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit= 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$product_image = $row['id'];
											
											$name = $row['employe_name'];
											$destination = $row['employe_designation'];
											$salary = $row['salary'];
				                            
											$email = $row['email'];
											$mobile = $row['mobile'];
											$address = $row['Address'];
											$status = $row['status'];
											
											?>
							
							
							
							<form action="" method="post">
										
											
											<tr><td> Name </td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
											
											<tr><td> Designation </td><td><input type="text" name="dest" value="<?php echo $destination; ?>"></td></tr>
											<tr><td>Salary </td><td><input type="text" name="sal" value="<?php echo $salary; ?>"></td></tr>
											<tr><td> Email</td><td><input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
											
											<tr><td> Mobile </td><td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td></tr>
										
											<tr><td> Address </td><td><input type="text" name="address" value="<?php echo $address; ?>"></td></tr>
											
											<tr><td> Status </td><td><input type="text" name="status" value="<?php echo $status; ?>"></td></tr>
											<tr><td>  </td><td>
											
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="save" class="btn btn-success" value="Save Changes">
											
											
											
											</td>
										  </tr>
										</form>  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

  
  
                              <?php
							  
						if (isset($_POST["save"])) {

						
						$eid = $_POST["prodid"];
						
									$name = $_POST["name"];	
									$dest = $_POST["dest"];
									
									 $sal = $_POST["sal"];	
									  $email = $_POST["email"];	
									   $mobile = $_POST["mobile"];	 
									
									    $address = $_POST["address"];
										$sts = $_POST["status"];										
 
							  
							  $sql = "UPDATE hr_table SET employe_name ='$name',employe_designation ='$dest',salary ='$sal',email ='$email',mobile ='$mobile',Address ='$sts',status ='$sts'
							  WHERE id = $eid ";
										
										if(mysqli_query($connect,$sql)){
											echo "<div class='alert alert-info'>
															<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
															<b>Your Info is updated</b>
													</div>";
											
											
											?>
										
									<script type="text/javascript">
									<!--
									function Redirect() {
									window.location="hr.php";
									}
									document.write("<center>You will be redirected to main page in 2 sec.</center>");
									setTimeout('Redirect()', 2000);
									//-->
									</script>
									<?php
										}
										
										
						}
							  
							  ?>
            
                        <!-- /.panel-body -->
						
						
						
						<?php require_once 'includes/footer1.php' ; 

	
	
}





       ?>