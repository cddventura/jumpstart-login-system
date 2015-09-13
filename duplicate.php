<?php
include 'db_connect.php';

$id = $_GET['id'];

$result = $db->query("SELECT 1 FROM attendance WHERE id = $id");
$row = $result->fetch_assoc();

$db->close();

if (mysql_num_rows($query)= false) {
	echo false;
} else {
	echo json_encode($row);
}


?>