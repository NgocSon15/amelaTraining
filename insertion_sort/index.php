<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$list = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

		function insertionSort($list)
		{
			for ($i = 1; $i < count($list); $i++)
			{
				$val = $list[$i];
				$j = $i - 1;
				while ($j >= 0 && $list[$j] < $val)
				{
					$list[$j + 1] = $list[$j];
					$j--;
				}
				$list[$j + 1] = $val;
			}
			return $list;
		}

		$list = insertionSort($list);
		echo implode(", ", $list);
	?>
</body>
</html>