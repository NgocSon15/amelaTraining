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
	<h2>Các số nguyên tố nhỏ hơn 100 là:</h2>
	<?php 
		function isPrime($number) {
			for ($i = 2; $i <= sqrt($number); $i++) {
				if (($number % $i) == 0) return false;
			}
			return true;
		}

		for ($i = 2; $i < 100; $i++) {
			if (isPrime($i)) {
				echo $i. " ";
			}
		}
	 ?>
</body>
</html>