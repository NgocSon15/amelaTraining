<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		function isValid($account)
		{
			$pattern = "/^[_a-z0-9]{6,}$/";
			if (preg_match($pattern, $account)) {
				return true;
			}
			return false;
		}

		echo isValid('123abc_') ? 'account hợp lệ' ."<br>" : 'account không hợp lệ' . "<br>";
		echo isValid('abcdefg') ? 'account hợp lệ' ."<br>" : 'account không hợp lệ' . "<br>";
		echo isValid('______') ? 'account hợp lệ' ."<br>" : 'account không hợp lệ' . "<br>";
		echo isValid('.@') ? 'account hợp lệ' ."<br>" : 'account không hợp lệ' . "<br>";
		echo isValid('12345') ? 'account hợp lệ' ."<br>" : 'account không hợp lệ' . "<br>";
		echo isValid('@#abc@gmail.com') ? 'account hợp lệ' ."<br>" : 'account không hợp lệ' . "<br>";
	?>
</body>
</html>