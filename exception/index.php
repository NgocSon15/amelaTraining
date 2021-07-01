<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="POST">
		<label>Số thứ nhất:</label>
		<br>
		<input type="text" name="x">
		<br>
		<label>Số thứ hai:</label>
		<br>
		<input type="text" name="y">
		<br>
		<input type="submit" value="calculate">
	</form>

	<?php 
		function calc($x, $y) {
			if ($y == 0) {
				throw new Exception("Divine by zero", 1);
			} else {
				$sum = $x + $y;
				$sub = $x - $y;
				$multi = $x * $y;
				$div = $x / $y;
				return array($sum, $sub, $multi, $div);
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$x = $_POST['x'];
			$y = $_POST['y'];
			try {
				$sum = calc($x, $y)[0];
				$sub = calc($x, $y)[1];
				$multi = calc($x, $y)[2];
				$div = calc($x, $y)[3];
				echo "Tổng x + y = " .$sum. "<br>";
				echo "Hiệu x - y = " .$sub. "<br>";
				echo "Tích x * y = " .$multi. "<br>";
				echo "Thương x / y = " .$div. "<br>";
			} catch (Exception $e) {
				echo "Error: " .$e->getMessage();
			}
		}
	 ?>
</body>
</html>