<?php

$file = "error.txt";

try{
    if(file_exists($file))
        echo "file exist";
    else
        throw new Exception("File not found!");
}catch(Exception $e){
    die($e->getMessage());
}

echo "hello world!";
?>