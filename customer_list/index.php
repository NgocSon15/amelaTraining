<!DOCTYPE html>
<html>
<head>
	<title>Danh sách khách hàng</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<table>
		<caption><h1>Danh sách khách hàng</h1></caption>
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Ảnh</th>
		</tr>
		<?php 
			$customerlist = array(
				"1" => array("ten" => "Nguyen Son",
							"ngaysinh" => "2000-06-15",
							"diachi" => "Ha Noi",
							"anh" => "anhthe.JPG"),
				"2" => array("ten" => "Nguyen Son",
							"ngaysinh" => "2000-06-15",
							"diachi" => "Ha Noi",
							"anh" => "anhthe.JPG"),
				"3" => array("ten" => "Nguyen Son",
							"ngaysinh" => "2000-06-15",
							"diachi" => "Ha Noi",
							"anh" => "anhthe.JPG"),
				"4" => array("ten" => "Nguyen Son",
							"ngaysinh" => "2000-06-15",
							"diachi" => "Ha Noi",
							"anh" => "anhthe.JPG"),
				"5" => array("ten" => "Nguyen Son",
							"ngaysinh" => "2000-06-15",
							"diachi" => "Ha Noi",
							"anh" => "anhthe.JPG")
			);
			foreach ($customerlist as $key => $value) {
				echo "<tr>";
				echo "<td>" .$key. "</td>";
				echo "<td>" .$value['ten']. "</td>";
				echo "<td>" .$value['ngaysinh']. "</td>";
				echo "<td>" .$value['diachi']. "</td>";
				echo "<td><image src='" .$value['anh']. "' width = '60px' height = '60px'/></td>";
				echo "</tr>";
			}
		 ?>
	</table>
</body>
</html>