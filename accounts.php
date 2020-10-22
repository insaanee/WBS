<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header1.php'; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2> Accounts </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
				
	
			
            </div>
            <!-- /.row -->
			
			
			
			 <div class="row">
			 <br/>
                <div class="col-md-12">
				
				<div class="panel-primary">
							<div class="panel-heading">
							<b> Profit from selling </b>
						    </div>
							<div class="panel-body">
                		
								
							<table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Item image</th>
        <th>Item name</th>
		<th>Quantity</th>
		<th>Total Cost</th>
		<th>Selling Prize </th>
		
		<th>Profit</th>
		
		
      </tr>
    </thead>
    <tbody>

							<?php 
							
                            $product_query1 = "select * from order_item  ";
							$run_query1 = mysqli_query($connect,$product_query1);
							if(mysqli_num_rows($run_query1) > 0){
	$sl =0;

		$netprofit= 0;
										while($row1 = mysqli_fetch_array($run_query1)){
											$sl++;
											$pproduct_id = $row1['product_id'];
											
											$pquantity = $row1['quantity'];
											
											
											
											
											

							
							$product_query = "select * from product where product_id = '$pproduct_id'  ";
							$run_query = mysqli_query($connect,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											
											$product_image = $row['product_image'];
											
											$product_title = $row['product_name'];
											
											$product_cost = $row['pro_cost'];
											
											
											$product_price = $row['rate'];
											$profit = ( $product_price - $product_cost ) * $pquantity;
											$netprofit = $netprofit + $profit;
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><img src="image/<?php echo $product_image; ?>" style="height:50px;width:70px;"/></td>
											<td><?php echo $product_title; ?></td>
											<td><?php echo $pquantity; ?></td>
											<td><?php echo $product_cost; ?></td>
											<td><?php echo $product_price; ?></td>
											<td><?php echo $profit; ?></td>
											
											
											
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							
							
							
							
							
							
							
										}
										
										
							}
							?>
				
					
					 </tbody>
  </table>
    <center> <h3> <b> Net profit:<?php echo $netprofit; ?> TK <b> </h3> </center>
                </div>
				 </div>
				  </div>
				
                <!-- /.col-lg-12 -->
            </div>
			
			
			
		
			
			
			
			
			
			 <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Cost', 'profit'],
               ['2012',  900,      390],
               ['455',  1000,      400],
               ['2014',  1170,      440],
               ['2015',  1250,       480],
               ['2016',  1530,      540]
            ]);

            var options = {title: 'Salling rate (monthly)'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('calendar'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>

			
			



<?php require_once 'includes/footer1.php'; ?>