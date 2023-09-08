<?php

$var = rand();
echo $var . "<br>";

$end = getrandmax();
echo $end . "<br>";

echo rand (0,9). "<br>";

echo microtime(). "<br>";//0.57879

srand(microtime() * 100000);
echo rand(). "<br>";

echo mt_rand();
?>