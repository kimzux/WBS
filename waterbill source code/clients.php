<?php $title = "BILLING SYSTEM"; ?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/navigation.php'; ?>

<div class="container">
	<button class="btn btn-light text-dark" data-toggle="modal" data-target=".bd-addClient-modal-md">Add New Client</button>
	<br>
	<br>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Meter Number</th>
				<th>Address</th>
				<th>Contact</th>
				<th>First Reading</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php 
				$dbconn = mysqli_connect("localhost","root","123456","waterbilling");
				$sql = "SELECT * FROM clients";
				$res = mysqli_query($dbconn,$sql);

				while($row=mysqli_fetch_array($res)) {
					?>


			<tr>
				<td><?php echo $row['client_id']; ?></td>
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['meter_number']; ?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['contact']; ?></td>
				<td><?php echo $row['first_meter']; ?></td>
				<td>
					<a href="clients.php?edit=<?php echo $row['client_id']; ?>"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>&nbsp;Edit</button></a>
					<a href="#">||</a>
					<a href="includes/process.php?delete=<?php echo $row['client_id']; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Delete</button></a>
				</td>
			</tr>


		<?php
	}

	?>

		</tbody>
	</table>
</div>
<!-- div hii ni kwa ajili ya modal KHAGEGHA, kwenye button ya AddClient HAPO JUU -->
<?php include 'includes/add_client.php';?>

<?php include 'includes/footer.php'; ?>