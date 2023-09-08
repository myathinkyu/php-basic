<?php

$file = "text.txt"; //file path
$handler = fopen($file,'r');//file open
$size = filesize($file);//file size
$data = fread($handler,$size);//reading file

echo $data; 
?>