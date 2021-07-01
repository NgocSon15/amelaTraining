<!DOCTYPE html>
<html>
<head>
	<title>Danh sách khách hàng</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<table>
		<form method="POST">
		  	<label>From: </label>
		  	<input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd"/>
		 	<label>To: </label>
		 	<input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" />
		  	<input type = "submit" id = "submit" value = "Lọc"/>
		</form>
		<?php 
			$customerlist = array(
				"0" => array("name" => "Nguyen Son",
							"date_of_birth" => "2000-06-15",
							"address" => "Ha Noi",
							"picture" => "anhthe.JPG"),
				"1" => array("name" => "Nguyen Nhac",
							"date_of_birth" => "1999-02-12",
							"address" => "Hai Phong",
							"picture" => "anhthe.JPG"),
				"2" => array("name" => "Nguyen Lu",
							"date_of_birth" => "2004-06-20",
							"address" => "Nha Trang",
							"picture" => "anhthe.JPG"),
				"3" => array("name" => "Nguyen Hue",
							"date_of_birth" => "2002-12-06",
							"address" => "Bac Ninh",
							"picture" => "anhthe.JPG"),
				"4" => array("name" => "Nguyen Du",
							"date_of_birth" => "1994-12-3",
							"address" => "Hue",
							"picture" => "anhthe.JPG")
			);

			function searchByDate($customers, $from_date, $to_date) {
				if (empty($from_date) && empty($to_date)) {
					return $customers;
				}
				$filtered_customers = [];
				foreach ($customers as $customer) {
					if (!empty($from_date) && (strtotime($customer['date_of_birth']) < strtotime($from_date))) 
						continue;
					if (!empty($to_date) &&(strtotime($customer['date_of_birth']) > strtotime($to_date)))
						continue;
					$filtered_customers[] = $customer;
				}
				return $filtered_customers;
			}
			
			$from_date = NULL;
			$to_date = NULL;
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$from_date = $_POST['from'];
				$to_date = $_POST['to'];
			}

			$filtered_customers = searchByDate($customerlist, $from_date, $to_date);
		 ?>
		 <table>
		 	<caption><h2>Danh sách khách hàng</h2></caption>
			  	<tr>
			    	<th>STT</th>
			    	<th>Tên</th>
			    	<th>Ngày sinh</th>
			    	<th>Địa chỉ</th>
			    	<th>Ảnh</th>
			  	</tr>
			  	<?php if(count($filtered_customers) === 0):?>
			    <tr>
			        <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
			    </tr>
			  	<?php endif; ?>
			 
			 	<?php foreach($filtered_customers as $index => $customer): ?>
			    <tr>
			        <td><?php echo $index + 1;?></td>
			        <td><?php echo $customer['name'];?></td>
			        <td><?php echo $customer['date_of_birth'];?></td>
			        <td><?php echo $customer['address'];?></td>
			        <td><div class="profile"><img src="<?php echo $customer['image'];?>"/></div> </td>
			    </tr>
			    <?php endforeach; ?>
		 </table>
	</table>
</body>
</html>