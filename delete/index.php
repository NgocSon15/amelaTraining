<!DOCTYPE html>
<html>
<head>
	<title>Xóa phần tử khỏi mảng</title>
</head>
<body>
	<?php 
		$array = [1, 2, 3, 3, 5];
		echo "Mảng hiện tại là: ";
		for ($i = 0; $i < count($array); $i++) {
			echo $array[$i]. " ";
		}
		echo "<br>";
	 ?>
	<form method="POST">
		<label>Phần tử cần xóa là:</label>
		<br>
		<input type="text" name="del">
		<br>
		<input type="submit" value="Xóa">
	</form>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$del = $_POST['del'];
			for ($i = 0; $i < count($array); $i++) {
				if ($del == $array[$i]) {
					for ($j = $i; $j < count($array) - 1; $j++) {
						$array[$j] = $array[$j + 1];
					}
				}
			}
			$array[count($array) - 1] = NULL;
		}
		echo "Mảng sau khi xóa là: ";
		for ($i = 0; $i < count($array); $i++) {
			echo $array[$i]. " ";
		}
		echo "<br>";
	 ?>

</body>
</html>