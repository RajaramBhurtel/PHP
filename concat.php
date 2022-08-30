

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Concat two string</title>
</head>
<body>
	<form method="Get" action="">
		<table>
			<tr><td>
				Please enter 1st string:
			</td><td>
				<input type="string" name="str1" required>
			</td></tr>
			<tr><td>
				Please enter 2nd string:
			</td><td>
				<input type="string" name="str2" required>
			</td></tr>
			<tr><td>
				<input type="submit" name="submit" value="Submit">
			</td></tr>
			<tr><td>
				<?php 
					if(isset($_GET['submit'])){
						$str1 = $_GET['str1'];  
						$str2 = $_GET['str2']; 
						$factorial = 1; 
						echo "Before concatination: " ;
						echo "1st String = " .$str1. " 2nd String = " .$str2. "<br>";
						echo "After concatination: " ;
						echo "Result: " .$str1.$str2;
					}
					?>
			</td></tr>
		</table>
	</form>

</body>
</html>