<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		function isValid($email)
		{
			$pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
			if (preg_match($pattern, $email)) {
				return true;
			}
			return false;
		}

		echo isValid('a@gmail.com') ? 'email hợp lệ' ."<br>" : 'email không hợp lệ' . "<br>";
		echo isValid('ab@yahoo.com') ? 'email hợp lệ' ."<br>" : 'email không hợp lệ' . "<br>";
		echo isValid('abc@hotmail.com') ? 'email hợp lệ' ."<br>" : 'email không hợp lệ' . "<br>";
		echo isValid('@gmail.com') ? 'email hợp lệ' ."<br>" : 'email không hợp lệ' . "<br>";
		echo isValid('ab@gmail.') ? 'email hợp lệ' ."<br>" : 'email không hợp lệ' . "<br>";
		echo isValid('@#abc@gmail.com') ? 'email hợp lệ' ."<br>" : 'email không hợp lệ' . "<br>";
	?>
</body>
</html>