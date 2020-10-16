<?php
$number=10;
$total=0;
while ($number <=20) {
	if($number % 2 ==0){
		echo "even number between 10 to 20 is:",$number,"<br>";
    $total = $total+$number;
	}
	$number++;
}
echo "sum of even number from 10 to 20 is:",$total;
?>