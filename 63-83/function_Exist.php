<?php

function doIt(){
    echo "I am doit function.";
}

$var = "dot";

$bol = function_exists($var);

if($bol)
    $var();
else
    echo "Function is not exist";

?>