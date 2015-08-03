<?php
include 'db_connect.php';

$id = $_GET['id'];

$result = $db->query("SELECT full_name, course FROM freshmen WHERE id = $id");
$row = $result->fetch_assoc();

$db->close();

echo json_encode($row);

?>