<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$list = [1, 9, 4.5, 6.6, 5.7, -4.5];

		function selectionSort($list)
		{
			for ($i = 0; $i < count($list) - 1; $i++)
			{
				$minIndex = $i;
				for ($j = $i + 1; $j < count($list); $j++)
				{
					if($list[$minIndex] > $list[$j])
					{
						$minIndex = $j;
					}
				}
				$list = swap($list, $i, $minIndex);
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

		$list = selectionSort($list);
		echo implode(", ", $list);
	?>
</body>
</html>