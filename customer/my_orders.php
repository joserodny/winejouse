


<header class="header3">

 <div class="navbar-header" align="center">
	
	<div class="container-menu-header-v3" >
	<div class="wrap_header3 p-t-74">
			
		<!-- Logo -->
				<a href="../index.php" class="logo3">
					<img style="align:right;" src="../images/logo.png" alt="IMG-LOGO">
				</a>

			
				
				<!-- Header Icon -->
				
				
				<div class="header-icons3 p-t-38 p-b-60 p-l-8">
					
						
						
						<?php
				
				if(!isset($_SESSION['customer_email']))
				{
					echo "<a href='../checkout.php'>Login</a>";
				}
				else
				{
					echo "<a href='../logout.php'>Logout</a>";
				}
				
				?>
					

					
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="../cart.php">
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
							
						<li class="sale-noti"> 
								<a  href="../allproduct.php">Shop Now</a>
								
							</li>
						<li >
						</li >
						<li >
						</li >
						<li >
						</li >
						
				
						
							<li > 
							
							<?php
							if(!isset($_GET['my_orders']))
							{
								if(!isset($_GET['edit_account']))
							{
								if(!isset($_GET['change_pass']))
							{
							
							}
							}
							}
							?>
							
										
							
							
								<a  href="my_account.php?my_orders">My Orders</a>
								
							</li>
							
							<li > 
								<a  href="my_account.php?edit_account">Edit Account</a>
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
	
</header>


	

	
	


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
							
							<th class="column-1">Product</th>
							<th class="column-2">Quantity</th>
							<th class="column-3">Price</th>
							<th class="column-4">Order Date</th>
							<th class="column-5">Status</th>
						</tr>
						
						
						
						
	<?php 
						
				

	$total = 0;
	global $con;
	
	$ip = getIp();
	
	$sel_price = "select * from orders where ip_add='$ip'";
	
	$run_price = mysqli_query($con, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price))
	{
		$pro_id = $p_price['p_id'];
		$pro_qty = $p_price['qty'];
		$pro_pre = $p_price['status'];
		$pro_date = $p_price['date_of_order'];
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
							$total = 	$pro_qty*$single_price;
						
						?>
						
						
						

						<tr class="table-row">
							
							<td class="column-1">
							<img src="../admin_area/product_images/<?php echo $product_image; ?>"  height="40" alt="IMG-PRODUCT">
							
							<?php echo $product_title; ?>
							
									
								</td>
							
							
							
							<td class="column-2">
							<?php echo $pro_qty; ?>
							</td>
							<td class="column-3">
							<?php echo "₱" . $total ; ?>
							</td>
							<td class="column-4">
							<?php echo  $pro_date ; ?>
							</td>
							<td class="column-5">
							<?php echo $pro_pre; ?>
							</td>
						</tr>
						<?php  } } ?>
	
						
						
				
							
						</tbody> 
					</table>

					</form>
				</div>
					
			</div>
			</div>
			
			
			
	</section>

	
	

  <!--     -------     Main Product  end  -------     -->

 
  

</div>
</div>




