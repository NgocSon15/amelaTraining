<!DOCTYPE html>
<html>
<head>
	<title>Discount Calculator</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h2>Discount Calculator</h2>
	<form action="" method="POST">
		<h3>Mô tả sản phẩm:</h3>
		<br/>
		<input type="text" name="description" placeholder="mô tả sản phẩm" />
		<h3>Giá niêm yết:</h3>
		<br/>
		<input type="text" name="price" placeholder="giá niêm yết" />
		<h3>Tỷ lệ chiết khấu:</h3>
		<br/>
		<input type="text" name="percent" placeholder="tỷ lệ chiết khấu"/>
		<br/>
		<input type="submit" class="btn" value="Calculate">
	</form>
</body>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['description']))
		{
			session_start();
			$_SESSION['description'] = $_POST['description'];
			$_SESSION['price'] = $_POST['price'];
			$_SESSION['percent'] = $_POST['percent'];
		}
		header("Location: display_discount.php");
	}
 ?>
</html>