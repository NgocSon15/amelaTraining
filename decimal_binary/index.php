<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include_once('Stack.php');

		$num = 100;
		echo "Number: " .$num. "<br>";

		$stack = new Stack();

		while ($num != 0) {
			$stack->push($num % 2);
			$num = floor($num / 2);
		}

		$binary_num = "";
		while (!$stack->isEmpty())
		{
			$binary_num .= $stack->pop();
		}

		echo $binary_num;
	?>
</body>
</html>