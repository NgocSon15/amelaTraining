<!DOCTYPE html>
<html>
<head>
	<title>Số nguyên tố</title>
	<style type="text/css">
		input[type=text] {
		    width: 300px;
		    font-size: 16px;
		    border: 2px solid #ccc; 
		    border-radius: 4px;
		    padding: 12px 10px 12px 10px;
		    margin: 10px 10px 10px 0;
		}
		#submit {
		    border-radius: 2px;
		    padding: 10px 32px;
		    font-size: 16px;
		    padding : 10px;
		} 
	</style>
</head>
<body>
	<h2>Nhập số các số nguyên tố:</h2>
	<form method="POST">
		<input type="text" name="num"/>
		<br/>
		<input type="submit" value="Submit"/>
	</form>
	<?php 
		function isPrime($num) {
			for ($i = 2; $i <= sqrt($num); $i++) {
				if (($num % $i) == 0) {
					return false;
				}
			}
			return true;
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num = $_POST['num'];
			$count = 0;
			$n = 2;
			echo "<h2>" .$num. " số nguyên tố đầu tiên là:</h2>";
			while ($count < $num) {
				if (isPrime($n)) {
					echo $n. " ";
					$count++;
				}
				$n++;
			}
		}
	 ?>
</body>
</html>