<?php require_once 'includes/header.php'; ?>

<?php 

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;



$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$connect->close();

?>


					<style type="text/css">
						.ui-datepicker-calendar {
							display: none;
						}
					</style>


					
					<div class="row">
                        <div class="col-md-8">
							<div class="panel panel-info">
							  <div class="panel-heading"><center>  Welcome To Dashboard
							  </center>
							  </div>
							</div>
							<hr/>
						</div>
						
						<div class="col-md-4">
						<div class="panel panel-info">
							  <div class="panel-heading"><center>  Logged in as: &nbsp &nbsp 
							 
							<?php 
							if($_SESSION['userId']==1)
							{
								?>
								
								<span class="badge">
							  Admin
							  </span>
								<?php
							}
							
							else
								{
								?>
								
								<span class="badge">
							  Manager
							  </span>
								<?php
							}
							
								
                            ?>
							 
							  
							  
							  </center>
							  </div>
							</div>
							<hr/>
						</div>
						
						
						
				    </div>
							  
							  
							  
							  
							  <div class="row">
									<div class="col-md-12">
									
											<div class="col-md-4">
												
											<div class="card">	
												
																
												<img src="image/admin.png" style="height:205px; margin: 0 auto;">
													
												
											</div>	
											</div>
											
											<div class="col-md-8">
													
													<div class="col-md-6">
																	<div class="panel panel-info">
																		<div class="panel-heading">
																			<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
																				Total Orders
																				<span class="badge pull pull-right"><?php echo $countOrder; ?></span>
																			</a>
																				
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																</div>
																
													<div class="col-md-6">
																	<div class="panel panel-info">
																		<div class="panel-heading">
																			<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
																				Total Products
																				<span class="badge pull pull-right"><?php echo $countProduct; ?></span>
																			</a>
																				
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																</div>
																
																
																
																
																
																
																<div class="col-md-6">
																	<div class="panel panel-danger">
																		<div class="panel-heading">
																			<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
																				Low stock
																				<span class="badge pull pull-right"><?php echo $countLowStock; ?></span>
																			</a>
																				
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																</div>
																
													<div class="col-md-6">
																	<div class="panel panel-info">
																		<div class="panel-heading">
																			<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
																				Total Brands
																				<span class="badge pull pull-right"><?php echo $countOrder; ?></span>
																			</a>
																				
																		</div> <!--/panel-hdeaing close............... -->
																	</div> <!--/panel close...............................-->
																</div>
																
																
																<div class="col-md-12">
																	<div class="card">
																			  <div class="cardHeader">
																				<h1><?php echo date('d'); ?></h1>
																			  </div>

																			  <div class="cardContainer">
																				<p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
																			  </div>
																		</div> 
																	<br/>

																			  <!--/panel close...............................-->
																</div>
																
													
																	
																			 
											
											
											
											
											<div class="col-md-12">
											
											<div class="panel panel-default">
																		
																	</div>
											
											
											</div>
											
											
											
											
											</div>
									</div>
							  
							  
							  </div>
							  
							  
							  
							 


<!-- fullCalendar 2.2.5 
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>
-->

<!-- fullCalendar 2.2.5 
<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script> 



-->




      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Asia', 'Europe'],
               ['2012',  900,      390],
               ['<?php echo $countOrder; ?>',  1000,      400],
               ['2014',  1170,      440],
               ['2015',  1250,       480],
               ['2016',  1530,      540]
            ]);

            var options = {title: 'Population (in millions)'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('calendar'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>


																																																																																																				

    

<?php require_once 'includes/footer.php'; ?>