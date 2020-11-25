<?php
$numbers1 = array(1,2,3,4,5,44,55,66);
$numbers2 = array(2,3,65,34,56,23,41);

$fruits1 = array('a'=>'Apple', 'b'=>'Banana', 'c'=>'coconat');
$fruits2 = array('d'=>'orange','e'=>'pineapple','f'=>'lemon', 'c'=>'coconat');

//it will show common value of tow array and print first arrays common element.
$common = array_intersect($numbers1, $numbers2);
//array_intersect_assoc() used to common value with key
$commonf = array_intersect_assoc($fruits1, $fruits2);
print_r($common);
echo "</br>";
print_r($commonf);

//to see difference 

$diff = array_diff($numbers1, $numbers2);
$difff = array_diff_assoc($fruits1, $fruits2);
echo "</br>";
print_r($diff);
echo "</br>";
print_r($difff);
