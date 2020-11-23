<?php
$foods = [
	'vegitables' => explode(', ', 'brinjil, broclli, carrot, capsicam'),
	'fruits'	 => explode(', ','banana, apple, malta, orange'),
	'drinks'	 => explode(', ','water, juice, milk')
];

// print_r($foods);
//to push element on drinks
array_push($foods['drinks'],'orange jiuce');
// print_r($foods);

//to access any element of any array
echo $foods['vegitables'][3];

echo "</br>";

//another example of array

$sample = [
	'test' => [
		'test2' =>[
			'a',
			'b',
			'c'
		],
	],
];

echo $sample['test']['test2'][2];

echo "</br>";

$sample2 = [
	[1,2,3,4],
	[11,22,33,44],
	[111,222,333,444],
	[1111,2222,3333,[5,6,7]]
];

echo $sample2[3][3][2];