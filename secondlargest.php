<?php

$numbers = array(0,11,125,23,34,3,338, 765, 8, 2, 111);
$largest = $numbers[0];
$slargest;
$length = count($numbers);
echo "Elements of the array:";
for($i=0; $i<$length; $i++){
	echo $numbers[$i]. "\n";
}
echo "<br>";
for($i=1; $i<$length; $i++){
	if($numbers[$i]>$largest){
		$slargest = $largest;
		$largest = $numbers[$i];
	}else if($slargest<$numbers[$i] && $slargest < $largest){
		$slargest = $numbers[$i];
	}
}
echo "The Second largest number in the array is $slargest";

?>