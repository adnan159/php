<?php

$x = 50;
$y =10;

$result = $x<=>$y;

if($result==1){
	echo "{$x} is grather then {$y}";
}elseif ($result==0) {
	echo "{$x} is equal to {$y}";
}else{
	echo "{$x} is smaller then {$y}";
}
