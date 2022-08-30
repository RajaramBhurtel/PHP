<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table of a number</title>
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
			
		</table>
	</form>

</body>
</html>

<?php 
if(isset($_GET['submit'])){
	$num = $_GET['number'];
	echo "The table of $num is:<br> ";
	for($i=1; $i<=10; $i++){
		echo $num. " * " .$i. " = "	.$num*$i. "<br>";
	}
}
 


?>

