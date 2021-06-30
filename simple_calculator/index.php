<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>

</head>
<body>
	<h2>Simple Calculator</h2>
	<form method="POST">
		<table>
			<tr>
				<td>First operand:</td>
				<td><input type="text" name="first_num"></td>
			</tr>
			<tr>
				<td>Operator:</td>
				<td>
					<select name="operator">
						<option value="addition">Addition</option>
						<option value="subtraction">Subtraction</option>
						<option value="multiplication">Multiplication</option>
						<option value="division">Division</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Second operand:</td>
				<td><input type="text" name="second_num"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Calculate"></td>
			</tr>
		</table>
	</form>	
	<h2>Result:</h2>
	<?php 
		class Calculator {
			public $first_num;
			public $second_num;
			public $operator;

			public function __construct($first_num, $second_num, $operator)
			{
				$this->first_num = $first_num;
				$this->second_num = $second_num;
				$this->operator = $operator;
			}

			public function calculate() {
				if ($this->operator == "division" && $this->second_num == 0) {
					throw new Exception("Division by zero", 1);
				} else {
					switch ($this->operator) {
						case 'addition':
							return $this->first_num + $this->second_num;
							break;
						case 'subtraction':
							return $this->first_num - $this->second_num;
							break;
						case 'multiplication':
							return $this->first_num * $this->second_num;
							break;
						case 'division':
							return $this->first_num / $this->second_num;
							break;
						default:
							return 0;
							break;
					}
				}
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$calculator = new Calculator($_POST['first_num'], $_POST['second_num'], $_POST['operator']);
			try {
				echo $calculator->calculate();
			} catch (Exception $e) {
				echo "Error: ".$e->getMessage();
			}
		}
	 ?>
</body>
</html>