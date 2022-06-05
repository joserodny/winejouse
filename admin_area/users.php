

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
  
  
  
	
	  
	  
      </div>
      <div class="modal-footer">
	  
	 
	  
		<button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal">Cancel</button>
		<input type="submit" class="btn btn-primary" name="insert_post" value="Add"></button>
      </div>
	    </form>
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
						
								<div class="card-body">
								<div class="table-responsive">
								
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>

									<tr align="center">
									<th>Customers name</th>
									<th>Customers email</th>
									<th>Status </th>
								
									
									</tr>
								</thead>
								
								<tfoot>

									<tr align="center">
										<th>Customers name</th>
									<th>Customers email</th>
									<th>Status </th>
									
									</tr>
								</tfoot>

									<tbody>
									
									

									<?php
										include("../function/function.php");
										include("../connection/conn.php");
		
										$get_pro = " select * from customers where type like '%Approved%'";
										
										$run_pro = mysqli_query($con, $get_pro);
										
										while ($row_pro=mysqli_fetch_array($run_pro))
										{
											$pro_id = $row_pro['customers_id'];
											$pro_name = $row_pro['customers_name'];
											$pro_email = $row_pro['customers_email'];
											$pro_type = $row_pro['type'];
											
										
									?>
									<tr align="center">
									
									<td><?php echo $pro_name?></td>
									<td><?php echo $pro_email?></td>
									<td><?php echo $pro_type?></td>
									
									</tr>
									
											
									
									<?php  } ?>	
									
									
									
									
									
						
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


					

