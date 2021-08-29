<!DOCTYPE html>
<html>
<head>
	<title>Tìm max</title>
</head>
<body>
	<?php 
		function findMax($array) {
			$max = $array[0][0];
			$x = 1;
			$y = 1;
			for ($i = 1; $i < count($array); $i++) {
				for ($j = 1; $j < count($array[$i]); $j++) {
					if ($array[$i][$j] > $max) {
						$max = $array[$i][$j];
						$x = $i + 1;
						$y = $j + 1;
					}
				}
			}
			return array($x, $y, $max);
		}

		$numbers = [
			array(23, 124, 134, 54),
			array(32, 25, 463, 234),
			array(45, 234, 64, 4),
			array(54, 67, 343, 32)
		];

		$x = findMax($numbers)[0];
		$y = findMax($numbers)[1];
		$max = findMax($numbers)[2];

		echo "Phần tử lớn nhất trong mảng nằm ở hàng " .$x. " cột " .$y. " và có giá trị là " .$max;
	 ?>
</body>
</html>