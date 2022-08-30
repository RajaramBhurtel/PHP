<?php
	function primeCheck($num){
		if($num == 1){
			return 0;
		}
		
		for($i=2; $i<=sqrt($num); $i++){
			if($num % $i == 0){
				return 0;
			}
		}
		return 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime or Not?</title>
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
  $flag = primeCheck($num);
  if($flag == 1){
  	echo "$num is a prime number.";
  }
  else{
  	echo "$num is not a prime number.";
  }
 
}
    ?>