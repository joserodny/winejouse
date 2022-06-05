<?php
	session_start();
	include("../connection/conn.php");


	if(isset($_POST['edit'])){
		$id = $_POST['prodid'];
		$prodname = $_POST['prodname'];
		$prodvariety = $_POST['prodvariety'];
		$prodesc = $_POST['prodesc'];
		$prodprice = $_POST['prodprice'];
		
		$sql = "UPDATE products SET prodname = '$prodname', prodvariety = '$prodvariety', prodesc = '$prodesc', prodprice = '$prodprice' WHERE prodid = '$id'";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'Product updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = '';
		}
	}
	else{
		$_SESSION['error'] = '';
	}

	header('location: index.php');

?>