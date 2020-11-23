<?php
//', ' is a dalimeter
//we can pass one dalimeter in php
//string to array convert used explode
$fruits = explode(', ','banana, apple, orange, malta');
//array to string convert used join
$fruitsString = join(', ',$fruits);
echo $fruitsString;
echo "</br>";
echo count($fruits);

//for multiple dalimeter we can use preg_split() function
$fruitsNew = preg_split('/(, |,)/','banana, apple, orange, malta,something,nothing');
$fruitsStringNew = join(', ',$fruits);
print_r($fruitsNew);
echo "</br>";