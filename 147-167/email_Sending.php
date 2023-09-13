<?php

$ary = ["myathinkyu@localhost,mary@localhost,test@localhost"];
$to = implode(',',$ary);
$subject = "PHP Mail Test";
//$message = "I am just testing to make sure my PHP mailing system is work,don't take serious!";



$message ='<html><body>';
$message .= '</body></html>';
$message .= '<div style="width: 80%;margin: 0 auto;border: 1px solid #ddd;padding: 20px;overflow: auto">';
$message .= '<h1 style="text-align: center; font-family: Cambria;color: red;">PHP Mail Test by myatk</h1>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 18px;color: #999";>PHP is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications.
PHP is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications.
</p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 18px;color: #999";>PHP is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications.
PHP is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications.
</p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 18px;color: #999;float: right;clear: both;">Your Sincerely!</p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 18px;color: #999;float: right;clear: both">myathinkyu</p>';
$message.= '<img src="c:\Users\ASUS\Downloads\girl.png">';

$header = "From: PKT@gmail.com\r\n";
$header .= "Content-Type:text/html" ;
$bol = mail($to,$subject,$message,$header);
echo $bol ? "Message Successfully Sent!" : "Message Sending Fail!";


?>