<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include_once('Stack.php');

		$list = new Stack();
		echo $list. "<br>";
		
		$list->push(1);
		$list->push(2);
		$list->push(3);
		$list->push(4);
		$list->push(5);
		echo $list. "<br>";

		$list->pop();
		$list->pop();
		$list->pop();
		echo $list. "<br>";

		$list->push(9);
		$list->push(8);
		echo $list. "<br>";

		echo $list->isEmpty() ? 'true' : 'false';

		$list->pop();
		$list->pop();
		$list->pop();
		$list->pop();
		echo $list. "<br>";		

		echo $list->isEmpty() ? 'true' : 'false';
	?>
</body>
</html>