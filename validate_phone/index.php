<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		function isValid($phoneNumber)
		{
			$pattern = "/^\(+[0-9]{2,2}+\)-\(0+[0-9]{9,}+\)$/";
			if (preg_match($pattern, $phoneNumber)) {
				return true;
			}
			return false;
		}

		echo isValid('(84)-(0978489648)') ? 'số điện thoại hợp lệ' ."<br>" : 'số điện thoại không hợp lệ' . "<br>";
		echo isValid('(a8)-(22222222)') ? 'số điện thoại hợp lệ' ."<br>" : 'số điện thoại không hợp lệ' . "<br>";
	?>
</body>
</html>