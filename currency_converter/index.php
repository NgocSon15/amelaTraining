<!DOCTYPE html>
<html>
<head>
	<title>Currency Converter</title>
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
	<h2>Currency Converter</h2>
	<form method="POST">
		<label>Nhập số tiền cần chuyển (USD):</label>
		<br/>
		<input type="text" name="usd"/>
		<br/>
		<input type="submit" value="Chuyển đổi"/>	
	</form>
	<h2>Result:</h2>
	<?php  
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$rate = 23000;
			$usd = $_POST['usd'];
			$vnd = $usd * $rate;
			echo $vnd;
		}
	?>
</body>
</html>