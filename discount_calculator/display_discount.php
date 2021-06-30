<?php 
	session_start();
	$description = $_SESSION['description'];
	$price = $_SESSION['price'];
	$percent = $_SESSION['percent'];
	$discount_amount = $price * $percent * 0.01;
	$discount_price = $price - $discount_amount;
	echo "<p>Lượng chiết khấu: " .$discount_amount. "</p>";
	echo "<p>Giá sau chiết khấu: " .$discount_price. "</p>";
 ?>