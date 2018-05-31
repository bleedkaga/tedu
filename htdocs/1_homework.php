<?php
	$price1 = 3.5;
	$count1 = 2;

	$sum = $price1 * $count1;

	echo $sum;	

	echo '<hr>';

	$grade1=20;
	$grade2=30;
	$grade3=40;

	$grade = $grade1+$grade3+$grade2;

	echo 'all grade: ' . $grade;

	echo '<hr>';

	// 把角度值（60， 15）转换成弧度制
	// 弧度制： 1圈 2 * PI;
	// 角度值转换为弧度值得公式： deg * PI / 180;

	// 声明变量
	const PI  = 3.14;

	// 声明变量
	$deg = 15;

	echo 'deg is' . ($deg * PI / 180);

	echo '<hr>';

	$isMarried = true;
	echo $isMarried;		// 输出true， 显示为1
	var_dump($isMarried);

	$isMarried =false;
	echo $isMarried;		// 输出false，显示为空字符串
	var_dump($isMarried);

	// string
	// PHP 中的标量类型 —— string
	echo '<hr>';
	$uname = 'a';
	var_dump($uname);
	echo '<hr>';
	$uname = "a";
	var_dump($uname);

	echo '<hr>';
	$uname = 'ab';
	var_dump($uname);
	echo '<hr>';
	$uname = "ab";
	var_dump($uname);

	echo '<hr>';
	$uname = 'abc';
	var_dump($uname);
	echo '<hr>';
	$uname = "abc";
	var_dump($uname);

	echo '<hr>';
	$uname = '阿达';
	var_dump($uname);
	echo '<hr>';
	$uname = "阿达";
	var_dump($uname);

	echo '<hr>';
	echo '用户的姓名为：';
	echo $uname;

	echo '<hr>';
	echo "用户的姓名为：$uname";

	echo '<hr>';
	$c = 60;
	$m = 70;

	echo "语文成绩为：$c , 数学成绩为： $m , 总成绩为：  ".($c+$m);

	echo '<hr>';

	$money = 9000;

	echo '该员工月薪为：' .$money. '。 该员工年薪为：'.$money * 12;

	echo '<hr>';

	echo '3'+'5';echo '<hr>';
	echo 'abc'+'xyz';echo '<hr>';
	echo 'abc'+'3xyz';echo '<hr>';
	echo '5abc'+'3xyz';echo '<hr>';
	echo '5.6.7abc'+'3xyz45';echo '<hr>';
	echo '<hr>';

	echo 'start <hr>';
	echo 100 % 9 .'<hr>';
	echo 101 % 9 .'<hr>';
	echo 102 % 9 .'<hr>';
	echo 103 % 9 .'<hr>';
	echo 104 % 9 .'<hr>';
	echo 105 % 9 .'<hr>';
	echo 106 % 9 .'<hr>';
	echo 107 % 9 .'<hr>';
	echo 108 % 9 .'<hr>';
	echo 109 % 9 .'<hr>';
	echo 110 % 9 .'<hr>';

	$i = 10;

	$j = $i++ + ++$i + $i++;
	echo $i.'a'. $j;
?>