<?php
$fruits = array('a'=>'Apple', 'b'=>'Banana', 'c'=>'coconat','d'=>'orange','e'=>'pineapple');
$numbers = array(1,2,3,4,5,'6',7,8,9);

//index array serach
if(in_array(6, $numbers)){
	echo "6 exists";
}

echo "</br>";

//serach the opsition of value in index array
//if there is same value in for multiple time, then the result will show for first one
$offset = array_search(8, $numbers);
echo "{$offset}";

echo "</br>";

//assosiative array search by key

if(key_exists('b',$fruits)){
	echo "Key b exists";
}