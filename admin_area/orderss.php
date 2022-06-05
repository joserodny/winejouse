

<html>
<head>
<title>Dashboard</title>

<link href="styles/bootstrap.css" rel="stylesheet" type="text/css">
<link href="tables/css/bootstrap.min.css" rel="stylesheet">
<link href="tables/css/all.min.css" rel="stylesheet" type="text/css">
<link href="tables/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="tables/css/sb-admin.css" rel="stylesheet">


</head>

<body id="page-top">
<div id="wrapper">

 <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
          
            <span>Dashboard</span>
          </a>
		  
		  
		  
        </li>
		
		
		<li class="nav-item">
		  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          
						 <span>Add Product</span>
						</a>
         
          
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="users.php">
          
            <span>Account</span>
          </a>
		  
		</li>
		
		<li class="nav-item">
          <a class="nav-link" href="comp.php">
          
            <span>Orders</span>
          </a>
		  
		</li>
		
		
      
      </ul>
	  
	  <!-- Modall  -->
					
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
	  <form action="index.php" method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prodname" placeholder="Product Name">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Variety:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prodvariety" placeholder="Variety">
    </div>
  </div>
  
   <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Type:</label>
    <div class="col-sm-10">
    <select class="form-control"  name="prodtype">
  <option>Default select</option>
  <option>Red Wine</option>
  <option>White Wine</option>
  <option>Rose Wine</option>
  <option>Sparkling Wine</option>
</select>
    </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Price:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prodprice" placeholder="Price">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Stock:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prodstock" placeholder="Stock">
    </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Description:</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="prodesc" placeholder="Stock" rows="8"> </textarea>
    </div>
  </div>
  
  
    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Image:</label>
    <div class="col-sm-10">
      <div class="custom-file">
  <input type="file" class="custom-file-input" name="prodimage">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
  
    </div>
  </div>
  
  
  
	
	  
	  
     
      <div class="modal-footer">
	  
	 
	  
		<button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal">Cancel</button>
		<input type="submit" class="btn btn-primary" name="insert_post" value="Add">
      </div>
		  
	    </form>
		</div>
    </div>
  </div>
</div>



<!-- =================================== -->


	

			
<!-- end login modal-->

						

      <div id="content-wrapper">
<form action="" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
		
						<ol class="breadcrumb">
						<li class="breadcrumb-item">
						<a href="index.php">Dashboard</a>
						</li>
						
						</ol>
	  
							  <div class="card mb-3">
							  <div class="card-header">
								Account Pending
								
								</div>
								<input type="submit" class="btn btn-warning pull-right" value="Update" name="update">
								<div class="card-body">
								<div class="table-responsive">
								
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>

									<tr align="center">
									<th>Image</th>
									<th>Customers Details</th>
									<th>Order Date</th>
									<th>Status</th>
									<th>update</th>
									</tr>
								</thead>
								
								

									<tbody>
									
									

									<?php
										include("../function/function.php");
								include("../connection/conn.php");
										$total = 0;
								global $con;
							
							$ip = getIp();
							
							$sel_price = "select * from orders where ip_add='$ip' AND status like '%Processing%'";
							
							$run_price = mysqli_query($con, $sel_price);
							
							while($p_price = mysqli_fetch_array($run_price))
							{
								$pro_id = $p_price['p_id'];
								$order_id = $p_price['order_id'];
								$pro_qty = $p_price['qty'];
								$pro_status = $p_price['status'];
								$pro_date = $p_price['date_of_order'];
								
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
																	
									$info = "select * from customers ";
									$run_info = mysqli_query($con, $info);
									
								while($info_raw= mysqli_fetch_array($run_info))
								{	
									$info_name = $info_raw['customers_id'];
									$info_name = $info_raw['customers_name'];
									$info_email = $info_raw['customers_email'];
									$info_add = $info_raw['customers_ph'];
									$info_name = $info_raw['customers_name'];
							
									?>
									<tr align="center">
									
									<td><img src="product_images/<?php echo $product_image; ?>"  height="60" alt="IMG-PRODUCT"><p>x<?php echo $pro_qty;?></p></td>
											
									<td><?php echo $info_name; echo "<br>".$info_email; echo "<br>". $info_add; ?></td>
									<td><?php echo $pro_date; ?></td>
									<td><?php echo $pro_status;?></td>
									<td>
								<input type="checkbox" name="remove[]" value="<?php echo $p_price['order_id']; ?>">
								 <input type="hidden" class="form-control" name="approv" value="Complete" />
									</td>
									</tr>
									
									
									<?php
			
				global $con;
		$ip = getIp();
		
	if(isset($_POST['update']))
	{
		foreach($_POST['remove'] as $remove_id )
		{
			$pro_type = $_POST['approv'];
			$approveadmin = "update orders set 
				status='$pro_type' where order_id='$remove_id' AND ip_add='$ip'";
			
			$adminapp = mysqli_query($con, $approveadmin);
			
			if($adminapp)
			{
				echo "<script>window.open('orders.php','_self')</script>";
				
			}
		}
	}
	?>
									
									
							<?php } } }?>	
									
									
									
									
									
						
							</div>
							</div>
							</header>
							</tbody>
								</table>
								</div>
								</div>
								</form>
								
								 
								
								
								</div>
								</div>
								
								
							
												
							
					

</div>
</div>



<script src="tables/js/jquery.min.js"></script>
<script src="tables/js/bootstrap.bundle.min.js"></script>
<script src="tables/js/jquery.easing.min.js"></script>
<script src="tables/js/jquery.dataTables.js"></script>
<script src="tables/js/dataTables.bootstrap4.js"></script>
<script src="tables/js/sb-admin.min.js"></script>
<script src="tables/js/datatables-demo.js"></script>

</body>
</html>


					

