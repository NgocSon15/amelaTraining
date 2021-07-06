<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

		function bubbleSort($list)
		{
			for ($i = 0; $i < count($list) - 1; $i++)
			{
				for ($j = $i + 1; $j < count($list); $j++)
				{
					if ($list[$i] > $list[$j])
					{
						$list = swap($list, $i, $j);
					}
				}
			}
			return $list;
		}

		function swap($list, $x, $y)
		{
			$temp = $list[$x];
			$list[$x] = $list[$y];
			$list[$y] = $temp;
			return $list;
		}

		$list = bubbleSort($list);
		echo implode(", ", $list);
	?>
</body>
</html>