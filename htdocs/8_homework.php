<?php 
	$user1 = [
		'uid' => 121,
		'uname' => '当当',
		'avater' => 'http://baid.com/log',
		'pwd' =>'dqwdwqd',
		'time' => 12395983903,
		'isonline' => true
	];
	$user2 = [
		'uid' => 122,
		'uname' => '当当2',
		'avater' => 'http://baid.com/log',
		'pwd' =>'dqwdwqd',
		'time' => 12395983903,
		'isonline' => false
	];
	$user3 = [
		'uid' => 123,
		'uname' => '当当3',
		'avater' => 'http://baid.com/log',
		'pwd' =>'dqwdwqd',
		'time' => 12395983903,
		'isonline' => false
	];
	$user4 = [
		'uid' => 124,
		'uname' => '当当4',
		'avater' => 'http://baid.com/log',
		'pwd' =>'dqwdwqd',
		'time' => 12395983903,
		'isonline' => false
	];



	$users = [];
	$users[] = $user1;
	$users[] = $user2;
	$users[] = $user3;
	$users[] = $user4;


	// var_dump($users);
	// echo json_encode($users);
	echo '<table border border-collapse="collapse">';
	for($i = 0; $i <count($users); $i++){
		$arr = $users[$i]; // 大数组中的每个元素又是一个小数组
		echo '<tr>';
		echo "<td>$arr[uid] &nbsp; &nbsp;</td>";
		echo "<td>$arr[avater] &nbsp; &nbsp;</td></td>";
		echo "<td>$arr[uname] &nbsp; &nbsp;</td>";
		echo "<td>$arr[time] &nbsp; &nbsp;</td>";
		echo "<td>$arr[isonline] &nbsp; &nbsp;</td>";
		echo '</tr>';
	}
	echo '</table>';
	echo '<hr>';
	var_dump($users);

	echo '<hr>';

	$agelist = [20, 30, 21, 45, 12];
	foreach($agelist as $age){
		echo $age . '<br>';
	}

	echo '<hr>';

	for($i = 0; $i <count($users); $i++){
		$arr = $users[$i]; // 大数组中的每个元素又是一个小数组
		foreach ($arr as $key => $value) {
			echo $key . ', '. $value . '<br>/';
		}
	}

 ?>