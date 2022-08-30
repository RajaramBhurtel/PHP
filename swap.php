<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swap two numbers.</title>
</head>
<body>
	<form method="Get" action="">
		<table>
			<tr><td>
				Please enter first number:
			</td><td>
				<input type="number" name="number1" min="1" required>
			</td></tr>
			<tr><td>
				Please enter second number:
			</td><td>
				<input type="number" name="number2" min="1" required>
			</td></tr>
			<tr><td>
				<input type="submit" name="submit" value="Submit">
			</td></tr>
			
		</table>
	</form>

</body>
</html>

<?php 
if(isset($_GET['submit'])){
	$num1 = $_GET['number1'];
	$num2 = $_GET['number2'];
	echo "Befor Swapping <br>";
	echo "a = $num1  b = $num2 <br>";

	$num1 = $num1 + $num2;
	$num2 = $num1 - $num2;
	$num1 = $num1 - $num2;

	echo "After Swapping <br>";
	echo "a = $num1  b = $num2";
}
 


?>


