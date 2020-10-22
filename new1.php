  <?php require_once 'includes/header.php'; ?> 


   



	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-left">        

      	<li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>  Dashboard</a></li>        
        
        <li id="navBrand"><a href="brand.php"><i class="glyphicon glyphicon-btc"></i>  Brand</a></li>        

        <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i> Category</a></li>        

        <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-ruble"></i> Product </a></li>     

        <li class="dropdown" id="navOrder">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-shopping-cart"></i> Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Add Orders</a></li>            
            <li id="topNavManageOrder"><a href="orders.php?o=manord"> <i class="glyphicon glyphicon-edit"></i> Manage Orders</a></li>            
          </ul>
        </li> 

        <li id="navReport"><a href="report.php"> <i class="glyphicon glyphicon-check"></i> Report </a></li>

        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>            
            <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
          </ul>
        </li>        
               
      </ul>
	  <span style="right">  <div class="topnav">
 
  <input type="text" placeholder="Search..">
</div>  </span>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>  
<div class="row">

													   <div class="col-md-4">
																	<div class="panel panel-success">
																		<div class="panel-heading">
																			
																			<a href="product.php" style="text-decoration:none;color:black;">
																				Total Product
																				<span class="badge pull pull-right">10</span>	
																			</a>
																			
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																</div> <!--/col-md-4  close here ...........................           -->
																
																
																<div class="col-md-4">
																	<div class="panel panel-info">
																		<div class="panel-heading">
																			<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
																				Total Orders
																				<span class="badge pull pull-right">3</span>
																			</a>
																				
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																</div> <!--/col-md-4  close here ...........................           -->
																
																
																
																<div class="col-md-8">
																	<div class="panel panel-danger">
																		<div class="panel-heading">
																			<a href="product.php" style="text-decoration:none;color:black;">
																				Low Stock
																				<span class="badge pull pull-right">2</span>	
																			</a>
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																	<div class="card">
																						  <div class="cardHeader">
																							<h1><?php echo date('d'); ?></h1>
																						  </div>

																						  <div class="cardContainer">
																							<p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
																						  </div>
																					</div> 
																	
																</div> <!--/col-md-4  close here ...........................           -->
																
																
																<div class="col-md-4">
																     
																					 <div class="card">
																						  <div class="cardHeader">
																							<h1><?php echo date('d'); ?></h1>
																						  </div>

																						  <div class="cardContainer">
																							<p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
																						  </div>
																					</div> 
																				<br/>

																						<div class="card">
																								  <div class="cardHeader" style="background-color:#245580;">
																									<h1>35216</h1>
																								  </div>

																								  <div class="cardContainer">
																									<p> <i class="glyphicon glyphicon-usd"></i> Total Revenue</p>
																								  </div>
																						</div> 
																			
																			

																</div>


																</div>
																<div class="col-md-4">
																	<div class="panel panel-danger">
																		<div class="panel-heading">
																			<a href="product.php" style="text-decoration:none;color:black;">
																				Low Stock
																				<span class="badge pull pull-right">2</span>	
																			</a>
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																	<div class="card">
																						  <div class="cardHeader">
																							<h1><?php echo date('d'); ?></h1>
																						  </div>

																						  <div class="cardContainer">
																							<p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
																						  </div>
																					</div> 
																	
																</div> <!--/col-md-4  close here ...........................           -->
																
																<div class="col-md-8">
																	<div class="panel panel-danger">
																		<div class="panel-heading">
																			<a href="product.php" style="text-decoration:none;color:black;">
																				Low Stock
																				<span class="badge pull pull-right">2</span>	
																			</a>
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																	<div class="card">
																						  <div class="cardHeader">
																							<h1><?php echo date('d'); ?></h1>
																						  </div>

																						  <div class="cardContainer">
																							<p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
																						  </div>
																					</div> 
																	
																</div> <!--/col-md-4  close here ...........................           -->
																
																
																
																
																
																
																
																
																
																
																
																
																
																<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign in</h3>
					</div>
					<div class="panel-body">

						<div class="messages">
							
						</div>

						<form class="form-horizontal" action="" method="post" id="loginForm">
							<fieldset>
							  <div class="form-group">
									<label for="username" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
								</div>								
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign in</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	
	
	
	<div class="container">df
			<div class="row vertical">
				<div class="col-md-5 col-md-offset-4">
					<div class="panel panel-info">
						<div class="panel-heading"><i class="glyphicon glyphicon-user"></i> &nbsp Please Sign in
						
					    </div>
						
						<div class="panel-body">
						
							<fieldset>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Username</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" />
									</div>
								</div><br/><br/>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
								</div>	<br/><br/>							
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									  <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign in</button>
									</div>
								</div>
							
							</fieldset>
						
						</div>
						
					</div>
				</div>
				
			</div>
	
	</div>
	
	
	
	
	
	
																