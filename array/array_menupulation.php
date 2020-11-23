<?php

//array_shift(); to remove first element from array
//array_unshift(); for data entry in first element of array
//array_pop(); to remove last element from array
//array_push(); for data entry last element of array

$students = array(
	"omuk",
	"tomuk",
	"se",
	"nam nai"
);

//array_shift($students); //remove first element of array

$students[2] = "adnan";// to entry data in 02 index;

// $newStudent = array_shift($students);
// echo "$newStudent";

$studentNew = array_unshift($students, 11224);

//array_pop($students);
$n = count($students);

for($i=0; $i < $n ; $i++){
	echo $students[$i];
	echo "</br>";
}


