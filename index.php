

<!DOCTYPE html>
<html>
<head>
	<title>Management System</title>

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
	background-image:url(image/sslogo.jpg);
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
							
							<h2 style="color:black;"><image src="image/sslogo.png" style="height:50px;width:70px;"> Wholesale Buying & Selling System</h2>
						  </div>	 
					</div> 
				<div class="panel panel-primary">
					<div class="panel-heading" style="color:#fff;">
						<center> <h3 class="panel-title"><a href="login1.php"> <i class="glyphicon glyphicon-user"></i> &nbsp;  User login  </a>&nbsp ||&nbsp <a href="dashboard.php"> <i class="glyphicon glyphicon-user"></i> &nbsp;  Admin login  </a>   </h3> </center>
					</div>
					<div class="panel-body mybody">
					

						 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/2.jpg" alt="Los Angeles" style="width:100%;height:700px;">
      </div>

      <div class="item">
        <img src="image/3.jpg" alt="Chicago" style="width:100%;height:700px;">
      </div>
    
      <div class="item">
        <img src="image/1.jpg" alt="New york" style="width:100%;height:700px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

						
						
						
					</div>
					<!-- panel-body -->
					
				</div>
				<!-- /panel -->
				<div class="panel panel-primary">
						<div class="panel-heading" style="color:#fff; margin-top: -21px;">
						<center>Copyright&nbsp;@SIMEC System <br/>
						Developed By Md. Haider Ali Hridoy </center>
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







	