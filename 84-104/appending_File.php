<?php

$file = "mine.txt";
$h = fopen($file, 'a');
fwrite($h,". Today is special day for us.");
fclose($h);

?>