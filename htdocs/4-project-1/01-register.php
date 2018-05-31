<?php 
	require('../sql_init.php');
	$R = $_REQUEST;

	@$uname = $R['uname'];
	if(!$uname){
		
	}
	$upwd = $R['upwd'];
	$uemail = $R['email'];
	$phone = $R['phone'];
	$user_name = $R['user_name'];
	$gender = $R['gender'];
	
	$sql = "INSERT INTO user(uname, upwd, email, phone, sex) values('$uname', '$upwd', '$uemail', '$phone', '$gender')";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo ':)  添加成功';
	} else {
		echo ':( 添加失败';
	}
 ?>