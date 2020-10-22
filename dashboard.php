
<?php include"includes/header1.php"; 

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="font-size:12px;">Dashboard</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				   <a href="product.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size:12px;">Total Product</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
					  
					  <?php
											
											$product_query = "SELECT * FROM product where active = 1 ";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
					  
					  
					  </div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class=""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				   <a href="orders.php?o=manord">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size:12px;">Total Order</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
											
											$product_query = "SELECT * FROM orders where order_status = 1";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class=""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				  <a href="categories.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size:12px;">Total Categories</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
											
											$product_query = "SELECT * FROM categories where categories_status = 1";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class=""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div>

          <!-- Content Row -->

          
          <!-- Content Row -->
        

        </div>
        <!-- /.container-fluid -->

     <?php include"includes/footer1.php"; ?>