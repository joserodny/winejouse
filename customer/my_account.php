<!DOCTYPE>

<?php
session_start();
include("../function/function.php");
?>


<html>
<head>
<title> Wine Jouse </title>


<link href="../styles/style.css" rel="stylesheet" media="all">
<link href="../styles/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../styles/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="../styles/bootstrap-reboot.css" rel="stylesheet" type="text/css">
<link href="../styles/util.css" rel="stylesheet" type="text/css">
<link href="../styles/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/util.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/themify/themify-icons.css">
<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/elegant-font/html-css/style.css">
 <link href="css/style.css" rel="stylesheet" type="text/css">
  
 <script src="js/style.js"></script>
<script src="/js/test.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery-1.12.min.js"></script>
<script src="/js/bootstrap.min.js"></script>





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
	
	
	
	
    
	  
	 <div class="container-menu-header-v3 pull-right" >
	 
	 
	 
			<div class="wrap_header3 p-t-74" >
			
			
		
				
						
		
		
				<!-- Logo -->
				<a href="../index.php" class="logo3">
					<img  src="../images/logo.png" alt="IMG-LOGO">
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
  
  
 
 
</div>
  


	



			<?php
							if(isset($_GET['edit_account']))
							{
								include("edit_account.php");
							}
							if(isset($_GET['my_orders']))
							{
								include("my_orders.php");
							}
							?>

		


	

  <!--     -------     Main Product  end  -------     -->

 
  

</div>
</div>

</header>


<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">



<h5 class="card-title text-right">Copyright 2019 &copy; All Rights reserved. Wine Jouse.</h3>

</footer>

 
</body>

</html>


