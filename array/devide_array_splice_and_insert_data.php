<?php

$fruits = array('apple','banana','orange','plum','coconat');
$newFruits = array('jack','new-fruits','another');
$someFruits = array_splice($fruits, -4,2,$newFruits);
print_r($someFruits);
echo "</br>";
print_r($fruits);
echo "</br>";
print_r($someFruits);