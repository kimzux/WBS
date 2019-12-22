<?php $title = "BILLING SYSTEM"; ?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/navigation.php'; ?>

<div class="container">
	<button class="btn btn-light text-dark" data-toggle="modal" data-target=".bd-addUser-modal-xl">Add New User</button>
	<button class="btn btn-light text-dark">Delete All Users</button>
	<br>
	<br>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Janedoe@jane.com</td>
				<td>Jdoe</td>
				<td>1234</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>&nbsp;Edit</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Del</button></a>
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Janedoe@jane.com</td>
				<td>Jdoe</td>
				<td>1234</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>&nbsp;Edit</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Del</button></a>
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Janedoe@jane.com</td>
				<td>Jdoe</td>
				<td>1234</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>&nbsp;Edit</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Del</button></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- div hii ni kwa ajili ya modal KHAGEGHA, kwenye button ya AddUser HAPO JUU -->

<?php include 'includes/add_user.php'; ?>
<?php include 'includes/footer.php'; ?>