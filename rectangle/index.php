<!DOCTYPE html>
<html>
<head>
	<title>Rectangle class</title>
</head>
<body>
	<?php 
		include('rectangle.php');
		$width = 10;
		$height = 20;
		$rectangle = new Rectangle($width, $height);

		echo $rectangle->width. "<br>";
		echo $rectangle->height. "<br>";

		$rectangle->height = 30;
		$rectangle->width = 20;

		echo $rectangle->height. "<br>";
		echo $rectangle->width. "<br>";
		echo $rectangle->getPerimeter(). "<br>";
		echo $rectangle->getArea(). "<br>";
		echo "Your Rectangle: " .$rectangle->display();
	 ?>
</body>
</html>