<!DOCTYPE html>
<html>
<head>
	<title>Tìm min</title>
</head>
<body>
	<?php 
		$array = [324, 3252, 542, 234, 234, 454];
		$min = $array[0];
		for ($i = 1; $i < count($array); $i++) {
			if ($array[$i] < $min) $min = $array[$i];
		}
		echo "Giá trị nhỏ nhất của mảng là: " .$min;
	 ?>
</body>
</html>