<!DOCTYPE html>
<html>
<head>
	<title>Tìm min</title>
</head>
<body>
	<?php 
		function findMin($array) {
			$min = $array[0];
			$index = 1;
			for ($i = 1; $i < count($array); $i++) {
				if ($array[$i] < $min) {
					$min = $array[$i];
					$index = $i + 1;
				}
			}
			return $index;
		}

		$numbers = [1,5,33,121,-1,120,-5];

		$min_index = findMin($numbers);

		echo "Vị trí của phần tử nhỏ nhất trong mảng là: " .$min_index;
	 ?>
</body>
</html>