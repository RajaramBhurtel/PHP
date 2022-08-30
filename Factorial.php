<?php 
if(isset($_GET['submit'])){
	$num = $_GET['number'];  
	$factorial = 1;  
	for ($x=$num; $x>=1; $x--)   
	{  
	  $factorial = $factorial * $x;  
} 
}
 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorial of any number</title>
</head>
<body>
	<form method="Get" action="">
		<table>
			<tr><td>
				Please enter any number:
			</td></tr>
			<tr><td>
				<input type="number" name="number" min="1" required>
			</td></tr>
			<tr><td>
				<input type="submit" name="submit" value="Submit">
			</td></tr>
			<tr><td>
				<?php
				if(isset($_GET['submit'])){
				 echo "Factorial of $num is $factorial"; 
				 } ?>
			</td></tr>
		</table>
	</form>

</body>
</html>