<?php 
	$rows = $_REQUEST['rows'];
	$cols = $_REQUEST['cols'];

	$cols = (int)$cols;
	$rows = (int)$rows;

	for($i = 0; $i < $rows; $i++){
		for($j = 0; $j < $cols; $j++){
			echo '※ ';
		}
		echo '<br>';
	}

	echo(min(7.25,7.30, 9 ,1 ));
 ?>