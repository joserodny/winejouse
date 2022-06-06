<?php

?>

<!DOCTYPE>
<html>
<head>
<title>Dashboard</title>


<link href="styles/bootstrap.css" rel="stylesheet" type="text/css">
<link href="tables/css/bootstrap.min.css" rel="stylesheet">
<link href="tables/css/all.min.css" rel="stylesheet" type="text/css">
<link href="tables/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="tables/css/sb-admin.css" rel="stylesheet">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link href="css/sb-admin.css" rel="stylesheet">




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


<?php

					if(isset($_POST['insert_post']))
					{
	
						$prodname = $_POST['prodname'];
						$prodvariety = $_POST['prodvariety'];
						$prodtype = $_POST['prodtype'];
						$prodprice = $_POST['prodprice'];
						$prodstock = $_POST['prodstock'];
						$prodesc = $_POST['prodesc'];
				
						//images
						$prodimage = $_FILES['prodimage']['name'];
						$prodimage_tmp = $_FILES['prodimage']['tmp_name'];
	
						move_uploaded_file($prodimage_tmp,"product_images/$prodimage");
						
	
						$query = "insert into products (prodname,prodvariety,prodtype,prodprice,prodstock,prodimage,prodesc) 
						values ('$prodname','$prodvariety','$prodtype','$prodprice','$prodstock','$prodimage','$prodesc')";
	
						$insertprod = mysqli_query($con, $query);
						$insertprod;
						
						if($insertprod)
						{
						echo "<script>alert('New Product Successful inserted!')</script>";
						}
					
						}

						

						?>




					
<!-- end login modal-->


      <div id="content-wrapper">

        <div class="container-fluid">
		
						<ol class="breadcrumb">
						<li class="breadcrumb-item">
						<a href="index.php">Dashboard</a>
						</li>
						
						</ol>
						<div class="table-responsive">
						<div class="row" style="height:15%; width:100%">
				
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5" style="font-size:20"> Pending Users:
				  
				  
				  <?php
 					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$conn = new mysqli('db', 'root', 'example', 'winejouse');
					$result = " select * from customers where type like '%pending%'";


					if ($result = $conn->query($result))
						{
							// Return the number of rows in result set
							$rowcount=mysqli_num_rows($result);
						printf($rowcount);
						// Free result set
						mysqli_free_result($result);
						}

						mysqli_close($conn);
						?>
				  
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="account.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
			
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5 " style="font-size:30"><div style="font-size:20">Total Sales:</div>
					
					
					  
					   <?php
						$conn=mysqli_connect("db","root","example","winejouse");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

					$sql="SELECT sum(total_price) as sum from totalpriceorder where status like '%Complete%'";

					$result = mysqli_query($conn, $sql);
					  while($row = mysqli_fetch_array($result))
					  {
						  echo $row['sum'];
					  }
						?>
					
					
					</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
               
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Pending Orders:
				  
				  				  <?php
						$con=mysqli_connect("db","root","example","winejouse");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

					$sql="SELECT * from orders where status like '%Processing%'";

					if ($result=mysqli_query($con,$sql))
						{
							// Return the number of rows in result set
							$rowcount=mysqli_num_rows($result);
						printf($rowcount);
						// Free result set
						mysqli_free_result($result);
						}

						mysqli_close($con);
						?>
				  
				  
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="orders.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5" style="font-size:25"><div style="font-size:20">Registered Account:</div>
				  
				   
				  <?php
						$con=mysqli_connect("db","root","example","winejouse");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

					$sql="SELECT * from customers where type like '%Approved%' ";

					if ($result=mysqli_query($con,$sql))
						{
							// Return the number of rows in result set
							$rowcount=mysqli_num_rows($result);
						printf($rowcount);
						// Free result set
						mysqli_free_result($result);
						}

						mysqli_close($con);
						?>
					  
				  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="users.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
	   </div>
	   
	   
							  <div class="card mb-3">
							  <div class="card-header">
								Product List
								</div>
								<div class="card-body">
								<div class="table-responsive">
								
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>

									<tr align="center">
									<th>Product id</th>
									<th>Product name</th>
									<th>variety </th>
									<th>price</th>
									<th>Description</th>
									<th>image</th>
									<th>stock</th>
									<th>prodtype</th>
									<th>Action</th>
									
									</tr>
								</thead>
								
								<tfoot>

									<tr align="center">
									<th>Product id</th>
									<th>Product name</th>
									<th>variety </th>
									<th>price</th>
									<th>Description</th>
									<th>image</th>
									<th>stock</th>
									<th>prodtype</th>
									<th>Action</th>
									</tr>
								</tfoot>

									<tbody>
										
										
									<?php
							include_once('connection.php');
							$sql = "SELECT * FROM products";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
								
									
									
									<td>".$row['prodid']."</td>
									<td>".$row['prodname']."</td>
									<td>".$row['prodvariety']."</td>
									<td>".$row['prodprice']."</td>
									<td>".$row['prodesc']."</td>
									<td><img src='product_images/".$row['prodimage']."' width='60' height='60'></td>
									<td>".$row['prodstock']."</td>
									<td>". $row['prodtype']."</td>
									
									
									<td>
										<a href='#edit_".$row['prodid']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
						
						?>	
								
								</tbody>
								</table>
									
								</div>
								</div>
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
 <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

</body>
</html>


					

