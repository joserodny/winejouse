
<?php

include("connection/conn.php");

?>
 <link href="login/main.css" rel="stylesheet">
<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input class="input100 " type="text" name="email" placeholder="Email" required />
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
					<input class="input100" type="password" name="pass" placeholder="Password" required />
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						
						
						<input style="cursor:pointer;" class="login100-form-btn" type="submit" name="login" value="Sign in">
						
						
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="customer_register.php" class="txt3">
							Sign Up
						</a>
					</div>
				</form>
				
				
				<?php
			
				$con = mysqli_connect("localhost","root","","winejouse");
					if(isset($_POST['login']))
					{
						
						$c_email = $_POST['email'];
						$c_pass = $_POST['pass'];
						$q=mysqli_query($con, "select * from customers where customers_pass='$c_pass' AND customers_email='$c_email'");
						$row=mysqli_fetch_array($q);
						$type=$row['type'];
						
						
						$list=mysqli_query($con, "select * from customers where customers_pass='$c_pass' AND customers_email='$c_email'");
						$check_customer = mysqli_num_rows($list);
						
														
						if($check_customer==1)
						{	$_SESSION['customer_email']=$c_email;
							$_SESSION["type"] = $row['type'];
							$_SESSION["email"] = $row['customers_email'];
							if($type == "pending")
							{	 session_destroy();
								echo "<script>window.open('approval.jpg','_self')</script>";
							}
							else if($type == "Approved")
							{
										$_SESSION['customer_email']=$c_email;
									echo "<script>window.open('cart.php','_self')</script>";
							}
							else if($type == "admin")
							{
										$_SESSION['customer_email']=$c_email;
									echo "<script>window.open('admin_area/index.php','_self')</script>";
							}
							else{
								
								echo "<script>alert('Invalid Email or Password')</script>";

							}
							
						}
							elseif($check_customer==0)
							{
								echo "<script>alert('Invalid Email or Password')</script>";
							}
						
						
					}						
				?>
				
				

				<div class="login100-more" style="background-image: url('images/bg.png');"></div>
			</div>
		</div>