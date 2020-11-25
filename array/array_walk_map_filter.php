<?php

$number = array(1,2,3,4,5,6,7,8,9);
//array walk work to every element of array

function square($n){
	printf("Square of %d is %d", $n, $n*$n);
	echo "</br>";
}

function cube($n){
	return $n*$n*$n;
	echo "</br>";
}

function isEven($n){
	return $n%2 == 0;
}
array_walk($number, 'square');

//array_map() is same as array_walk(), but it can return value
$newArray = array_map('cube', $number);
print_r($newArray);
echo "</br>";

$newArray2 = array_filter($number,'isEven');
print_r($newArray2);

$students = array('sujan', 'kabir', 'rony', 'Shamim', 'tanvir');

function filterS($name){
	if($name[0]=='s'|| $name[0]=='S'){
		return $name;
	}
}

$newStudents = array_filter($students, 'filterS');

print_r($newStudents);

