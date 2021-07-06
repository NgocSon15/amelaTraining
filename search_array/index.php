<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		function valueCount($numbers, $value)
		{
			$count = 0;
			for ($i = 0; $i < count($numbers); $i++)
			{
				if ($numbers[$i] == $value)
					$count++;
			}
			return $count;
		}

		$numbers = [1, 2, 1, 4, 21, 1, 43, 2];
		echo valueCount($numbers, 1). "<br>";
		echo valueCount($numbers, 2). "<br>";
		echo valueCount($numbers, 21). "<br>";
		echo valueCount($numbers, 100). "<br>";
	?>
</body>
</html>