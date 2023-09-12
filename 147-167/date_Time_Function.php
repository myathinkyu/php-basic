<?php

date_default_timezone_set('Asia/Rangoon');
/*
$ary = getdate();
echo "<pre>" .print_r($ary,true)."</pre>";

//echo $ary ["minutes"];
//echo $ary["tday"];
echo "<hr>";
echo time();
*/

//date function 
$date = date('a',time());
$date = date('d',time());
$date = date('F',time());
$date = date('h',time());
$date = date('H',time());
$date = date('i',time());
$date = date('g:i:s',time());
$date = date('d-m-Y',time());
$date = date('D',time());
$date = date('l',time());
$date = date('L',time());
$date = date('M ',time());
$date = date('m',time());
$date = date('r',time());
$date = date('n',time());
$date = date('U',time());
$date = date('z',time());
$date = date('Z',time());


echo $date;

?>