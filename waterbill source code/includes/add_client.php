<div class="modal fade bd-addClient-modal-md" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">				
				<h5 class="modal-title" id="exampleModalLabel">water billing system</h5>
				<div class="dropdown-divider"></div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<h5 class="text-center">Add User</h5>
			<div class="modal-body">
				<form action="includes/process.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First Name" name="firstname" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Last Name" name="lastname" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Meter Number" name="meter_number" required="required" value="METER NO:">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address" name="address" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Contact" name="contact" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First Meter Reading" name="first_meter" required="required" value="INIT READ:">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" name="add_client" value="Login">
					</div>
					<div class="modal-user">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
				</form>				
			</div>
		</div>
	</div>
</div>