<?php

$i=0;

for($i=0; $i<10; $i++){
	echo "$i";
	echo "</br>";

	if ($i == 5) {
		break;
	}
}

echo "=========";

echo "</br>";

for($i=20; $i<50; $i++){
	if($i % 13 == 0){
		echo "$i";
		break;
	}
}
echo "</br>";
echo "=========";

for($i=20; $i<30; $i++){
	if($i<26){
		continue;
	}
	echo "</br>";
	echo "$i";
}


