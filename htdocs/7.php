<?php 
	// 创建一个数组，保存一个学子商城中用户的信息，编号、用户名、密码、注册时间、当前是否在线。
	
	// $user = [120301, 'tom', 12121, 2134, 1];

	// 以上数据的说明性太差了
	// PHP的数据分为两种类型：
	// 1. 索引数组（indexed Array): 每个元素的下标是数字
	/*
		$arr = ['Tom', 'Mary', 'King']
		$arr = [12, 12, 212,12,12]
		索引数组适用于“类型相同的多个数据”
	*/	
	// 2. 关联数组（Assiciation Array): 每个元素的下标是字符串
	/*
		$user = ['uid' => 1234, 'uname' => 'tom', 'regTime' => 1234123424, 'upwd' => '123456']
	
		=>：读作指向
	*/
		$user = [
					'uid' => 1234, 
					'uname' => 'tom', 
					'regTime' => 1234123424, 
					'upwd' => '123456'
				];

		// echo count($user);
		var_dump($user);
		// echo json_encode($user); 
		// 关联数组的每个元素的下标都是自定义的字符串！ 不能使用for循环进行遍历
		$user['sd'] = 'hello';

		var_dump($user);

		echo '<hr>';

		// 练习： 创建一个数组，保存一本书的信息，包括编号、书名、单价、出版日期、是否特价。
		// 输出该书籍的每个信息，再向

		$books = [
			'bid' => '020103405',
			'bname' => '三国志',
			'price' => '21.3',
			'pubDate' => 1239492919495,
			'isOnsale' => true
		];

		// var_dump($books);

		echo "书籍编号：".$books['bid'].'<br>';
		echo "书籍名称：".$books['bname'].'<br>';

		// 2018-04-28 AM 10:49
 ?>