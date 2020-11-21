<?php

$condition1 = false;
$condition2 = true;
$condition3 = false;

if($condition1){
	if ($condition2) {
		if($condition3){
			echo "hello";
		}else{
			echo "false 1";
		}
	}else{
		echo "false 2";
	}
}else{
	echo "false 3";
}

if($condition1 && $condition2 && $condition3){
	echo "hello";
}elseif ($condition1 && $condition2) {
	echo "false 1";
}elseif ($condition2 && $condition3) {
	echo "false 2";
}else{
	echo "false 3";
}