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
	?>
	<form method="POST">
		<label>Cột cần tính tổng: </label>
		<br>
		<input type="text" name="col">
		<br>
		<input type="submit" value="Submit">
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$col = $_POST['col'];
			$sum = 0;
			for ($i = 0; $i < count($arr); $i++) {
				$sum += $arr[$i][$col - 1];
			}
			echo "Tổng các số ở cột thứ " .$col. " của ma trận là: " .$sum;
		}
	 ?>
</body>
</html>