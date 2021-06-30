<!DOCTYPE html>
<html>
<head>
	<title>Vẽ hình</title>
</head>
<body>
	<h2>Lựa chọn hình để vẽ:</h2>
	<form method="POST">
		<select name="figure">
			<option value="rec">Print the rectangle</option>
			<option value="tltri">Print the square triangle(square at top-left)</option>
			<option value="trtri">Print the square triangle(square at top-right)</option>
			<option value="bltri">Print the square triangle(square at bottom-left)</option>
			<option value="brtri">Print the square triangle(square at bottom-right)</option>
			<option value="itri">Print isosceles triangle</option>
		</select>
		<input type="submit" value="Draw">
	</form>
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$figure = $_POST['figure'];
			switch ($figure) {
				case 'rec':
					for ($i = 1; $i <= 3; $i++) {
						for ($j = 1; $j <= 5; $j++) {
							echo "* ";
						}
						echo "<br/>";
					}
					break;
				case 'tltri':
					for ($i = 5; $i >= 1; $i--) {
						for ($j = 1; $j <= $i; $j++) {
							echo "* ";
						}
						echo "<br/>";
					}
					break;
				case 'trtri':
					for ($i = 5; $i >= 1; $i--) {
						for ($j = 5; $j >= 1; $j--) {
							if ($j <= $i) {
								echo "* ";
							} else {
								echo "&nbsp;&nbsp ";
							}
						}
						echo "<br/>";
					}
					break;
				case 'bltri':
					for ($i = 1; $i <= 5; $i++) {
						for ($j = 1; $j <= $i; $j++) {
							echo "* ";
						}
						echo "<br/>";
					}
					break;
				case 'brtri':
					for ($i = 5; $i >= 1; $i--) {
						for ($j = 1; $j <= 5; $j++) {
							if ($j < $i) {
								echo "&nbsp;&nbsp ";
							} else {
								echo "* ";
							}
						}
						echo "<br/>";
					}
					break;
				default:
					for ($i = 1; $i <= 5; $i++) {
						$space = 5 - $i;
						for ($j = 1; $j <= 9; $j++) {
							if($j > $space && $j <= 9 - $space) {
								echo "* ";
							} else {
								echo "&nbsp;&nbsp ";
							}
						}
						echo "<br/>";
					}
					break;
			}
			
		}
	 ?>
</body>
</html>