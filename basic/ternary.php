<?php

$n =13;

$result = ($n % 2 == 0) ? "{$n} is a Even Number" : "{$n} is a odd number";
echo $result;

//

$output = ($n % 2 == 0) ? "Even" : (($n == 11) ? "Odd" : "Nothing");
echo "$output";