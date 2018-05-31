<?php 

	require('../sql_init.php');
	$R = $_REQUEST;

	$uname = $R['uname'];
	$upwd = $R['upwd'];
	$uemail = $R['uemail']; 
	$utel = $R['utel'];
	$user_name = $R['user_name'];
	$ugender = $R['ugender'];

	$sql = "INSERT INTO xuezi_user(uname, upwd, email, phone, user_name, gender) values ('$uname', '$upwd', '$uemail', '$utel', '$user_name', '$ugender')";


	// run sql then get result;
	$result = mysqli_query($conn, $sql);

	// 根据结果输出响应
	if($result){
		echo '注册成功';
	} else {
		echo '注册失败 ' . $result . 'of';
	}
 ?>