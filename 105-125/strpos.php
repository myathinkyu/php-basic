<?php

$str = "The farmer decided to cut the goose and remove all the golden eggs from its stomach.";

echo strpos($str,"the")."<br>";
echo strrpos($str,"the")."<br>";
echo stripos($str,"the")."<br>";
echo stripos($str,"The");

?>