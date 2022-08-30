<?php 
	for($row=1; $row<=5; $row++){
		for($cols=1; $cols<=5; $cols++){
			if($row==1 || $cols==1 || $row==5 || $cols==5){
				echo "*";
			}
			else{
				echo " &nbsp";
			}

		}
		echo "<br>";
	}


?>