<?php

$con = mysqli_connect("localhost","root","","winejouse");


function data()
{
	
	global $con;
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro);
	

	
	while($row_pro = mysqli_fetch_array ($run_pro))
	{
		$pro_id = $row_pro['prodid'];
		$prodname = $row_pro['prodname'];
		$prodvariety = $row_pro['prodvariety'];
		$prodrice = $row_pro['prodrice'];
		$prodstock = $row_pro['prodstock'];
		$prodesc = $row_pro['prodesc'];
		$prodimage = $row_pro['prodimage'];
	
	
	echo "
	
						 <td>$prodname</td><br>
                      <td>$prodvariety</td><br>
					  <td>$prodrice</td><br>
                      <td>$prodesc</td><br>
                      <td>$prodimage</td><br>
                      <td>$prodstock</td><br>

	
	";
	
	

		}
		
		

		
		}	
		
	?>