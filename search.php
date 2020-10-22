<?php require_once 'php_action/db_connect.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Super Shop</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">	

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
</head>
	<style>
	body{
	background-image:url(image/bg3.jpg);
	background-size:cover;
	}
	.mybody{
		
		min-height:700px;
		
	}
	.logpanel{
		
		height:400px;
		width:600px;
		background-color:#dbdbdb;
		z-index:-100;
		top:400px;
		
	}
	
	

 img{
 position:relative;
   z-index:1;
}
.overlay p{ 
    text-align: center;
    margin-top: 20%;
}
.overlay{
 position: absolute;
    z-index: 2;
    top: 100;
    opacity: 0;
    color: #fff;
    width: 100%;
    height: 100%;
    transition: .5s ease;
    background-color: #2cbdec;
}
.mybody:hover .overlay{
 opacity:0.8;
}
	
	</style>
<body>
	<div class="container-fullid">
		<div class="row">
			<div class="col-md-12">
					<div class="card">
						  <div class="cardHeader">
							
							<h2><image src="image/sslogo.png" style="height:50px;width:70px;"> Super Shop Management System</h2>
						  </div>	 
					</div> 
				<div class="panel panel-primary">
					<div class="panel-heading" style="color:#fff;">
						<center> <h3 class="panel-title"><a href="login1.php"> <i class="glyphicon glyphicon-user"></i> &nbsp;  User login  </a>&nbsp ||&nbsp <a href="dashboard.php"> <i class="glyphicon glyphicon-user"></i> &nbsp;  Admin login  </a> ||&nbsp <a href="index.php">  &nbsp; Home </a></h3> </center>
					</div>
					<div class="panel-body mybody">
					
					       <center> <h2>  Search Product </h2> </center> <hr/>
						   
						   <div class="row">
						   
						  
						    <div class="col-md-6">
									<form action="" method="post">
								<div class="form-group">
								<label> Search by product name </label>
								  <input type="text" name="name" class="form-control">
								</div> 
								
								<div class="form-group">
								
								  <input type="submit" name="search" value="Search" class="btn btn-primary form-control">
								</div> 
								  
								
								</form>
						   
							
							</div>
						     <div class="col-md-6">
							 
							 
							 <form action="" method="post">
								<div class="form-group">
								<label> Search by product category </label>
								 <select name="cat" class="form-control">
								 
								 
								 <?php
								 
								 $sql = "select * from  categories where categories_status = 1 ";
							$run_query = mysqli_query($connect,$sql);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											$categories_id = $row['categories_id'];
											$categories_name = $row['categories_name'];
								 ?>
								  <option value="<?php echo $categories_id;?>" class="form-control"><?php echo $categories_name;?></option>
							<?php }}  ?> 
								</select>
								</div> 
								
								<div class="form-group">
								
								  <input type="submit" name="catsearch" value="Search" class="btn btn-primary form-control">
								</div> 
								  
								
								</form>
							 
							 
						   </div>   
						   
						   </div>
					<!-- panel-body -->
					
					
					
					<div class="row">
					
					    <?php
						if(isset($_POST["search"])){
							
							$sname = $_POST["name"];
							
							
							$sql = "select * from product where product_name LIKE '%$sname%' ";
							$run_query = mysqli_query($connect,$sql);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											
											$id = $row['product_id'];
											
											$product_name = $row['product_name'];
											$product_image = $row['product_image'];
											$quantity = $row['quantity'];
											$rate = $row['rate'];
										?>
										<div class="col-md-3">
										<img src="images/<?php echo $product_image;?>" style="height:150px;width:100%;">
										<center> <h2> <?php echo $product_name;?> </h2> 
										
										Price: BDT <?php echo $rate;?>/- <br/>
										Quantity: <?php echo $quantity;?> ,<br/>
										<?php if($quantity >0){ ?> <center> <h3 style="color:green;"> Available </h3> </center> <?php }?>
												
										<?php if($quantity<=0){ ?> <center> <h3 style="color:red;">Unavailable </h3> </center> <?php }?>


                                          								
										</div>
										
										<?php
										}
										
							}
						}
						
						
						
						
						
						
						
						if(isset($_POST["catsearch"])){
							
							$cat = $_POST["cat"];
							
							
							$sql = "select * from product where categories_id =  '$cat' ";
							$run_query = mysqli_query($connect,$sql);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											
											$id = $row['product_id'];
											
											$product_name = $row['product_name'];
											$product_image = $row['product_image'];
											$quantity = $row['quantity'];
											$rate = $row['rate'];
										?>
										<div class="col-md-3">
										<img src="images/<?php echo $product_image;?>" style="height:150px;width:100%;">
										<center> <h2> <?php echo $product_name;?> </h2> 
										
										Price: BDT <?php echo $rate;?>/- <br/>
										Quantity: <?php echo $quantity;?> ,<br/>
										<?php if($quantity >0){ ?> <center> <h3 style="color:green;"> Available </h3> </center> <?php }?>
												
										<?php if($quantity<=0){ ?> <center> <h3 style="color:red;">Unavailable </h3> </center> <?php }?>


                                          								
										</div>
										
										<?php
										}
										
							}
						}
						
						
						
						
						
						?>
						
				
					
					</div>
					
				</div>
				<!-- /panel -->
				<div class="panel panel-primary">
						<div class="panel-heading" style="color:#fff; margin-top: -21px;">
						<center>Copyright&nbsp;@Service Solution BD <br/>
						Developed For Service Solution BD </center>
						</div>
					</div>
					
				
				
					
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	
</body>
</html>







	