<?php

$ary = array(
    "name" => "Andrew",
    "age" => 45,
    "subject" => "java, python, react",
    "address" => "no.32 latha",
    "married" => "No"
);

$str = "";
$str .= "<coder>";
foreach($ary as $key => $val) {
    $str.= "<". $key. ">";
    $str.= $val;
    $str.="</". $key. ">";
}

$str .= "</coder>";

//echo $str;

$handler = fopen("andrew.xml",'w');
fprintf($handler,"%s",$str);
?>