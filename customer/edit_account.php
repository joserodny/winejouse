

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


	
	
	
	


  <!-- Product end -->

  
  
  
  
  
  <!--     -------    Register form   -------     -->
  
  
 
 
</div>
  

<div class="container1-page">
 <div class="jumbotron">

<section class="banner p-t-40 p-b-40 " style="background-image: url('images/bg.png'); background-repeat: no-repeat;">

						<?php
						
						include("../connection/conn.php");
						$user = $_SESSION['customer_email'];
							$get_customer = "select * from customers where customers_email='$user'";
							
							$run_customer = mysqli_query($con, $get_customer);
							
							$row_customer = mysqli_fetch_array($run_customer);
							
							
							$c_id = $row_customer['customers_id'];
							$name = $row_customer['customers_name'];
							$email = $row_customer['customers_email'];
							$pass = $row_customer['customers_pass'];
							$add = $row_customer['customers_ph'];
							$city = $row_customer['customers_city'];
							$contact = $row_customer['customers_contact'];
							$image = $row_customer['customers_image'];
							
						?>
<form action="" method="post" enctype="multipart/form-data">

		<div >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
      
	  
	  
	  <form>
	  
	 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control" placeholder="Name" name="c_name" value="<?php echo $name; ?>" required />
	 </div>
    </div>
  </div> 
   
 
	 
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control"  placeholder="Email" name="c_email" value="<?php echo $email; ?>" required />
     </div>
	</div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="password" class="form-control"  placeholder="Password" name="c_pass" value="<?php echo $pass; ?>" required />
    </div>
	</div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-10">
	<div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
      <input type="text" class="form-control"  placeholder="Address" name="c_ph" value="<?php echo $add; ?>"  required />
   </div>
   </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">City:</label>
    <div class="col-sm-10">
     
	  <div class="flex-w bo5 of-hidden w-size6 text-right w-size20">
	 <input list="city" type="text" class="form-control"  placeholder="City" name="c_city" value="<?php echo $city; ?>" required />
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
      <input type="text" class="form-control"  placeholder="Contact" name="c_contact" value="<?php echo $contact; ?>" required />
	   
    </div>
	
	</div>
	
  </div>

 

	  </form>
	     <label  class="col-sm-2 col-form-label">Picture: &nbsp;</label>  <img src="customer_images/<?php echo $image; ?>" width="80" height="80" ><br>
	  <div class="modal-footer">
	  
	 
	
	  <input type="submit" class="btn btn-info" name="update" value="Update" />
	   
	
      </div>
	  
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

<?php
				if(isset($_POST['update']))
				{
					
					$ip = getIp();
					$customers_id = $c_id;
					
					$c_name 	 = $_POST['c_name'];
					$c_email	 = $_POST['c_email'];
					$c_pass 	 = $_POST['c_pass'];
					$c_ph 		 = $_POST['c_ph'];
					$c_city 	 = $_POST['c_city'];
					$c_contact   = $_POST['c_contact'];
					
					
			
			 
				$update_c = "update customers set 
				customers_name='$c_name',customers_email='$c_email',customers_pass='$c_pass',customers_ph='$c_ph',customers_city='$c_city',customers_contact='$c_contact' where customers_id='$customers_id'";
					
					$run_update = mysqli_query($con, $update_c);
					
					
					if($run_update)
					{
						echo "<script>alert('Your account successfully Updated')</script>";
						echo "<script>window.open('my_account.php?edit_account','_self')</script>";
					}
					
				}
?>