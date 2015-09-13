<?php
	include 'db_connect.php';

	$group=0;

	if($_POST) {
		if ($_POST['name'] != ""){
			$id_number = $_POST['id'];
			$full_name = $_POST['name'];

			if($group<10){
				++$group;
			}
			else{
				$group=1;
			}

		$db->query("INSERT INTO attendance (stu_id, stu_name, group_num)
		  VALUES ('$id_number', '$full_name', '$group')");

		$db->close();
		}
		header("Location: login.php");
	}
?>
