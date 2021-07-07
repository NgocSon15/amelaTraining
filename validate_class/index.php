<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		function isValid($class)
		{
			$pattern = "/^[A|C|P]+[0-9]{4,4}+[G|H|I|K|L|M]$/";
			if (preg_match($pattern, $class)) {
				return true;
			}
			return false;
		}

		echo isValid('C0318G') ? 'tên lớp học hợp lệ' ."<br>" : 'tên lớp học không hợp lệ' . "<br>";
		echo isValid('M0318G') ? 'tên lớp học hợp lệ' ."<br>" : 'tên lớp học không hợp lệ' . "<br>";
		echo isValid('P0323A') ? 'tên lớp học hợp lệ' ."<br>" : 'tên lớp học không hợp lệ' . "<br>";
	?>
</body>
</html>