<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$arr = array();
		for ($i = 1; $i <= 100; $i++)
		{
			array_push($arr, $i);
		}
		echo implode(", ", $arr). "<br>";

		$searchValue = 10;
		echo $searchValue. "<br>";

		function binarySearch($arr, $value, $startIndex, $endIndex)
		{
			if ($startIndex > $endIndex)
			{
				echo "not found";
				return false;
			}
			
			$midIndex = (int) (($startIndex + $endIndex) / 2);
			if ($value > $arr[$midIndex])
			{
				binarySearch($arr, $value, $midIndex + 1, $endIndex);
			} elseif ($value < $arr[$midIndex]) {
				binarySearch($arr, $value, $startIndex, $midIndex - 1);
			} else {
				echo "found";
				return true;
			}
			
		}

		echo binarySearch($arr, $searchValue, 0, count($arr) - 1);
	?>
</body>
</html>