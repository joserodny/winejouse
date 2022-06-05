<!DOCTYPE>

<?php
session_start();
	include("function/function.php");
	include("connection/conn.php") 
		
?>


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
						
							<li > 
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
								<a href="contact.html">Contact</a>
								
								
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

  
  
  
  
  
  <!--     -------    Register form   -------     -->
  
  
 
 
</div>
  

<div class="container1-page">
 <div class="jumbotron">

<section class="banner p-t-40 p-b-40 " style="background-image: url('images/bg.png'); background-repeat: no-repeat;">


<form action="customer_register.php" method="post" enctype="multipart/form-data">

		<div >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
      
	  <form>
	  
	 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control" placeholder="Name" name="c_name" required />
	 </div>
    </div>
  </div> 
   
 
	 
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control"  placeholder="Email" name="c_email" required />
     </div>
	</div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="password" class="form-control"  placeholder="Password" name="c_pass" required />
    </div>
	</div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control"  placeholder="Address" name="c_ph" required />
   </div>
   </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">City:</label>
    <div class="col-sm-10">
     
	  <div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
	 <input list="city" type="text" class="form-control"  placeholder="City" name="c_city" required />
	<datalist id="city">
	<option value="Alaminos">
<option value="Angeles">
<option value="Antipolo">
<option value="Bacolod">
<option value="Bacoor ">
<option value="Bago">
<option value="Baguio">
<option value="Bais">
<option value="Balanga">
<option value="Batac">
<option value="BatangasCity">
<option value="Bayawan">
<option value="Baybay">
<option value="Bayugan">
<option value="Bislig">
<option value="Biñan">
<option value="Bogo">
<option value="Borongan">
<option value="Butuan">
<option value="Cabadbaran">
<option value="Cabanatuan">
<option value="Cabuyao">
<option value="Cadiz">
<option value="CagayandeOro">
<option value="Calamba">
<option value="Calapan">
<option value="Calbayog">
<option value="Caloocan">
<option value="Candon">
<option value="Canlaon">
<option value="Carcar">
<option value="Catbalogan">
<option value="Cauayan">
<option value="CaviteCity">
<option value="CebuCity">
<option value="CotabatoCity">
<option value="Dagupan">
<option value="Danao">
<option value="Dapitan">
<option value="Dasmariñas">
<option value="DavaoCity">
<option value="Digos">
<option value="Dipolog">
<option value="Dumaguete">
<option value="ElSalvador">
<option value="Escalante">
<option value="Gapan">
<option value="GeneralSantos">
<option value="GeneralTrias">
<option value="Gingoog">
<option value="Guihulngan">
<option value="Himamaylan">
<option value="Ilagan">
<option value="Iligan">
<option value="IloiloCity">
<option value="Imus">
<option value="Iriga">
<option value="Isabela">
<option value="Kabankalan">
<option value="Kidapawan">
<option value="Koronadal">
<option value="LaCarlota">
<option value="Lamitan">
<option value="Laoag">
<option value="LapuLapu">
<option value="LasPiñas">
<option value="Legazpi">
<option value="Ligao">
<option value="Lipa">
<option value="Lucena">
<option value="Maasin">
<option value="Mabalacat">
<option value="Makati">
<option value="Malabon">
<option value="Malaybalay">
<option value="Malolos">
<option value="Mandaluyong">
<option value="Mandaue">
<option value="Manila">
<option value="Marawi">
<option value="Marikina">
<option value="MasbateCity">
<option value="Mati">
<option value="Meycauayan">
<option value="Muntinlupa">
<option value="Muñoz">
<option value="Naga">
<option value="Navotas">
<option value="Olongapo">
<option value="Ormoc">
<option value="Oroquieta">
<option value="Ozamiz">
<option value="Pagadian">
<option value="Palayan">
<option value="Panabo">
<option value="Parañaque">
<option value="Pasay">
<option value="Pasig">
<option value="Passi">
<option value="PuertoPrincesa">
<option value="QuezonCity">
<option value="Roxas">
<option value="Sagay">
<option value="Samal">
<option value="SanCarlos">
<option value="SanFernando">
<option value="SanJose">
<option value="SanJosedelMonte">
<option value="SanJuan">
<option value="SanPablo">
<option value="SanPedro">
<option value="SantaRosa">
<option value="Santiago">
<option value="Silay">
<option value="Sipalay">
<option value="SorsogonCity">
<option value="SurigaoCity">
<option value="Tabaco">
<option value="Tabuk">
<option value="Tacloban">
<option value="Tacurong">
<option value="Tagaytay">
<option value="Tagbilaran">
<option value="Taguig">
<option value="Tagum">
<option value="Talisay">
<option value="Tanauan">
<option value="Tandag">
<option value="Tangub">
<option value="Tanjay">
<option value="TarlacCity">
<option value="Tayabas">
<option value="Toledo">
<option value="TreceMartires">
<option value="Tuguegarao">
<option value="Urdaneta">
<option value="Valencia">
<option value="Valenzuela">
<option value="Victorias">
<option value="Vigan">
<option value="ZamboangaCity">
   </datalist >
	  </div>
	</div>
  </div>
  
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Contact:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control"  placeholder="Contact" name="c_contact" required />
    </div>
	</div>
  </div>
  <input type="hidden" class="form-control"  placeholder="Contact" name="c_type" value="pending" required />
 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Image:</label>
    <div class="col-sm-10">
      <div class="custom-file">
  <input type="file" class="custom-file-input" name="c_image" />
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
  
    </div>
  </div>

	  </form>
	  
	  
      </div>
      <div class="modal-footer">
	  
	 
	  
	  <input type="submit" class="btn btn-warning" name="register" value="Create Account" />
	   
	
      </div>
    </div>
  </div>
