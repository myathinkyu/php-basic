<?php

function readMyFile($filename){
    if(file_exists($filename)){
        $data = file_get_contents($filename);
        return $data;
    }else{
        echo "file not found!";
    }   
}

echo readMyFile("text.txt");
?>