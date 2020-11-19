<?php
$i = 0;
while ( $i< 5) {
	echo "$i";
	$i++;
	echo "</br>";
}
echo "===========";
echo "</br>";
//another way
$j=0;
while ($j++ < 5) {
	echo "$j";
	echo "</br> ";
}
echo "===========";
echo "</br>";

$j = 0;

while (++$j < 5) {
	echo "$j";
	echo "</br>";
}
echo "===========";
echo "</br>";