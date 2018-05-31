<?php 

	require('../sql_init.php');

	$name = $_REQUEST['name'];

	$sql = "SELECT * from user where uname='$name'";


	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_row($result);
	
	if($row == null){
		echo '可以使用';
	} else {
		echo '用户名已存在';
	}


 