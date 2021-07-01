<!DOCTYPE html>
<html>
<head>
	<title>Exception handle</title>
</head>
<body>
	 <form method="POST">
	 	<label>Chỉ số của phần tử: </label>
	 	<br>
	 	<input type="text" name="index">
	 	<br>
	 	<input type="submit" value="submit">	
	 </form>
	 <?php 
	 	$arr = [];
		for ($i = 0; $i < 100; $i++) {
			$arr[$i] = rand(0, 100);
			echo $arr[$i]. " ";
		}
	 	echo "<br>"; 
	 	function find($arr, $index) {
	 		if ($index > count($arr)) {
	 			throw new Exception("Chỉ số vượt quá giới hạn của mảng", 1);
	 		} else {
	 			return $arr[$index - 1];
	 		}
	 	}
	 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 		$index = $_POST['index'];
	 		try {
	 			$num = find($arr, $index);
	 			echo "Giá trị của phần tử có chỉ số " .$index. " là " .$num;
	 		} catch (Exception $e) {
	 			echo $e->getMessage();
	 		}
	 	}
	  ?>
</body>
</html>