<?php

$person = array('fname'=>'Osman', 'lname'=>'Haider');
print_r($person);

echo "</br>";

unset($person['lname']);
print_r($person);
