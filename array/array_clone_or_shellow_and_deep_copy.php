<?php
//copy by value
//deep copy
$person = array('fname' =>'Osman', 'lname' => 'Haider');
$newperson = $person;
$newperson['lname'] = 'Adnan';

print_r($person);
echo "</br>";
print_r($newperson);

echo "</br>";

//copy by reference 
//shallow copy
$person2 = array('fname' =>'Osman', 'lname' => 'Haider');
$newperson2 = &$person2;
$newperson['lname'] = 'Adnan';

print_r($person2);
echo "</br>";
print_r($newperson2);
