<?php
$students = array(
	"omuk",
	"tomuk",
	"se",
	"nam nai"
);

$n = count($students);
//assending order
for($i=0; $i < $n ; $i++){
	echo $students[$i];
	echo "</br>";
}
//decending order show
for($i=$n-1; $i >= 0 ; $i--){
	echo $students[$i];
	echo "</br>";
}