</div>
		</form>
	</section>

	

  <!--     -------    register form  end  -------     -->

 
  

</div>
</div>

</header>


<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">



<h5 class="card-title text-right">Copyright 2019 &copy; All Rights reserved. Wine Jouse.</h3>

</footer>

 
</body>

</html>
<?php
				if(isset($_POST['register']))
				{
					
					$ip = getIp();
					
					$c_name 	 = $_POST['c_name'];
					$c_email	 = $_POST['c_email'];
					$c_pass 	 = $_POST['c_pass'];
					$c_ph 		 = $_POST['c_ph'];
					$c_city 	 = $_POST['c_city'];
					$c_contact   = $_POST['c_contact'];
					$c_type        =$_POST['c_type'];
					$c_image = $_FILES['c_image']['name'];
					$c_image_tmp = $_FILES['c_image']['tmp_name'];
					move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
					
					$sql_e = "select * from customers where customers_email='$c_email'";
		
					$res_e = mysqli_query($con, $sql_e);
		
		
					if(mysqli_num_rows($res_e) > 0)
					{
						
					echo "<script>alert('Email Address is Already Exists!')</script>";
					
					}
					else
					{
					
			 
				$insert_c = "insert into customers (customers_ip,customers_name,customers_email,customers_pass,customers_ph,customers_city,customers_contact,type,customers_image) values
					('$ip','$c_name','$c_email','$c_pass','$c_ph','$c_city','$c_contact','$c_type','$c_image') ";
					
					$run_c = mysqli_query($con, $insert_c);
					
					
				
					
					
					$sel_cart = "select * from cart where ip_add='$ip'";
					
					$run_cart = mysqli_query($con, $sel_cart);
					
					$check_cart = mysqli_num_rows($run_cart);
					
					if($check_cart==0)
					{
						
						echo "<script>alert('Registration Successful!')</script>";
						echo "<script>window.open('approval.jpg','_self')</script>";
					}
					echo "<script>alert('Registration Successful!')</script>";
						echo "<script>window.open('approval.jpg','_self')</script>";
					}
					
				}
?>