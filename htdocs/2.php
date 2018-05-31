<?php 
	$username='用户名<br>'; echo $username;
	$password="密码<br>"; echo $password;
	$registerTime = '2017-10-1<br>'; echo $registerTime;

	// var_dump() PHP 预定义函数, 会输出数据类型
	var_dump($registerTime);

	echo "<br>";


	$loginCount=50;
	echo $loginCount.'<br>';
	echo $loginCount = ($loginCount+1).'<br>';


	echo '<h1>声明一个常量</h1><hr/>';

	const PI = 3.14;
	echo PI;
?>
