<?php

$str = "A1BC";
//positive look aheade
$bol = preg_match('/A(?=C)/', $str);
$bol = preg_match('/A(?=\d)/', $str);

//positive look behind
$bol = preg_match('/(?<=B)C/', $str);
$bol = preg_match('/(?<=\d)B/', $str);

//negative look ahead
$bol = preg_match('/A(?!\d)/', $str);

//negative look behind
$bol = preg_match('/(?<!\d)C/', $str);



echo $bol ? "TRUE" : "FALSE";

?>