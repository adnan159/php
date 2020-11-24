<?php

$fruits = array('apple','banana','orange','plum','anything');

$newfruits1 = array_slice($fruits, 0, 3);
$newfruits2 = array_slice($fruits, 3,null,true);//peserve key
print_r($newfruits1);
echo "</br>";
print_r($newfruits2);
echo "</br>";
//aray_merge() function can merge array.
$allFruits = array_merge($newfruits1, $newfruits2);
print_r($allFruits);

echo "</br>";
//another way we can merge array
//for array merge by this way we have to peserved key of array. 
$allFruits2new = $newfruits1 + $newfruits2;
print_r($allFruits2new);