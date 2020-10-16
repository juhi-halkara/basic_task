<?php
$number=0;
$total=0;
while ($number <=10) {
	if($number % 2 ==1){
    $total = $total+$number;
	}
	$number++;
}
echo "sum of odd number from 1 to 10 is:",$total;
?>