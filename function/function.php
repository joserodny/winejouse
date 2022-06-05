<?php

$con = mysqli_connect("localhost","root","","winejouse");

if(mysqli_connect_errno())
{
	echo "The Connection Not Connected" . mysqli_connect_error();
}

//ipp

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//ip ennddd

//carttttttt

function cart()
{
 if(isset($_GET['add_cart']))
 {
	 global $con;
	 $ip = getIp();
	 $pro_id = $_GET['add_cart'];
	 
	 
$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
				  
	
	 
	 $run_check = mysqli_query($con, $check_pro);
	 
	 if(mysqli_num_rows($run_check)>0)
	 {
		 echo "";
	 }
	 else
	 {
		 $insert_pro = "insert into cart (p_id,ip_add,qty) values ('$pro_id','$ip','1')";
		 $insert_pros = "insert into orders (p_id,ip_add,qty,status,date_of_order) values ('$pro_id','$ip','1','Processing',CURTIME())"; 
		  
			
		$run_pro = mysqli_multi_query($con, $insert_pro);
		 $run_pro = mysqli_multi_query($con, $insert_pros);
		echo "<script>window.open('allproduct.php','_self')</script>";
	 
 }	 

}
}
//carttt enndddd

// total items

function total_items()
{
	if(isset($_GET['add_cart']))
	{
		global $con;
		$ip = getIp();
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items);
		
		$count_items = mysqli_num_rows($run_items);
	}
	else
	{
		global $con;
		$ip = getIp();
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items);
		
		$count_items = mysqli_num_rows($run_items);
	}
	echo $count_items;
}


//  total items end

// total price cart

function total_price()
{
	
	
	$total = 0;
	global $con;
	
	$ip = getIp();
	
	$sel_price = "select * from cart where ip_add='$ip'";
	
	$run_price = mysqli_query($con, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price))
	{
		$pro_id = $p_price['p_id'];
		
		$pro_price = "select * from products where prodid='$pro_id'";
		
		$run_pro_price = mysqli_query($con, $pro_price);
		
		while($pp_price = mysqli_fetch_array($run_pro_price))
		{
			$product_price = array($pp_price['prodprice']);
			
			$values = array_sum($product_price);
			
			$total += $values;
			
		}
	}
	echo $total;
}

// data check out



//----------------------

// total price cart end

function getPro()
{
	
	global $con;
	
	$get_pro = "select * from products order by RAND() limit 0,12";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro = mysqli_fetch_array ($run_pro))
	{
		$pro_id = $row_pro['prodid'];
		$prodname = $row_pro['prodname'];
		$prodvariety = $row_pro['prodvariety'];
		$prodprice = $row_pro['prodprice'];
		$prodstock = $row_pro['prodstock'];
		$prodesc = $row_pro['prodesc'];
		$prodimage = $row_pro['prodimage'];
		$prodtype = $row_pro['prodtype'];
	
	
	echo "
	
	

	
	
	<div class='card-deck' style='width:20rem;' >
<div class='card-group ' style='width:auto; height:auto;'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           <div class='card' >
    	<div class='card-body' style='width:90%; height:auto%;'> 
		

<center>

	<img   src='admin_area/product_images/$prodimage' width='auto' height='250px'>
	
	
	 <div class='card-body'>
      <h5 class='card-title'>$prodname</h5> 
	  
	
	  
	 <b class='card-text'>₱$prodprice</b><br><br>
	 
	 <a>Available: $prodstock</a><br>
	 
	 
				
	
	 <a href='allproduct.php?add_cart=$pro_id ' class='btn btn-primary'>Add cart</a>
	 

	 <a  href='details.php?pro_id=$pro_id ' class='btn btn-warning'>Details</a>
	 
	
	 
	
  </div>
	 </center>
	 </div >
	</div>
 </div>
 </div >
	
		";
	
	}
		
}
// redddddddddddddddddddddddddddddddddddd

function red()
{
	
	global $con;
	
	$get_pro = "select * from products  where prodtype LIKE '%Red%'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro = mysqli_fetch_array ($run_pro))
	{
		$pro_id = $row_pro['prodid'];
		$prodname = $row_pro['prodname'];
		$prodvariety = $row_pro['prodvariety'];
		$prodprice = $row_pro['prodprice'];
		$prodstock = $row_pro['prodstock'];
		$prodesc = $row_pro['prodesc'];
		$prodimage = $row_pro['prodimage'];
		$prodtype = $row_pro['prodtype'];
	
	
	echo "
	
	

	
	
	<div class='card-deck' style='width:20rem;' >
<div class='card-group ' style='width:auto; height:auto;'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           <div class='card' >
    	<div class='card-body' style='width:90%; height:auto%;'> 
		

<center>

	<img   src='admin_area/product_images/$prodimage' width='auto' height='250px'>
	
	
	 <div class='card-body'>
      <h5 class='card-title'>$prodname</h5> 
	  
	
	  
	 <b class='card-text'>₱$prodprice</b><br><br>
	 
	 <a>Available: $prodstock</a><br>
	
	 <a href='allproduct.php?add_cart=$pro_id ' class='btn btn-primary'>Add cart</a>
	 

	 <a  href='details.php?pro_id=$pro_id ' class='btn btn-warning'>Details</a>
	 
	
	 
	
  </div>
	 </center>
	 </div >
	</div>
 </div>
 </div >
	
		";
	
	}
		
}



	//       Reddd Enndddd
	
	
	
