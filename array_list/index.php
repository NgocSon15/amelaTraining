<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include('ArrayList.php');

		$listInteger = new MyList();
		$listInteger->add(1);
		$listInteger->add(2);
		$listInteger->add(3);

		echo $listInteger. "<br>";
		
		$listInteger->insert(0, 2);
		echo $listInteger. "<br>";

		$listInteger->remove(2);
		echo $listInteger. "<br>";
	?>
</body>
</html>