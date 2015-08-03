<?php
$db = new mysqli("localhost", "root", "root", "jumpstart");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
}
?>