<?php

$person = array('fname'=>'Osman', 'lname'=>'Haider');
print_r($person);

echo "</br>";

unset($person['lname']);//to remove data from assosiative array
print_r($person);
