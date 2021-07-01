<!DOCTYPE html>
<html>
<head>
	<title>Tổng đường chéo</title>
</head>
<body>
	<?php 
		$arr = array(
			array(1, 2, 3, 4),
			array(5, 6, 7, 8),
			array(9, 10, 11, 12),
			array(13, 14, 15, 16)
		);

		$sum = 0;
		for ($i = 0; $i < count($arr); $i++) {
			for ($j = 0; $j < count($arr[$i]); $j++) {
				if ($i == $j) {
					$sum += $arr[$i][$j];
				}
			}
		}
		echo "Tổng các số ở đường chéo chính của ma trận là: " .$sum;
	 ?>
</body>
</html>