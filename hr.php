<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header1.php'; ?>
 <div class="row">
                <div class="col-lg-12">
                   <center> <h2> Employee List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
				
				<span style="float:right"> <a href="addnewemp.php"class="btn btn-default button1"  style="margin-left:15px;margin-bottom:7px"><i class="glyphicon glyphicon-plus-sign"></i> Add New </a></span>
            </div>
			
			
			
			 <div class="row">
                <div class="col-md-12">
				
				<div class="panel-primary">
							<div class="panel-heading">
							<b>Hr department </b>
						    </div>
							<div class="panel-body">
                		
								
							<table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Employee name</th>
        <th>Employe_designation</th>
		<th>Salary</th>
		<th>Email</th>
		<th>Mobile </th>
		
		<th>Address</th>
		<th>Status</th>
		<th>Action</th>
		
      </tr>
    </thead>
    <tbody>

							<?php 
							


							$product_query = "select * from hr_table ;";
							$run_query = mysqli_query($connect,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit= 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id = $row['id'];
											
											$name = $row['employe_name'];
											$destination = $row['employe_designation'];
											$salary = $row['salary'];
				                            
											$email = $row['email'];
											$mobile = $row['mobile'];
											$address = $row['Address'];
											$status = $row['status'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $destination; ?></td>
											<td><?php echo $salary; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php 
											
										if($status == 1)
											
											{
												echo "<a class='btn btn-success'>Avialable</a>";
											}
											if($status == 0)
											
											{
												echo "Unavialable";
											}



											?></td>
											<td>
											<a href="insertpro.php?did=<?php echo $id ?>" class="btn btn-default button1">Delete</a>
											<a href="edit.php?peid=<?php echo $id ?>" class="btn btn-default button1">Edit</a>
											</td>
											
											
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>
  
                </div>
				 </div>
				  </div>
				
				
                <!-- /.col-lg-12 -->
            </div>




<?php require_once 'includes/footer1.php'; ?>