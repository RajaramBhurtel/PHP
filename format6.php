<?php
for($i=1; $i <= 5; $i++){
	for($j=1; $j<=$i; $j++){
		for($k=1; $k<=$j; $k++){
			echo "*";
		}
	}
	for($j=1; $j<=$i; $j++){	
		echo "0";	
	}
	echo "<br>";
}

?>