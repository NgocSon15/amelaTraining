<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include_once('Stack.php');
		include_once('Queue.php');

		$str = "sososos";
		echo $str. "<br>";

		function isSymmetry($str)
		{
			$stack = new Stack();
			$queue = new Queue();

			for ($i = 0; $i < strlen($str); $i++)
			{
				$stack->push($str[$i]);
				$queue->enqueue($str[$i]);
			}

			while (!$stack->isEmpty())
			{
				if ($stack->pop() != $queue->dequeue())
					return false;
			}
			return true;
		}

		echo isSymmetry($str) ? 'chuoi doi xung' : 'chuoi khong doi xung';
	?>
</body>
</html>