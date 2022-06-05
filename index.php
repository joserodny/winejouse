
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
<body class="animsition">



<header class="header3">







  
    <div class="navbar-header" align="center">
	
	
	
	
    
	  
	 <div class="container-menu-header-v3" >
	 
	 
	 
			<div class="wrap_header3 p-t-74" >
			
			
		
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

			<div class="bottombar flex-col-c p-b-65" >
			
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

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height:30%">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/rr.jpg" alt="First slide" style="height:100%">
	 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ff.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/gg.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		
			<h1 class="display-4">&nbsp; About Us</h1>
 <center> <p class="lead ">WineJouse is online wine store in the Philippines. we offer  red wine, white wine, rose wine, sparkling wine. <br>

In a market where exceptional service is a must, Manila Wine provides a personal and dynamic concierge service. We take immense pride in our selection and recommendation for the best products to suit every client's needs.<br>

WineJouse delivers nationwide, with free delivery in some cities in Metro Manila. With our efficient delivery and shipping services nationwide and worldwide, we make sure the purchase arives on time and in perfect condition. We strive to find the best shipping rates for our clients' convenience. We are commited to service our clients better and continue to innovate to assist in new ways.</p> </center>
  <hr class="my-4">
   <center>
  <h1 class="display-8">&nbsp;Vision</h1>
  
  <p class="lead">To be in constant innovation and adaptation to new market trends and customer needs, with a highly qualified and committed team,<br> modern facilities and Chile’s best terroirs.</p>
 
  
  <h1 class="display-8">&nbsp;Mission</h1>
  
  <p class="lead">To produce quality wines tailored to meet our customers’ needs and to deliver a unique experience around wine, <br>complemented by an excellent tourist and culinary offer.</p>
  </center>
		
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


































