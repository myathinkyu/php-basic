<?php

$xml =<<<START
<coder>
    <name>Andrew</name>
    <age>45</age>
    <subject>java, python, react</subject>
    <address> no.32 latha</address>
    <married>No</married>
</coder>
START;

$data =simplexml_load_file("data.xml");
//print_r($data);

foreach($data as $key=>$val){
    echo $key . "=". $val . "<br>";
}

$data = simplexml_load_string($xml);
print_r($data);

?>