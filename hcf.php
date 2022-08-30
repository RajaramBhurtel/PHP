<?php 
function hcf($x, $y) {
  if ($y == 0)
    return $x;
  return hcf($y, $x % $y);
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HCF of two numbers</title>
</head>
<body>
	<form method="Get" action="">
		<table>
			<tr><td>
				Please enter 1st number:
			</td><td>
				<input type="number" name="number1" min="1" required>
			</td></tr>
			<tr><td>
				Please enter 2nd number:
			</td><td>
				<input type="number" name="number2" min="1" required>
			</td></tr>
			<tr><td>
				<input type="submit" name="submit" value="Submit">
			</td></tr>
			<tr><td>
				<Br>
				<?php
				if(isset($_GET['submit'])){
						$num1 = $_GET['number1'];
						$num2 = $_GET['number2'];
				 		echo "HCF of $num1 and $num2 is " .hcf($num1,$num2); 
				 } ?>
			</td></tr>
		</table>
	</form>

</body>
</html>