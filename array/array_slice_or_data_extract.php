<?php

$fruits = array('apple','banana','orange','plum','anything');
//to print 2nd offset to last
$someFruits = array_slice($fruits,2);
//to print to offset to second position
$someFruitsnew = array_slice($fruits,2,2);
print_r($someFruits);
echo "</br>";
print_r($someFruitsnew);

echo "</br>";

//to peserve data
$random = array("a" => 12, "b"=>20, "c"=>30, "d"=>40, 12=>60);
$randomData = array_slice($random,1,-1,true);
print_r($randomData);