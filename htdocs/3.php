<?php 
	// 循环中使用break关键字：

	// 循环中使用continue 关键字：

	$i = 1;
	$sum = 0;
	while( true ){
		$sum = $i * ($i + 1);
		$i++;
		if($sum > 10000000){
			echo "$sum, $i";
			break;
		}
	}
	
	echo '<hr> output 100 inner zhishu';
	for($i = 2; $i <= 100; $i++){
		for($j = 2; $j <= $i - 1; $j++){
			if($i % $j == 0){   //$i 能被一个数整除
				break; 	//打断内层循环的执行
			}
		}
		// 00000000000000000000000000000000000000000000000000000000000
		if($j == $i){
			echo "$i / ";
		}
	}

	echo '<hr>';
	for($i = 0; $i < 5; $i++){
		echo $i;
	}

	echo '<hr>';

	for($i = 10; $i < 90; $i++){
		echo "$i/ ";
	}

	echo '<hr>';
	for($i = 5; $i < 90; $i+=5){
		echo "$i/ ";
	}

	echo '<hr>';
	for($i = 1; $i <= 9; $i++){
		for($j = 1; $j <= $i; $j++){
			echo "$i * $j =".$i * $j . ' ';
		}
		echo '<br>';
	}

	echo '<hr>';
	echo '三位水仙花数';

	for($i = 1000; $i <= 9999; $i++){
		$ge = $i % 10;			//个位数
		$shi = $i / 10 % 10;	//十位数
		$bai = (int)($i /100);
		$qian = (int)($i / 1000);

		if($i === ($ge * $ge * $ge + $shi * $shi * $shi + $bai*$bai*$bai + $qian * $qian * $qian)){
			echo "$i /";
		}
	}

 ?>