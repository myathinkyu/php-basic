<?php

$file = "mine.txt";
$h = fopen($file,'w');
fwrite($h,"Bother to you");
fclose($h);

?>