<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Danh sách số điện thoại:</h2>
	<form method="POST">
		<textarea name="phone-list"></textarea>
		<br>
		<input type="submit" value="Submit">
	</form>
	<?php  
		const VIETTEL = ['032', '033', '034', '035', '036', '037', '038', '039', '086', '096', '097', '098'];
		const VINA = ['081', '082', '083', '084', '085', '088', '091', '094'];
		const MOBI = ['070', '076', '077', '078', '079', '089', '090', '093'];

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$phone_str = $_POST['phone-list'];
			$phone_arr = explode(" ", $phone_str);

			$viettel = array();
			$vina = array();
			$mobi = array();

			foreach ($phone_arr as $phone) {
				$head = substr($phone, 0, 3);
				if(isViettel($head))
				{
					array_push($viettel, $phone);
				} else if (isVina($head)) {
					array_push($vina, $phone);
				} else {
					array_push($mobi, $phone);
				}
			}

			echo "Viettel:<br>";
			echo implode(", ", $viettel);

			echo "Vinaphone:<br>";
			echo implode(", ", $vina);

			echo "Mobiphone:<br>";
			echo implode(", ", $mobi);
		}

		function isViettel($str)
		{
			foreach (VIETTEL as $num) {
				if ($str == $num)
					return true;
			}
			return false;
		}

		function isVina($str)
		{
			foreach (VINA as $num) {
				if ($str == $num)
					return true;
			}
			return false;
		}

		function isMobi($str)
		{
			foreach (MOBI as $num) {
				if ($str == $num)
					return true;
			}
			return false;
		}
	?>
</body>
</html>