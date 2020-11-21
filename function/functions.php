<?php
//odd even finction
function isEven($x){ //x is a perameter
	if($x % 2 == 0){
		return true;
	}
	/*
	else{
		return false;
	}
	*/
	return false;
}

//factorial function
function factorial(int $x){ //accept int type of value.. (type hinting)
	$factorial = 1;
	for($i = $x; $i > 1; $i--){
		$factorial *= $i;
	}
	return $factorial;
}

//multiple perameter
/*function serve($type,$item){
	echo "{$item} of {$type} is served";
}*/

//default perameter
function serve($type = 'Water', $item = 1){
	echo "{$item} bottole of {$type} is served";
}

//return type fixed
function fixd($x,$y,$z):int{//value shuld be integer
	return $x+$y+$z;
}

