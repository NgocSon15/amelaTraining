<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		include_once('Dancer.php');

		$males = new SplQueue();
		$females = new SplQueue();

		$dancer1 = new Dancer("John", "male");
		$dancer2 = new Dancer("Paul", "male");
		$dancer3 = new Dancer("Trump", "male");
		$dancer4 = new Dancer("Obama", "male");
		$dancer5 = new Dancer("Washington", "male");

		$males->enqueue($dancer1);
		$males->enqueue($dancer2);
		$males->enqueue($dancer3);
		$males->enqueue($dancer4);
		$males->enqueue($dancer5);

		$dancer6 = new Dancer("A", "female");
		$dancer7 = new Dancer("B", "female");
		$dancer8 = new Dancer("C", "female");
		$dancer9 = new Dancer("D", "female");

		$females->enqueue($dancer6);
		$females->enqueue($dancer7);
		$females->enqueue($dancer8);
		$females->enqueue($dancer9);		

		while (!$males->isEmpty() && !$females->isEmpty())
		{
			echo $males->dequeue()->name. " and " .$females->dequeue()->name. "<br>";
		}

		if ($males->isEmpty())
		{
			echo "Hãy đợi bạn nhảy nam<br>";
		} else if ($females->isEmpty()) {
			echo "Hãy đợi bạn nhảy nữ<br>";
		}
	?>
</body>
</html>