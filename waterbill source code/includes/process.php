<?php 

if(isset($_POST['add_client'])) {

	$dbconn = mysqli_connect("localhost","root","123456","waterbilling");

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$meter_number = $_POST['meter_number'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$first_meter = $_POST['first_meter'];

	$sql = "INSERT INTO clients(firstname, lastname, meter_number, address, contact, first_meter) VALUES('$firstname', '$lastname', '$meter_number', '$address', '$contact', '$first_meter')";
	$res = mysqli_query($dbconn,$sql);

	header("Location: ../clients.php");
}


if(isset($_GET['delete'])) {

	$dbconn = mysqli_connect("localhost","root","123456","waterbilling");
	$id = $_GET['delete'];
	$sql = "DELETE FROM clients WHERE client_id='$id'";
	$res = mysqli_query($dbconn,$sql);
	header("Location: ../clients.php");



}




?>