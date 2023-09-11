<?php

$pass = "123456";

$pass = md5($pass,false);
echo $pass. "<br>";

$pass = sha1($pass,true);
echo $pass. "<br>";

$pass = crypt($pass, "CM");
echo $pass. "<br>";

$pass = md5($pass);
$pass = sha1($pass);
$pass = crypt($pass, $pass);

echo $pass;

?>