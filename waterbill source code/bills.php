<?php $title = "BILLING SYSTEM"; ?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/navigation.php'; ?>

<br>

<div class="container">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Sweden</td>
				<td>7098765456789</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-dollar-sign"></i>&nbsp;Run</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-eye"></i>&nbsp;View</button></a>
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Sweden</td>
				<td>7098765456789</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-dollar-sign"></i>&nbsp;Run</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-eye"></i>&nbsp;View</button></a>
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Sweden</td>
				<td>7098765456789</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-dollar-sign"></i>&nbsp;Run</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-eye"></i>&nbsp;View</button></a>
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>Jane</td>
				<td>Doe</td>
				<td>Sweden</td>
				<td>7098765456789</td>
				<td>
					<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-dollar-sign"></i>&nbsp;Run</button></a>
					<a href="#">||</a>
					<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-eye"></i>&nbsp;View</button></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- div hii ni kwa ajili ya modal KHAGEGHA, kwenye button ya VIEW HAPO JUU -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Note:Bill Amount = Total Consumption * Price/unit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table">
					<thead class="thead-dark">
						<tr>
						<th>Id</th>
						<th>Previous Reading</th>
						<th>Present Reading</th>
						<th>Consumption</th>
						<th>Price</th>
						<th>Date</th>
						<th>Bill Amount</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td>19</td>
							<td>8989</td>
							<td>90900</td>
							<td>-8787</td>
							<td>290000</td>
							<td>13/12/2019</td>
							<td>89800</td>
							<td>
								<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>&nbsp;View</button></a>
								<a href="#">||</a>
								<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Del</button></a>
							</td>
						</tr>
						<tr>
							<td>19</td>
							<td>8989</td>
							<td>90900</td>
							<td>-8787</td>
							<td>290000</td>
							<td>13/12/2019</td>
							<td>89800</td>
							<td>
								<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>&nbsp;View</button></a>
								<a href="#">||</a>
								<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Del</button></a>
							</td>
						</tr>
						<tr>
							<td>19</td>
							<td>8989</td>
							<td>90900</td>
							<td>-8787</td>
							<td>290000</td>
							<td>13/12/2019</td>
							<td>89800</td>
							<td>
								<a href="#"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>&nbsp;View</button></a>
								<a href="#">||</a>
								<a href="#"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Del</button></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h5 class="modal-title">water billing system</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<h5 class="text-center">Client bill</h5>
			<h5>name:mussa ally</h5>
			<div class="modal-body">
				<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						previously Reading<input type="text" class="form-control"  required="required" >
					</div>
					<div class="form-group">
						present Reading<input type="text" class="form-control" required="required">
					</div>
					<div class="form-group">
						price<input type="text" class="form-control" required="required">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Add">
					</div>

<?php include 'includes/footer.php'; ?>