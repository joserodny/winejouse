<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['prodid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Product Info</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="prodid" value="<?php echo $row['prodid']; ?>">
				
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prodname" value="<?php echo $row['prodname']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">variety:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prodvariety" value="<?php echo $row['prodvariety']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prodprice" value="<?php echo $row['prodprice']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Desc:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prodesc" value="<?php echo $row['prodesc']; ?>">
					</div>
				</div>
           
	
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
            </div>
					</form>
				</div>
			</div>
        </div>
    </div>
</div>

