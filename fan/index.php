<!DOCTYPE html>
<html>
<head>
	<title>Fan</title>
</head>
<body>
	<?php 
		include('Fan.php');
		$fan1 = new Fan();
		$fan2 = new Fan();
		$fan1->setSpeed($fan1::FAST);
		$fan1->setRadius(10);
		$fan1->setColor("yellow");
		$fan1->setOn(true);
		$fan2->setSpeed($fan2::MEDIUM);
		$fan2->setRadius(5);
		$fan2->setColor("blue");
		$fan2->setOn(false);
		echo $fan1->toString();
		echo "<br>";
		echo $fan2->toString();
	 ?>
</body>
</html>