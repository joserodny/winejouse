
<?php
session_start();
	include("function/function.php");
	include("connection/conn.php");
		
?>


<!DOCTYPE>


<html>
<head>
<title> Wine Jouse </title>


<link href="styles/style.css" rel="stylesheet" media="all">
<link href="styles/bootstrap.css" rel="stylesheet" type="text/css">
<link href="styles/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="styles/bootstrap-reboot.css" rel="stylesheet" type="text/css">
<link href="styles/util.css" rel="stylesheet" type="text/css">
<link href="styles/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
 
<script src="js/test.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.12.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">





</head>

<style>
body { 
 background-color: #f0f0f0;
}
</style>
<body >



<header class="header3">







  
    <div class="navbar-header" align="center">
	
	
	
	
    
	  
	 <div class="container-menu-header-v3" >
	
	 
	 
	 
			<div class="wrap_header3 p-t-74">
			
			
		
				<!-- Logo -->
				<a href="index.php" class="logo3">
					<img style="align:right;" src="images/logo.png" alt="IMG-LOGO">
				</a>

			
				
				<!-- Header Icon -->
				
				
				<div class="header-icons3 p-t-38 p-b-60 p-l-8">
					
						
						
						<?php
				
				if(!isset($_SESSION['customer_email']))
				{
					echo "<a href='checkout.php'>Login</a>";
				}
				else
				{
					echo "<a href='logout.php'>Logout</a>";
				}
				
				?>
					

					
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="cart.php">
						Cart&nbsp;&nbsp;&nbsp;&nbsp;
						</a>
						
						
							<span class="header-icons-noti"><?php total_items(); ?></span>

						<!-- Header cart noti -->
					
					</div>
				</div>
				
				
				
				

				

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
						
						<?php   
						  if(isset($_SESSION['customer_email']))
						  {
							  echo " <span class='s-text18 w-size19 '>Welcome</span> "
							  
							  . $_SESSION['customer_email']. "";
						  }else
						  {
							  echo "welcome Guest";
						  }
							  
						?>
						<li class="sale-noti"> 
								<?php
				
								if(!isset($_SESSION['customer_email']))
								{
								echo "	<a  href='checkout.php'>My Account</a>";
								}
								
								else
								{
									echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
								}
								?>
								
							</li>
						<li>
						</li>
							<li> 
								<a  href="index.php">Home</a>
								
							</li>
							
							<li > 
								<a  href="allproduct.php">All Product</a>
							</li>

							<li>
								<a href="typered.php">Red Wine</a>
							</li>

							<li>
								<a href="typewhite.php">White Wine</a>
							</li>

							<li>
								<a href="typerose.php">Rose Wine</a>
							</li>

							<li>
								<a href="typespark.php">Sparkling Wine</a>
							</li>

							

							<li>
								<a href="contact.php">Contact</a>
								
								
							</li>
							
							
						
							
							
							
						</ul>
					</nav>
				</div>
			</div>

			<div class="bottombar flex-col-c p-b-65">
			
				<div class="bottombar-social t-center p-b-8">
				
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				
			</div>
		</div> 
	  
	  
	  
	  
	 
	
	 
	  </div> 
	
	

	
	
	


  <!-- Product end -->

  
  
  
  
  
  <!--     -------     Main Product    -------     -->
  
  
 

  

<div class="container1-page">
 <div class="jumbotron">

