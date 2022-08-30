<?php

$numbers = array(30000,11,125,23,34,3,338, 765, 8, 2, 111);
$smallest = $numbers[0];
$length = count($numbers);
echo "Elements of the array:";
for($i=0; $i<$length; $i++){
	echo $numbers[$i]. "\n";
}
echo "<br>";
for($i=1; $i<$length; $i++){
	if($numbers[$i]<$smallest){
		$smallest = $numbers[$i];
	}
}
echo "The smallest number in the array is $smallest";

?>