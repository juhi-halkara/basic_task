<?php
$sum = 0 ;
$arr1 = [21,32,24,58,43,53,98,33,55,98,90];
foreach ($arr1 as $value) {
	echo "$value,";
}
 echo "<br> sum of array element is:";
 //echo array_sum($arr1);
 for ($i=0; $i < count($arr1) ; $i++) { 
 	//$sum = $arr1[i];
 	$sum = $sum + $arr1[$i];
 }
 echo $sum;
?>