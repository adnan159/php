<?php
//assosiative array
$foods = [
	'vegitables' => 'tomato, Onion, carrot, capsicam',
	'frutis'	 => 'apple, Orange, Benana',
	'drinks'	 => 'Water, milk'
];
//to access assosiative array
echo $foods['vegitables'];
echo "=============</br>";

//to access assosiative array by loop
$n = count($foods);

foreach ($foods as $key => $value) {
	echo $key."=".$value;
	echo "</br>";
}
echo "=============</br>";

//another way
$keys = array_keys($foods);
$n = count($keys);
for ($i=0; $i < $n ; $i++) { 
	$key = $keys[$i];
	echo $foods[$key];
	echo "</br>";
}