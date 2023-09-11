<?php

$ary = array();

echo count($ary) . "<br>";//0

array_push($ary,"what's up");//insert data into array
array_push($ary,"brother");
array_push($ary,"sister");

echo count($ary). "<br>";//1
echo $ary[2]. "<br>";
print_r($ary). "<br>";

array_pop($ary);
print_r($ary);

array_shift($ary);
print_r($ary);

?>