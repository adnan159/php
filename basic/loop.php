<?php

for($i = 0; $i < 10; $i++){
	for ($j=0; $j < $i ; $j++) { 
		echo "*";
	}
	echo "</br>";
}

$i=0;
while ($i < 10) {
	$i++;
	echo "$i";
	echo "</br>";
}

$i=0;
do{
	$i++;
	echo "$i";
	echo "</br>";

}while ($i < 10);

//for loop staping

for ($i=10; $i >0 ; $i--) { 
	echo $i.":".(11-$i);
	echo "</br>";
}

//another way 

for ($i=10, $j=1; $i > 0; $i--,$j++) { 
	echo "$i:$j";
	echo "</br>";
}

//factorial

$n = 5;
$fact = 1;
for($i=$n; $i >= 1; $i--){
	$fact = $fact*$i;
}

echo "The factorial of {$n} is {$fact}";
