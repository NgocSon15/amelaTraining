<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$str1 = "s * (s – a) * (s – b) * (s – c)";
		$str2 = "(– b + (b2 – 4*a*c)^0.5) / 2*a";
		$str3 = "s * (s – a) * (s – b * (s – c)";
		$str4 = "s * (s – a) * s – b) * (s – c)";
		$str5 = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))";

		function bracketCheck($str)
		{
			$stack = new SplStack();
			for ($i = 0; $i < strlen($str); $i++)
			{
				if ($str[$i] == '(')
				{
					$stack->push($str[$i]);
				} else if ($str[$i] == ')') {
					if ($stack->isEmpty()) 
						return false;
					else {
						$left = $stack->pop();
					}
				}
			}
			if (!$stack->isEmpty())
				return false;
			return true;
		}

		echo bracketCheck($str1) ? 'True' : 'False';
		echo bracketCheck($str2) ? 'True' : 'False';
		echo bracketCheck($str3) ? 'True' : 'False';
		echo bracketCheck($str4) ? 'True' : 'False';
		echo bracketCheck($str5) ? 'True' : 'False';
	?>
</body>
</html>