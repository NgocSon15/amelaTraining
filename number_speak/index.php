<!DOCTYPE html>
<html>
<head>
	<title>Đọc số</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h2>Nhập số cần đọc</h2>
	<form method="POST">
		<input type="text" name="number" placeholder="số cần đọc"/>
		<input type="submit" value="Đọc số">
	</form>
	<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$number = $_POST["number"];
			if (!is_int($number))
			{
				if ($number >= 0 && $number < 10) {
					echo "<h2>".oneDigitNumber($number)."</h2>";
				} elseif ($number >= 10 && $number < 100) {
					echo "<h2>".twoDigitNumber($number)."</h2>";
				} elseif ($number >= 100 && $number < 1000) {
					echo "<h2>".threeDigitNumber($number)."</h2>";
				} else {
					echo "<h2>out of ability</h2>";
				}
			} else {
				echo "<h2>out of ability</h2>";
			}
		}

		function oneDigitNumber($number) {
			switch ($number) {
				case 1:
					return "one";
					break;
				case 2:
					return "two";
					break;
				case 3:
					return "three";
					break;
				case 4:
					return "four";
					break;
				case 5:
					return "five";
					break;
				case 6:
					return "six";
					break;
				case 7:
					return "seven";
					break;
				case 8:
					return "eight";
					break;
				case 9:
					return "nine";
					break;
				default:
					# code...
					break;
			}
		}

		function twoDigitNumber($number) {
			$tens = $number / 10;
			$ones = $number % 10;
			if (floor($tens) == 1) {
				switch ($ones) {
					case 0:
						return "ten";
						break;
					case 1:
						return "eleven";
						break;
					case 2:
						return "twelve";
						break;
					case 3:
						return "thirdteen";
						break;
					case 4:
						return "fourteen";
						break;
					case 5:
						return "fifteen";
						break;
					case 6:
						return "sixteen";
						break;
					case 7:
						return "seventeen";
						break;
					case 8:
						return "eighteen";
						break;
					case 9:
						return "nineteen";
						break;
					
					default:
						# code...
						break;
				}
			} else {
				switch (floor($tens)) {
				case 2:
					return "twenty " .oneDigitNumber($ones);
					break;
				case 3:
					return "thirdty " .oneDigitNumber($ones);
					break;
				case 4:
					return "forty " .oneDigitNumber($ones);
					break;
				case 5:
					return "fifty " .oneDigitNumber($ones);
					break;
				case 6:
					return "sixty " .oneDigitNumber($ones);
					break;
				case 7:
					return "seventy " .oneDigitNumber($ones);
					break;
				case 8:
					return "eighty " .oneDigitNumber($ones);
					break;
				case 9:
					return "ninety " .oneDigitNumber($ones);
					break;
				}
			}
		}

		function threeDigitNumber($number) {
			$hundreds = floor($number / 100);
			$tens = $number % 100;
			if ($tens < 10) {
				switch ($hundreds) {
					case 1:
						return "one hundred and " .oneDigitNumber($tens);
						break;
					case 2:
						return "two hundred and " .oneDigitNumber($tens);
						break;
					case 3:
						return "three hundred and " .oneDigitNumber($tens);
						break;
					case 4:
						return "four hundred and " .oneDigitNumber($tens);
						break;
					case 5:
						return "five hundred and " .oneDigitNumber($tens);
						break;
					case 6:
						return "six hundred and " .oneDigitNumber($tens);
						break;
					case 7:
						return "seven hundred and " .oneDigitNumber($tens);
						break;
					case 8:
						return "eight hundred and " .oneDigitNumber($tens);
						break;
					case 9:
						return "nine hundred and " .oneDigitNumber($tens);
						break;								
					default:
						
						break;
				}
			} else {
				switch ($hundreds) {
					case 1:
						return "one hundred and " .twoDigitNumber($tens);
						break;
					case 2:
						return "two hundred and " .twoDigitNumber($tens);
						break;
					case 3:
						return "three hundred and " .twoDigitNumber($tens);
						break;
					case 4:
						return "four hundred and " .twoDigitNumber($tens);
						break;
					case 5:
						return "five hundred and " .twoDigitNumber($tens);
						break;
					case 6:
						return "six hundred and " .twoDigitNumber($tens);
						break;
					case 7:
						return "seven hundred and " .twoDigitNumber($tens);
						break;
					case 8:
						return "eight hundred and " .twoDigitNumber($tens);
						break;
					case 9:
						return "nine hundred and " .twoDigitNumber($tens);
						break;								
					default:
						
						break;
				}
			}
		}
	 ?>
</body>
</html>