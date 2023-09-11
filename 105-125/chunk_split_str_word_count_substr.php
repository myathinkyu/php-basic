<?php

$str = "The farmer decided to cut the goose and remove all the golden eggs from its stomach.";
 
$var = str_word_count($str);
echo $var. "<br>";

$var = substr($str,25,strlen($str));//use
echo $var. "<br>";

$var = chunk_split($str,3,"^");
echo $var. "<br>";

?>