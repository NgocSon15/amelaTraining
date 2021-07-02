<!DOCTYPE html>
<html>
<head>
	<title>StopWatch</title>
</head>
<body>
	<?php 
		include('StopWatch.php');
		$stopWatch = new StopWatch();
		// $arr = [4, 1, 53, 46, 7];
		for ($i = 0; $i < 100; $i++) {
			$arr[$i] = rand(0, 99);
		}

		function swap($arr, $a, $b) {
			$temp = $arr[$a];
			$arr[$a] = $arr[$b];
			$arr[$b] = $temp;	
			return $arr;	
		}

		function selectionSort($arr) {
			for ($i = 0; $i < count($arr) - 1; $i++) {
				$min_index = $i;
				for ($j = $i + 1; $j < count($arr); $j++) {
					if ($arr[$j] < $arr[$min_index]) {
						$min_index = $j;
					}
				}
				$arr= swap($arr, $min_index, $i);
			}
			return $arr;
		}
		$stopWatch->start();
		$arr = selectionSort($arr);
		$stopWatch->stop();
		foreach ($arr as $key) {
			echo $key. " ";
		}
		echo "<br>";
		echo "Thời gian thực thi của thuật toán selection sort là: " .$stopWatch->getElapsedTime(). "ms";
	 ?>
</body>
</html>