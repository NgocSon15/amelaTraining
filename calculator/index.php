<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h2>Calculator</h2>
	<form method="POST">
		<h3>Lượng tiền đầu tư ban đầu:</h3>
		<br/>
		<input type="text" name="amount" placeholder="lượng tiền đầu tư" />
		<h3>Lãi suất năm:</h3>
		<br/>
		<input type="text" name="interest" placeholder="lãi suất" />
		<h3>Số năm đầu tư:</h3>
		<br/>
		<input type="text" name="years" placeholder="số năm" />
		<br/>
		<input type="submit" value="Calculate">
	</form>
</body>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$amount = $_POST["amount"];
		$interest = $_POST["interest"];
		$years = $_POST["years"];
		for ($i = 1; $i <= $years; $i++)
		{
			$amount = $amount + ($amount * $interest);
		}
		echo "Giá trị tương lai sau " .$years. " năm là: " .$amount;
	}
 ?>
</html>