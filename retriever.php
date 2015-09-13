<?php
include 'db_connect.php';

$id = $_GET['id'];

$result = $db->query("SELECT id, full_name FROM students WHERE id = $id");
$row = $result->fetch_assoc();

$db->close();

echo json_encode($row);

?>
