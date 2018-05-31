<?php 
	$ages = [15, 20, 25, 30, 21, 24, 32];

	echo json_encode($ages);

	$phoneArr = [
		'13983144274',
		'13983144274',
		'13983144274',
		'13983144274',
		'13983144274',
		'13983144274',
		'13983144274',
	];

	echo count($phoneArr);

	$phoneArr[3] = 'changed';

	$phoneArr[] = 'hello';
	$phoneArr[] = 'hello2';

	var_dump($phoneArr);






	$grade = [30,20,29,10,39,48,28];

	for($i = 0; $i < count($grade); $i++){
		echo $grade[$i]." <br>";
	}
	

 ?>