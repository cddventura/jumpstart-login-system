<?php
$db = new mysqli("localhost", "root", "root", "hr_training_session_registration_system");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
}
?>