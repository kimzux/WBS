<div class="modal fade bd-addUser-modal-xl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h5 class="modal-title">water billing system</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<h5 class="text-center">Add User</h5>
			<div class="modal-body">
				<div class="modal-body">
				<form action="includes/process.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Firstname" name="firstname" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Lastname" name="lastname" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name" required="required">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
					
				</form>		
			</div>
		</div>
	</div>
</div>