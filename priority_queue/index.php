<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include_once('PriorityQueue.php');

		$patientList = new PriorityQueue();

		echo $patientList;

		$patientList->enqueue('Smith', 5);
		$patientList->enqueue('John', 4);
		$patientList->enqueue('Fehrenbach', 6);
		$patientList->enqueue('Brown', 1);
		$patientList->enqueue('Ingram', 1);

		echo $patientList;

		echo $patientList->dequeue(). "<br>";
		echo $patientList;

		echo $patientList->dequeue(). "<br>";
		echo $patientList;
	?>
</body>
</html>