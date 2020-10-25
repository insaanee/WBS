<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>



  <!-- Custom fonts for this template-->
  <link href="link/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
 
  
  	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
	
		<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
	
	
	
	
	
	
	
	 <link href="link/css/sb-admin-2.min.css" rel="stylesheet">
	
	
		<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
		
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
	

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">
  
  
   <link rel="stylesheet" href="custom/css/mystyle.css">
	
	
	
	
	
	
	
	
	
	
	

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
		<?php
						if($_SESSION['type'] == 1)
							
							{
							echo "Admin";	
							}
							else
							{
								echo "Manager";
							}
							
						
							
							?>
		</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Product
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-accusoft"></i>
          <span style="font-size:12px;">Products</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Products:</h6>
            <a class="collapse-item" href="product.php" style="font-size:12px;">Products</a>
            <a class="collapse-item" href="brand.php" style="font-size:12px;">Brand</a>
			<a class="collapse-item" href="categories.php" style="font-size:12px;">Category</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span style="font-size:12px;">Buyer</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Buyer:</h6>
            <a class="collapse-item" href="orders.php?o=add" style="font-size:12px;">Add invoice</a>
            <a class="collapse-item" href="orders.php?o=manord" style="font-size:12px;" >Manage Buyer</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Others
      </div>


    <?php
	if($_SESSION['type'] == 1){
		?>
		
	
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span style="font-size:12px;" >Accounts</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Accounts:</h6>
            <a class="collapse-item" href="accounts.php" style="font-size:12px;">View Accounts</a>
            <a class="collapse-item" href="report.php" style="font-size:12px;">report</a>

           
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="true" aria-controls="collapsePages5">
          <i class="fas fa-fw fa-folder"></i>
          <span style="font-size:12px;">Human Resource</span>
        </a>
        <div id="collapsePages5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">HR:</h6>
            <a class="collapse-item" href="hr/admin/employee.php"> Employee</a>
            <a class="collapse-item" href="hr/">Take Attendence</a>
      <a class="collapse-item" href="hr/admin/attendance.php">View Attendence</a>
      
      <a class="collapse-item" href="hr/admin/position.php">Position</a>
      <a class="collapse-item" href="hr/admin/overtime.php">Overtime</a>
      <a class="collapse-item" href="hr/admin/deduction.php">Deduction</a>
      <a class="collapse-item" href="hr/admin/cashadvance.php">Cash Advance</a>
      <a class="collapse-item" href="hr/admin/schedule_employee.php">Schedule</a>
      <a class="collapse-item" href="hr/admin/payroll.php">payroll</a>
      <a class="collapse-item" href="report.php"></a>

           
          </div>
        </div>
      </li> 
    	
	<?php }
	
	
	?>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="supplier.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="font-size:12px;">supplier</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="report.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="font-size:12px;">Report</span></a>
      </li>
	  
	  <?php
	if($_SESSION['type'] == 1){
		?>
	   <li class="nav-item">
        <a class="nav-link" href="settings.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="font-size:12px;">Add User</span></a>
      </li>
    <?php } ?>
	
	<li class="nav-item">
        <a class="nav-link" href="review.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="font-size:12px;">Review</span></a>
      </li>
	
	   <li class="nav-item">
        <a class="nav-link" href="setting.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="font-size:12px;">Settings</span></a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <b style="font-size:20px;color:blue;">Wholesale Buying & Selling System</b>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

        

           

          

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
						if($_SESSION['userId'] == 1)
							
							{
							echo "Admin";	
							}
							else
							{
								echo "Manager";
							}
							
						
							
							?></span>
               <i class="fas fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="font-size:12px;">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" style="font-size:12px;"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->