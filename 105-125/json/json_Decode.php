<?php

$file = "code.json";
$handler = fopen($file, 'r');
$json = fread($handler,filesize($file));

$arys = json_decode($json);

//print_r($arys);


foreach($arys as $key => $vals ){
    foreach ($vals as $val){
        echo "Key is ".$key." and value is ". $val. "<br>";
    }
}






?>