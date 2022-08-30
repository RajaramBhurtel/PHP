<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fibonacci Series</title>
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
  $n=$_GET['number'];
  $number1 = 0;
  $number2 = 1;
  $number3 = 0;
  echo "<br>";
  echo "Fibonacci Series upto $n is: \n";
  echo $number1.' '.$number2.' ';
  for($i = 2; $i < $n; $i++){
  		$number3= $number1 + $number2;
  		if($number3 >= $n){
	  		break;
		}
		else{
			echo $number3.' ';
	    	$number1 = $number2;
	    	$number2 = $number3;
		}
  }
}
    ?>