<section class="banner bgwhite p-t-40 p-b-40" >

			<div class="container bggrey">
			<div class="container-table-cart pos-relative bggrey">
			
			
			<div class="wrap-table-shopping-cart ">
			<form action="" method="POST" enctype="multipart/form-data">
					<table class="table-shopping-cart">
						<tbody align="center">
						<tr class="table-head">
							<th class="column-1">Remove</th>
							<th class="column-2">Product</th>
							<th class="column-3">Quantity</th>
							<th class="column-4">Total Price</th>
							
						</tr>
						
						
						
						<?php 
						
						

	$total = 0;
	global $con;
	
	$ip = getIp();
	
	$sel_price = "select * from cart where ip_add='$ip'";
	
	$run_price = mysqli_query($con, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price))
	{
		$pro_id = $p_price['p_id'];
		$pro_qty = $p_price['qty'];
		$ip_adds = $p_price['ip_add'];
		$pro_price = "select * from products where prodid='$pro_id'";
		
		$run_pro_price = mysqli_query($con, $pro_price);
		
		while($pp_price = mysqli_fetch_array($run_pro_price))
		{
			$product_price = array($pp_price['prodprice']);
			
			$product_title = $pp_price['prodname'];
			$product_image = $pp_price['prodimage'];
			$single_price = $pp_price['prodprice'];
			
			$values = array_sum($product_price);
	
			$total += $values;
						
				$totals = 	$pro_qty*$single_price;	
				
				
						?>
						
						
							

						<tr class="table-row">
							<td class="column-1">
								<input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
							</td>
							<td class="column-2">
							<img src="admin_area/product_images/<?php echo $product_image; ?>"  height="60" alt="IMG-PRODUCT">
							
							<?php echo $product_title; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x" . $pro_qty;?>
							

									
								</td>
							<td class="column-3">
					
							<div class="flex-w bo5 of-hidden w-size6" >
				<input class="size1 m-text18 t-center " type="text" name="qty"  id="qty" value="<?php if(isset($_POST['qty'])) echo $_POST['qty'] ?>"/>
								</div>
								
								
								
								
							
								
							</td>
							
							
							
							<td class="column-4">
							<?php echo "₱" . $single_price; ?>
							</td>
								
						
							
						</tr>
						
						
					<?php
								$ip = getIp();
								if(isset($_POST['update_cart']))
								{
									
								
									$qty = $_POST['qty'];
									
									$update_qty = "update cart set qty='$qty' where  p_id='$pro_id' AND ip_add='$ip'";
									
									 $insert_orders= "update orders set qty='$qty' where  p_id='$pro_id' AND ip_add='$ip'"; 
		  
		
									
									$run_qty = mysqli_multi_query($con, $update_qty);
									$run_qty = mysqli_multi_query($con, $insert_orders);
									$_SESSION['qty'] = $qty;
									
										echo "<script>window.open('cart.php','_self')</script>";
								
									
								}
								
									include('edit_delete_modal.php');
								?>	
		<?php 
		
	
		
		} 
			$checkout = ($pro_qty = $pro_qty);
				$totalcheckout = $total * $checkout;
		}

			
		?>
	
						
						<div >
				
				
						<?php
			
				global $con;
		$ip = getIp();
		
	if(isset($_POST['update_cart']))
	{
		foreach($_POST['remove'] as $remove_id )
		{
			$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
			
			$run_delete = mysqli_query($con, $delete_product);
			
			if($run_delete)
			{
				echo "<script>window.open('cart.php','_self')</script>";
				
			}
		}
	}
	
	
	if(isset($_POST['continue']))
	{
		echo "<script>window.open('allproduct.php','_self')</script>";
	}
	
	
	?>
				
				
				<tr>
						<td>
						<td>
						<td>
						<td>
						<div class="flex-w flex-sb-m p-t-26 p-b-30" >
						
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">

					<form action="cart.php" method="post" enctype="multipart/form-data">
				<fieldset disabled>
				<input type="text" class="form-control"  placeholder="Contact" name="totalprices" value="₱ <?php echo "&nbsp;" . $totalcheckout; ?>" required />
					</fieldset>
				</form>
					
					
					
					
					</span>
				</div>
						</td>
						
						</tr>
						
						
						
						
						
				
				<tr>
				<td></td>
				
				<td>
						
					<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
				
				<a href="cart.php"><input type="submit" class="btn btn-warning" name="update_cart" value="Update Cart" /></a>
				</div>
				
				</td>
				
				<td >
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					
					<input type="submit" class="btn btn-info" name="continue" value="Continue Shopping" />
					
				</div>
				</td>
				<td >
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					
					 
					
						<input type="submit" name="totalprice" class="btn btn-primary" value="CheckOut">
						
					
							
					
					
						<?php
						
						
						if(!isset($_SESSION['customer_email']))
								{
									echo "<script>window.open('checkout.php','_self')</script>";
								}
								
								else
								{
									
									if(isset($_POST['totalprice']))
					{
						
						
						 global $con;
								
						$totalprice = $total;
						
						$query = "insert into totalpriceorder (ip_add,total_price,dateorder,status) 
						values ('$ip','$totalprice',CURTIME(),'Processing')";
	
						$insertprod = mysqli_query($con, $query);
						$insertprod;
						
						if($insertprod)
						{
						echo "<script>window.open('checkout.php','_self')</script>";
						}
					
						}

									
								}
								

						?>


						
					
					
				</div>
			
						</td>
						</tr>
					</div>
							
						</tbody> 
					</table>	
					</form>
					
					
			</div>
			</div>
			
			<?php
			
				global $con;
		$ip = getIp();
		
	if(isset($_POST['update_cart']))
	{
		foreach($_POST['remove'] as $remove_id )
		{
			$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
			
			$run_delete = mysqli_query($con, $delete_product);
			
			if($run_delete)
			{
				echo "<script>window.open('cart.php','_self')</script>";
				
			}
		}
	}
	
	
	if(isset($_POST['continue']))
	{
		echo "<script>window.open('allproduct.php','_self')</script>";
	}
	
	
	?>
	</div>
	</section>

	
	

  <!--     -------     Main Product  end  -------     -->

 
  

</div>
</div>

</header>


<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

<h5 class="card-title text-right">Copyright 2019 &copy; All Rights reserved. Wine Jouse.</h5>

</footer>

 
</body>

</html>
