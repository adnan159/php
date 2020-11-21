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
function factorial($x){
	$factorial = 1;
	for($i = $x; $i > 1; $i--){
		$factorial *= $i;
	}
	return $factorial;
}

