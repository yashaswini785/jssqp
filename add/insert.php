<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$firstname = $data->firstname;
	$conn->query("INSERT INTO `department` (firstname) VALUES('$firstname')") or die(mysqli_error());
?>