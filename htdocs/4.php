<?php 
	// 练习：输出1*2*3*。。。 的累乘积，若累乘积超过10000000， 立即停止， 并输出当前的累乘积，以及此时的循环变量的值
	for($i = 1, $result = 1; true; $i++){
		$result  *= $i;

		if($result >= 10000000){

			break;
		}
	}

	echo "$result, now $i";
	echo '<hr>';
	// 练习：输出1/2/3/4/5/6/7...99, 中间必须跳过所有能被5和7整除的数
	for($i = 1; $i < 99; $i++){
		if($i % 5 == 0 || $i % 7 == 0) continue;
		echo "$i /";
	}

	echo '<hr>';

	for($i = 2000, $count = 0; true; $i++){
		//能被4整除且不能被100整除 或者能被400整除
		if(( ($i % 4 == 0) && ( $i % 100 != 0)) || ($i % 400 == 0)){	
			echo "$i /";
			$count++;
			if($count == 10) break;
		}
	}

	echo '<hr>';
 ?>