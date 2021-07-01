<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>
	<h1>Đăng ký người dùng</h1>
	<form method="POST">
		<label>Tên người dùng:</label>
		<br/>
		<input type="text" name="username"/>
		<br/>
		<label>Email:</label>
		<br/>
		<input type="text" name="email"/>
		<br/>
		<label>Số điện thoại:</label>
		<br/>
		<input type="text" name="phone">
		<br/>
		<input type="submit" value="Đăng ký">
	</form>
	<?php  
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$username = $_POST["username"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];

			if (empty($username)) {
				echo "Tên người dùng không được để trống";
			} elseif (empty($email)) {
				echo "Email không được để trống";
			} elseif (empty($phone)) {
				echo "Số điện thoại không được để trống";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Email không đúng định dạng";
			} else {
				saveDataJSON('users.json', $username, $email, $phone);
				echo "Đăng ký thành công";
			}
		}

		function saveDataJSON($filename, $name, $email, $phone) {
			try {
				$contact = array($name, $email, $phone);
				$json_data = json_encode($contact);
				file_put_contents($filename, $json_data, FILE_APPEND);
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	?>
</body>
</html>