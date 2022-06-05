

<section class="banner bgwhite p-t-40 p-b-40" >

			<div class="container bggrey">
			<div class="container-table-cart pos-relative bggrey">
			
			
			<div class="wrap-table-shopping-cart ">
			<form action="" method="POST" enctype="multipart/form-data">
					<table class="table-shopping-cart">
						<tbody align="center">
						<tr class="table-head">
							
							<th class="column-2">Product</th>
							<th class="column-3">QUANTITY</th>
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
							
							<td class="column-2">
							<img src="admin_area/product_images/<?php echo $product_image; ?>"  height="60" alt="IMG-PRODUCT">
							
							<?php echo $product_title; ?>
							
							
							
						
							
							
									
								</td>
							
							
							<td class="column-3">
							<?php echo $pro_qty; ?>
							</td>
							
							<td class="column-4">
							<?php echo "₱" . $totals; ?>
							</td>
						</tr>
						<?php  } } ?>
	
	
						</div>
						
				
				
				<tr>
						<tr >
				
				<?php
						
						include("connection/conn.php");
						$user = $_SESSION['customer_email'];
							$get_customer = "select * from customers where customers_email='$user'";
							
							$run_customer = mysqli_query($con, $get_customer);
							
							$row_customer = mysqli_fetch_array($run_customer);
							
							
							$c_id = $row_customer['customers_id'];
							$name = $row_customer['customers_name'];
							$email = $row_customer['customers_email'];
							$add = $row_customer['customers_ph'];
							$city = $row_customer['customers_city'];
							$contact = $row_customer['customers_contact'];
							
								
						?>
						
						
					
				

				<td >
				<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Total:
					</span>
					
						<?php 
						
						$checkout = ($pro_qty = $pro_qty);
						$totalcheckout = $total * $checkout;
						?>
					<span class="m-text21 w-size20 w-full-sm">
					  <form action="payment.php" method="POST" enctype="multipart/form-data">
					   <fieldset disabled>
						<b>	<input type="text" class="form-control"  placeholder="Contact" name="totalprices" value="₱ <?php echo "&nbsp;" . $totalcheckout; ?>" required /></b>
						</fieldset>
						 </form>
						 
						
						 
						 
						 
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Cash On Delivery.
						</p>

						<span class="s-text19">
							Customer Details
						</span>

						
						 
						
						
						

					<div class="size13 bo4 m-b-12">
						 <input type="text" class="form-control" placeholder="Name" name="c_name" value="<?php echo $name; ?>" required />
						</div>

						<div class="size13 bo4 m-b-22">
							 <input type="text" class="form-control"  placeholder="Email" name="c_email" value="<?php echo $email; ?>" required />
						</div>
						
						
						<div class="size13 bo4 m-b-22">
							 <input list="city" type="text" class="form-control"  placeholder="City" name="c_city" value="<?php echo $city; ?>" required />
						</div>
						
						
						<div class="size13 bo4 m-b-22">
							  <input type="text" class="form-control"  placeholder="Address" name="c_ph" value="<?php echo $add; ?>"  required />
						</div>
						
						
						<div class="size13 bo4 m-b-22">
						 <input type="text" class="form-control"  placeholder="Contact" name="c_contact" value="<?php echo $contact; ?>" required />
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							
							<input type="submit" name="update" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Update">
							
						</div>
					</div>
				</div>

				<!--  -->
				
				<div class="size15 trans-0-4">
					<!-- Button -->
					
					<input type="submit" name="checout" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Check Out">
					
				
				</div>
			</div>
						</td>
						</tr>
						
						</tr>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
				
				<?php
				if(isset($_POST['update']))
				{
					
				
					$customers_id = $c_id;
					
					$c_name 	 = $_POST['c_name'];
					$c_email	 = $_POST['c_email'];
					$c_ph 		 = $_POST['c_ph'];
					$c_city 	 = $_POST['c_city'];
					$c_contact   = $_POST['c_contact'];
					
					
			
			 
				$update_c = "update customers set 
				customers_name='$c_name',customers_email='$c_email',customers_ph='$c_ph',customers_city='$c_city',customers_contact='$c_contact' where customers_id='$customers_id'";
					
					$run_update = mysqli_query($con, $update_c);
					
					
					if($run_update)
					{
						echo "<script>alert('Your account successfully Updated')</script>";
						echo "<script>window.open('checkout.php','_self')</script>";
					}
					
				}
?>
					
							
						</tbody> 
					</table>	
					</form>
					
					<?php
			
				global $con;
		
		
	if(isset($_POST['checout']))
	{
		
			$delete_product = "delete from cart";
			
			$run_delete = mysqli_query($con, $delete_product);
			
			if($run_delete)
			{
				echo "<script>alert('Your Order is Now Processing')</script>";
				echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
				
			}
		
	}
	
	
	if(isset($_POST['continue']))
	{
		echo "<script>window.open('allproduct.php','_self')</script>";
	}
	
	
	?>
					
							
			</div>
			</div>
			
			
			
	</section>

	
	

  <!--     -------     Main Product  end  -------     -->

 
  
