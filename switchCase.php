<?php
$n= -13;
$r = $n % 2;

switch ($r) {
	case 0:
		echo "{$n} is an even number";
		break;
	
	default:
		echo "{$n} is an odd number";
		break;
}

echo "</br>";

$color = 'green';

switch ($color) {
	/*case 'green':
		echo "{$color} is my favourite color";
		break;
	case 'blue':
		echo "{$color} is my favourite color";
		break;
	*/

	case 'green':
	case 'blue':
		//echo ucwords($color)." is my favourite color"; //UC WORDS used to first letter capital
		echo $color." is my favourite color";
		break;
	default:
		echo "This color is ok!!";
		break;
}

echo "</br>";

//nasting switch case
switch ($r) {
	case 0:
		switch ($n) {
			case $n>0:
				echo "{$n} is positive Even number";
				break;
			case $n<0:
				echo "{$n} is an negative even Number";
				break;
		}
		break;
	default:
		switch ($n) {
			case $n>0:
				echo "{$n} is positive odd number";
				break;
			case ($n<0):
				echo "{$n} is negative odd number";
				break;
		}
}

echo "</br>";

//another way nasting switch case
switch (true) {
	case (0 == $r && $n >0):
		echo "{$n} is a positive even number";
		break;
	case (1 == $r && $n > 0):
		echo "{$n} is a positive odd number";
		break;
	
	case (0 == $r && $n < 0):
		echo "{$n} is a negative even number";
		break;
	case (-1 == $r && $n < 0):
		echo "{$n} is a negative odd number";
		break;
}

echo "</br>";
//another issue

$string = "8balls";
switch ($string) {
	case "9balls":
		echo "Nine balls";
		break;
	case 8:
		echo "something";//there is a issue
		break;
	case "8balls":
		echo "8balls";
		break;
}

echo "</br>";
//solution
$string = "8balls";
switch ($string) {
	case (string)"9balls":
		echo "Nine balls";
		break;
	case (string)8:
		echo "something"; //solved
		break;
	case (string)"8balls":
		echo "8balls";
		break;
}


