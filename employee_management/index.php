<!DOCTYPE html>
<html>
<head>
	<title>Employee Manager</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		td, th {
			width: 100px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<?php 
		include_once('Models/Employee.php');
		include_once('Services/EmployeeManager.php');

		use Models\Employee;
		use Services\EmployeeManager;

		$employee = new Employee('Nguyen', 'Son', '15/06/2000', 'Ha Noi', 'Fresher');
		$manager = new EmployeeManager();

		$manager->addEmployee(new Employee('Nguyen', 'Son', '15/06/2000', 'Ha Noi', 'Fresher'));
		$manager->addEmployee(new Employee('Cristiano', 'Ronaldo'));
	?>

	<h2>Danh sách nhân viên</h2>
	<table colspan>
		<thead>
			<tr>
				<th>Họ</th>
				<th>Tên</th>
				<th>Ngày sinh</th>
				<th>Địa chỉ</th>
				<th>Vị trí công việc</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($manager->getEmployees() as $employee) :
			?>
			<tr>
				<td><?php echo $employee->getFirstName() ?></td>
				<td><?php echo $employee->getLastName() ?></td>
				<td><?php echo $employee->getDateOfBirth() ?></td>
				<td><?php echo $employee->getAddress() ?></td>
				<td><?php echo $employee->getPosition() ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html