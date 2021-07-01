<!DOCTYPE html>
<html>
<head>
	<title>Đếm lần xuất hiện</title>
</head>
<body>
	<form method="POST">
		<label>Nhập chuỗi: </label>
		<br>
		<input type="text" name="str">
		<br>
		<label>Nhập ký tự: </label>	
		<br>
		<input type="text" name="char">
		<br>
		<input type="submit" value="Đếm">
	</form>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$str = $_POST['str'];
			$char = $_POST['char'];
			$count = 0;
			for ($i = 0; $i < strlen($str); $i++) {
				if ($char == substr($str, $i, 1)) {
					$count++;
				}
			}
			echo "Số lần xuất hiện của ký tự " .$char. " trong chuỗi " .$str. " là: " .$count;
		}
	 ?>
</body>
</html>