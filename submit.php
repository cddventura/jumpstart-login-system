<?php
	include 'db_connect.php';

	if($_POST) {

		$id_number = $_POST['id'];
		$full_name = $_POST['name'];
		$course = $_POST['course'];

		$db->query("INSERT INTO attendance (id, full_name, course)
		  VALUES ('$id_number', '$full_name', '$course')");

		$db->close();

		header("Location: login.php");	
		
	}
?>