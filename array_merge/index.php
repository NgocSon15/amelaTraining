<!DOCTYPE html>
<html>
<head>
	<title>Merge Array</title>
</head>
<body>
	<?php 
		$array1 = [1, 2, 3, 4, 5];
		$array2 = [6, 7, 8, 10, 15, 45];
		$array3 = [];
		for ($i = 0; $i < count($array1); $i++) {
			$array3[$i] = $array1[$i];
		}
		for ($i = 0; $i < count($array2); $i++) {
			$array3[count($array1) + $i] = $array2[$i];
		}
		echo "Các phần tử của mảng thứ 3 là: ";
		for ($i = 0; $i < count($array3); $i++) {
			echo $array3[$i]. " ";
		}
	 ?>
</body>
</html>