// 	whiteeeeeeee

function white()
{
	
	global $con;
	
	$get_pro = "select * from products  where prodtype LIKE '%White%'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro = mysqli_fetch_array ($run_pro))
	{
		$pro_id = $row_pro['prodid'];
		$prodname = $row_pro['prodname'];
		$prodvariety = $row_pro['prodvariety'];
		$prodprice = $row_pro['prodprice'];
		$prodstock = $row_pro['prodstock'];
		$prodesc = $row_pro['prodesc'];
		$prodimage = $row_pro['prodimage'];
		$prodtype = $row_pro['prodtype'];
	
	
	echo "
	
	

	
	
	<div class='card-deck' style='width:20rem;' >
<div class='card-group ' style='width:auto; height:auto;'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           <div class='card' >
    	<div class='card-body' style='width:90%; height:auto%;'> 
		

<center>

	<img   src='admin_area/product_images/$prodimage' width='auto' height='250px'>
	
	
	 <div class='card-body'>
      <h5 class='card-title'>$prodname</h5> 
	  
	
	  
	 <b class='card-text'>₱$prodprice</b><br><br>
	 
	 <a>Available: $prodstock</a><br>
	
	 <a href='allproduct.php?add_cart=$pro_id ' class='btn btn-primary'>Add cart</a>
	 

	 <a  href='details.php?pro_id=$pro_id ' class='btn btn-warning'>Details</a>
	 
	
	 
	
  </div>
	 </center>
	 </div >
	</div>
 </div>
 </div >
	
		";
	
	}
		
}


//whiiiteeee enddd
	
	
	
	// rossssssssssseeeeeeeeeeee
	
function rose()
{
	
	global $con;
	
	$get_pro = "select * from products  where prodtype LIKE '%Rose%'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro = mysqli_fetch_array ($run_pro))
	{
		$pro_id = $row_pro['prodid'];
		$prodname = $row_pro['prodname'];
		$prodvariety = $row_pro['prodvariety'];
		$prodprice = $row_pro['prodprice'];
		$prodstock = $row_pro['prodstock'];
		$prodesc = $row_pro['prodesc'];
		$prodimage = $row_pro['prodimage'];
		$prodtype = $row_pro['prodtype'];
	
	
	echo "
	
	

	
	
	<div class='card-deck' style='width:20rem;' >
<div class='card-group ' style='width:auto; height:auto;'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           <div class='card' >
    	<div class='card-body' style='width:90%; height:auto%;'> 
		

<center>

	<img   src='admin_area/product_images/$prodimage' width='auto' height='250px'>
	
	
	 <div class='card-body'>
      <h5 class='card-title'>$prodname</h5> 
	  
	
	  
	 <b class='card-text'>₱$prodprice</b><br><br>
	 
	 <a>Available: $prodstock</a><br>
	
	 <a href='allproduct.php?add_cart=$pro_id ' class='btn btn-primary'>Add cart</a>
	 

	 <a  href='details.php?pro_id=$pro_id ' class='btn btn-warning'>Details</a>
	 
	
	 
	
  </div>
	 </center>
	 </div >
	</div>
 </div>
 </div >
	
		";
	
	}
		
}
	
	// roseeeeeeeeeeeeeee end
	
	
	// spppppppppppparkkkk
	
function spark()
{
	
	global $con;
	
	$get_pro = "select * from products  where prodtype LIKE '%Spark%'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro = mysqli_fetch_array ($run_pro))
	{
		$pro_id = $row_pro['prodid'];
		$prodname = $row_pro['prodname'];
		$prodvariety = $row_pro['prodvariety'];
		$prodprice = $row_pro['prodprice'];
		$prodstock = $row_pro['prodstock'];
		$prodesc = $row_pro['prodesc'];
		$prodimage = $row_pro['prodimage'];
		$prodtype = $row_pro['prodtype'];
	
	
	echo "
	
	

	
	
	<div class='card-deck' style='width:20rem;' >
<div class='card-group ' style='width:auto; height:auto;'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           <div class='card' >
    	<div class='card-body' style='width:90%; height:auto%;'> 
		

<center>

	<img   src='admin_area/product_images/$prodimage' width='auto' height='250px'>
	
	
	 <div class='card-body'>
      <h5 class='card-title'>$prodname</h5> 
	  
	
	  
	 <b class='card-text'>₱$prodprice</b><br><br>
	 
	 <a>Available: $prodstock</a><br>
	
	 <a href='allproduct.php?add_cart=$pro_id ' class='btn btn-primary'>Add cart</a>
	 

	 <a  href='details.php?pro_id=$pro_id ' class='btn btn-warning'>Details</a>
	 
	
	 
	
  </div>
	 </center>
	 </div >
	</div>
 </div>
 </div >
	
		";
	
	}
		
}
	
	//sppppppaarrrkkkk eenddd
	
		
?>