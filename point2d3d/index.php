<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include('Point3D.php');

		$point2d = new Point2D(3, 5);
		$point3d = new Point3D(1, 2, 3);

		echo $point2d->getXY()[0]. "<br>";
		echo $point2d->getXY()[1]. "<br>";
		echo $point2d. "<br>";
		echo $point3d->getXYZ()[0]. "<br>";
		echo $point3d->getXYZ()[1]. "<br>";
		echo $point3d->getXYZ()[2]. "<br>";
		echo $point3d. "<br>";
	 ?>
</body>
</html>