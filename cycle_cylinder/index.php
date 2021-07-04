<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include('Cylinder.php');

		$cycle = new Cycle(5, 'red');
		$cylinder = new Cylinder(5, 'blue', 2);

		echo $cycle;
		echo $cylinder;
	 ?>
</body>
</html>