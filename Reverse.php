<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reverse number</title>
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
if (isset($_GET['submit'])) {
  $num=$_GET['number'];
  $reverse = 0;
  $temp = $num;
  while ($temp > 1) {
  	$rem = $temp%10;
  	$reverse = ($reverse*10 )+ $rem;
  	$temp = $temp/10;
  }
  echo "The reverse of $num is $reverse" ;
}
    ?>