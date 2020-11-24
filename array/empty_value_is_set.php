<?php
$name= '';

if(isset($name)){
	echo "Name is set";
}else {
	echo "Name is not set";
}

echo "</br>";

if(empty($name)){
	echo "Name is Empty";
}else{
	echo "Name is not Empty";
}

echo "</br>";

/*
there is a problem when we check by isset() function and empty() function. when we put 0 in variable that variable is not empty, but empty() show empty. 

to recover this we can use differnet way is below
*/
if(isset($name) && (is_numeric($name) || $name != '')){
	echo "Name is set and ist's not Empty";
}else{
	echo "Name is either not set or it's empty";
}
