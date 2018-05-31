<?php 
	// 掌握新语言的步骤
	// 了解背景
	// 搭建环境
	// 变量常量
	// 数据类型
		/*
			标量类型： 	int/ float/ string/ bool 一个变量一个值
			复合类型：  array(indexed array) 索引数组/ 关联数组
			其他类型：	null / resource （打开的文件，数据库连接）
		*/
	// 运算符
		/*
			算术运算符：
			比较运算符: > >= < <= == != === !==
			逻辑运算符：&& || !
			位运算符：<< >>
			赋值运算符: = += -= *= /= %=
			拼接运算符：. .=
			三目运算符：?:
	
		*/
	// 逻辑结构
			/*
				顺序执行：
				选择执行：
					if... else  switch...case...break
				循环：
					while... do..while for... foreach...
			*/
	// 通用小程序
			/*
				累加、打星星、九九乘法表、水仙花、质数。。
				百度：程序员必做的50题
			*/
	// 函数和对象

	// 第三方框架和库
	// 实用项目


	// Today target:  
	/*
		1). foreach: 循环
		2). PHP预定义数组 	—— 重点&难点
		3). 函数 —— 
		4). PHP预定义函数 —— MySQL数据库访问相关 —— 最重点

		1.循环结构之四 ————foreach循环
			syntax：foreach 只用于遍历数组
			含义：对于数组中的每个元素，都看作是一个指定的变量，对每个这样的变量执行一次指定的循环体
			example：
				$agelist = [20, 30, 21, 45, 12];
				foreach($agelist as $age){
					
				}
	*/

	/*
		索引数组的遍历：
		for($=0; $i < count($变量名); $i++){
			echo $变量名[$i];
		}

		联数组的声明： $变量名 = ['xiabiao' => value, 'xiabiao' => value]; 关联数组不能使用for循环遍历

	*/

	echo '<hr> php 预定义数组';
	/*
		2. PHP中的预定义数组 —— 难点
		预定义： 由PHP解释器自己创建的，程序员不需要声明就可以直接使用的。
		php预定义了如下的数组变量
		$_GET
		$_POST
		$_COOKIE
		$_FILES
		$_REQUEST：保存着客户端提交给服务器的“请求”数据
		$_SESSION

		上述变量默认都是array(0){},
	*/

	var_dump($_REQUEST['admin']);
	var_dump($_GET['admin']);
	/*
		web项目中，客户端（浏览器）如何给服务器传数据
		http://127.0.0.1/login.php
	*/

	// practice：客户端浏览器访问服务器上的add.php页面， 并传输num1和num2两个数组作为请求数字；编写add.php 网页，读取客户端提交的请求数据，像客户端输出这两个数字的代数和


	/*
		函数：
	*/

	for($i = 1, $sum = 0; $i <= 100; $i++){
		$sum += $i;
	}


	function leji($max){
		for($i = 1, $sum = 0; $i <= $max; $i++){
			$sum += $i;
		}
		echo $sum;
	}

	leji(100);
	leji(50);


	echo '<hr>';

	function add(){
		$n = 1;
		$n1 = 2;
		$n2 = 3;

		echo $n+$n1+$n2;
	}


	add();

	echo '<hr>';
	function table99(){
		for($n = 1; $n <= 9; $n++){
			for($m=1; $m <= $n; $m++){
				echo "$n * $m" . "=" .$n * $m . ' ';
			}
			echo '<br>';
		}

		echo '<hr>';
	}

	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
	table99();
?>