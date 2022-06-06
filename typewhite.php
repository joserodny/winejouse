<?php
session_start();
	include("function/function.php");
	
		
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
<body>



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
								<a href="typered.php">Red Wine </a>
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


<section class="banner bgwhite p-t-40 p-b-40" style="background-image: url('images/bg.png'); background-repeat: no-repeat;">

		<div class="container" style="width:auto; opacity:0.9;">
			<div class="row">
				
					<!-- block1 -->
					<?php white(); ?>
					
				
			</div>
		</div>
		
		
		
	</section>
	<?php cart() ?>
  <!--     -------     Main Product  end  -------     -->


</div>


</header>


<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

<h5 class="card-title text-right">Copyright 2019 &copy; All Rights reserved. Wine Jouse.</h3>

</footer>

 
</body>

</html>


































