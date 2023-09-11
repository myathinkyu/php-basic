<?php

$num = 500000;
$city = "Yangon";
$val = 50.5;

printf("There are %u of people in %s. Double value is %f",$num,$city,$val);

$file = "print.txt";
$handler = fopen($file,'w');
fprintf($handler,"There are %u of people in %s. Double value in %f.",$num,$city,$val);

?>