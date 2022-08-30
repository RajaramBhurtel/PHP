<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check leap year</title>
</head>
<body>
	<form method="Get" action="">
		<table>
			<tr><td>
				Please enter any year:
			</td></tr>
			<tr><td>
				<input type="number" name="years" min="1000" required>
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
  $year=$_GET['years'];
  if($year % 400 == 0){
  	echo $year. ' is a leap year.';
  }elseif($year % 100 == 0){
  	echo $year. ' is not a leap year.';
  }elseif($year % 4 == 0){
  	echo $year. ' is a leap year.';
  }else{
  	echo $year. ' is not a leap year.';
  }
}
    ?>