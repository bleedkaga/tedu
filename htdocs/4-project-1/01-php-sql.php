<?php 
	require('../sql_init.php');

	$sql = "SELECT * from user";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo json_encode(mysqli_fetch_all($result, 1));
	} else {
		echo 'error';
	}
 ?>