<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include('MovablePoint.php');

		$point = new Point(3, 5);
		$movablePoint = new MovablePoint(4, 6, 1, 3);

		echo $point. "<br>";
		echo $movablePoint. "<br>";

		$movablePoint->move();

		echo $movablePoint;
	?>
</body>
</html>