<?php
require_once('functions.php');

$n = 13;

if (isEven($n)) { //n is an argument
	echo "{$n} is an Even Number";
}else{
	echo "{$n} is an Odd Number";
}
