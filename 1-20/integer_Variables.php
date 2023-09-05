<?php
//integer
$num_1 = 40;
$num_2 = 20;
 echo $num_1 + $num_2;

?>

<?php

$num_1 = 40;
$num_2 = '40';
echo $num_1 === $num_2;

?>

<?php

$num_1 = 40;
$num_2 = 80;
echo $num_1 . $num_2;

?>

<?php

$amount = 123123;
 var_dump(PHP_INT_MAX);
echo PHP_INT_MAX;
echo "<br>";
var_dump(PHP_INT_MIN);

?>

<?php

$name = "myat";
$bol = is_int($name);
 var_dump($bol);
echo "<br>";
$age = 21;
$bol = is_int($age);
 var_dump($bol);

?>
