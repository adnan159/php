<?php

$n = 10;
//even odd
if($n%2 == 0){
	echo "This is a even number";
}else{
	echo "This is odd number";
}

echo "</br>";

//gether then 

if($n>10){
	echo "$n is Grather then 10";
}else{
	echo "$n is less then 10";
}


//logical operator

//== equal
//!= not equal
// > grather then 
// < less then
// && and
// || or


$alam = 100;
$rahim = 100;

echo "</br>";

if($alam==$rahim){
	echo "Alam and rahim has same money";
}elseif ($alam > $rahim) {
	echo "Alam has much money then Rahim";
}elseif ($alam< $rahim) {
	echo "Rahim has more money then Alam";
}




?>