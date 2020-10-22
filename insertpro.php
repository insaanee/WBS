<?php 
require_once 'php_action/db_connect.php';



			if (isset($_POST["submit1"])) {
											$a = $_POST["name"];
											$b = $_POST["sal"];
											$c = $_POST["desg"];
											$d = $_POST["email"];
											$e = $_POST["mobile"];
											$f = $_POST["address"];
											$g = $_POST["status"];
											
											
											$sql = "INSERT INTO `hr_table`
													(`employe_name`, `employe_designation`, `salary`, `email`, `mobile`, `Address`, `status`) 
													VALUES ('$a','$c','$b','$d','$e','$f','$g')";
													if (mysqli_query($connect,$sql)) {
														echo "
															<div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your member is Added Successfully..!</b>
															</div></center>
														";
														
														
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
														exit();
													}
											
											
											
										}
										
										
										
										
											if (isset($_POST["cate"])) {
											$a = $_POST["catname"];
											$b = $_POST["status"];
											
											
											$sql = "INSERT INTO `categories`
													(`cat_title`, `status`) 
													VALUES ('$a','$b')";
													if (mysqli_query($connect,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product Category is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="addcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										
										
			if (isset($_GET["did"])) {
											$prodid= $_GET["did"];
											
											$sql = "DELETE FROM hr_table WHERE id = '$prodid' ";
													if (mysqli_query($connect,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your member is deletedSuccessfully..!</b>
															</div></center>
														";
														
														
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
														exit();
													}
											
											
											
										}
										
										
									




										if (isset($_GET["sup_del_id"])) {
											$sup_del_id= $_GET["sup_del_id"];
											
											$sql = "DELETE FROM supplier WHERE id = '$sup_del_id' ";
													if (mysqli_query($connect,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Supplier is deletedSuccessfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="supplier.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
																	
			if (isset($_POST["catdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM categories WHERE cat_id = '$prodid' ";
													if (mysqli_query($connect,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="category.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										if (isset($_POST["orderdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM orders WHERE order_id = '$prodid' ";
													if (mysqli_query($connect,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product Order is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="view_order.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
                                        ?>
										
										
										
										
										
										