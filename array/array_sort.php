<?php
$fruits = array('apple','banana','orange','plum','anything');
$fruitsKey = array('a'=>'apple','b'=>'banana','c'=>'orange','plum','anything');

//for sort used sort() function
sort($fruits);
print_r($fruits);

echo "</br>";
//for sort with key used asort();
asort($fruitsKey);
print_r($fruitsKey);

//rsort()  for reverse sort
//rasort() for reverse sort
//ksort()  for sort by key