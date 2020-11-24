<?php

$student = array(
	'fname'	=> 'Osman',
	'lname'	=> 'Haider',
	'age'	=> '27',
	'class'	=> '14',
	'section' => 'A'
);
//to access array data
echo $student['fname']. " ".$student['lname'];
echo "</br>";
//another way
printf("%s %s",$student['fname'],$student['lname']);
echo "</br>";

//to convert array to string
//it used to store database or anywhere
$serialized = serialize($student);

$newstudent = unserialize($serialized);
print_r($newstudent);

$jesondata = json_encode($student);
echo "</br>";
echo $jesondata;

$student2 = json_decode($jesondata);
echo "</br>";
print_r($student2);
