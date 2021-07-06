<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include_once('Stack.php');
		$stack = new Stack();

		$arr = [1, 34, 32, 12, 42, 53];
		echo implode(", ", $arr). "<br>";
		$reverse_arr = [];

		foreach ($arr as $num) {
			$stack->push($num);
		}

		while (!$stack->isEmpty())
		{
			array_push($reverse_arr, $stack->pop());
		}

		echo implode(", ", $reverse_arr);
	?>
</body>
</html>