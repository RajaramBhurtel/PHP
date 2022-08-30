<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LCM of two numbers</title>
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
						$n1 = $num1 = $_GET['number1'];
						$n2 = $num2 = $_GET['number2'];
						while($n1 != $n2){
							if ($n1 > $n2){
								$n1 = $n1 - $n2;
							}
							else{
								$n2 = $n2 - $n1;
							}
						}
						$lcm = ($num1*$num2)/$n1;

				 		echo "LCM of $num1 and $num2 is " .$lcm; 
				 } ?>
			</td></tr>
		</table>
	</form>

</body>
</html>