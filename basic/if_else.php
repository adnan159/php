<?php
//leaf year

$year=2012;

if($year%4==0 && $year%100 == 0 && $year%400==0){
	echo "{$year} is a leaf year!";
}elseif ($year%4 == 0 && $year%100 == 0) {
	echo "{$year} is not a leaf year";
}elseif ($year%4 == 0) {
	echo "{$year} is a leaf year";
}else{
	echo "{$year} is not a leaf year";
}

echo "</br>";

if($year%4==0 && ($year%100!=0 || $year%400==0)){
	echo "{$year} is a leaf year!";
}else{
	echo "{$year} is not a leaf year";
}