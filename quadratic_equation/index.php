<!DOCTYPE html>
<html>
<head>
	<title>Quadratic Equation</title>
</head>
<body>
	<form method="POST">
		<label>Nhập số a:</label>
		<br>
		<input type="text" name="a">
		<br>
		<label>Nhập số b:</label>
		<br>
		<input type="text" name="b">
		<br>
		<label>Nhập số c:</label>
		<br>
		<input type="text" name="c">
		<br>
		<input type="submit" value="Tìm nghiệm">
		<br>
	</form>
	<?php 
		include('QuadraticEquation.php');
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];
			$equation = new QuadraticEquation();
			
			$equation->setA($a);
			$equation->setB($b);
			$equation->setC($c);

			if ($equation->getDiscriminant() > 0) {
				echo "The equation has two roots " .$equation->getRoot1(). " and " .$equation->getRoot2();
			} elseif ($equation->getDiscriminant() == 0) {
				echo "The equation has one root " .$equation->getRoot1();
			} else {
				echo "The equation has no real roots";
			}
		}
	 ?>
</body>
</html>