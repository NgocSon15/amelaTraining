<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once('Shape.php');  
		include_once('Triangle.php');

		$triangle = new Triangle(2, 2, 3);
		$triangle->setColor('red');

		echo $triangle;
	?>
</body>
</html>