<?php

function createFile($filename){
    $h = fopen($filename,'w');
    fclose($h);
}

function writeFile($filename,$data){
    $h = fopen($filename,'w');
    fwrite($h,$data);
    fclose($h);
}

function appendFile($filename,$data){
    $h = fopen($filename,'a');
    fwrite($h,$data);
    fclose($h);
}

function readMyFile($filename){
    $h = fopen($filename,'r');
    $size = filesize($filename);
    $data = fread($h,$size);
    fclose($h);
    return $data;
}

//writeFile('best.txt', 'i am bad.')
//appendFile('best.txt',' you are good.')
echo readMyFile('best.txt');

?>