<?php


//anchors
/*
preg_match("//",$var);

$bol = preg_match("/mar/", $var);
$bol = preg_match("+mar+", $var);
$bol = preg_match("!mar!", $var);
$bol = preg_match("#mar#", $var);
$bol = preg_match("%mar%", $var);
$bol = preg_match("/^$/",$var);
$bol = preg_match("/php/",$var);
$bol = preg_match("/p\wp/i",$var);


// check sequence,case sensitive
//^word
//^word$
//word$
  
echo $bol ? "TRUE" : "FALSE" ;
*/

//character class
/*
$bol = preg_match("/[1-9]/",$var);
$bol = preg_match("/^[a-z]/",$var);
$bol = preg_match("/[a-z] || [A-Z]/",$var);

echo $bol ? "TRUE" : "FALSE";
*/

//quatifiers
// $bol = preg_match("/p+/",$var);
// $bol = preg_match("/p*/",$var);//p?
// $bol = preg_match("/p{3}/",$var);
// $bol = preg_match("/p{1,5}/",$var);
// $bol = preg_match("/p{2,}/",$var);
// $bol = preg_match("/./",$var);
// $bol = preg_match("/p.p/",$var);
// $bol = preg_match("/^.{2}$/",$var);
// $bol = preg_match("/<b>(.*)<\/b>/",$var);
// $bol = preg_match("/p(hp)*/",$var);
// $bol = preg_match("/\d/",$var);
// $bol = preg_match("/\D/",$var);
// $bol = preg_match("/\s/",$var);
// $bol = preg_match("/\S/",$var);
// $bol = preg_match("/\w/",$var);
// $bol = preg_match("/\W/",$var);


//echo $bol ? "TRUE" : "FALSE";

//predefined character
/*
$result = preg_replace('/[[:alpha:]]/',"@",$var);
$result = preg_replace('/[[:digit:]]/',"",$var);
$result = preg_replace('/[[:alnum:]]/',"---",$var);
$result = preg_replace('/[[:space:]]/',"_",$var);

$data = preg_replace('/[[:space:]]/',"_",$var);
$result = preg_match('/\s/',$data);//space bar

//echo $result;
echo $result ? "TRUE" : "FALSE" ;
*/

/*
$var = "PHP@gmail.com";

$result = preg_match("/^[a-zA-Z]+@[a-z]+\.[a-z]{3}$/",$var);

echo $result ? "TRUE" : "FALSE";
echo "<hr>";

$var = "People are men and women";

if(preg_match('/men/', $var))
    echo  "men are cheaters.<hr>";

if(preg_match('/women/', $var))
    echo  "women like milktea.";
*/

/*
$var = "Brighter Myanmar Copyright @ 2009";

$result = preg_replace("/[[:digit:]]+/","2011",$var);
$result = preg_replace("/\s/","_",$var);

$result = preg_replace(
    array('/copyright/i','/[0-9]+/'),
    array('Computer Class','2011'),
    $var
);

echo $result;
*/
/*
$var = "jnkk<span style='color:red'>maybel</span>";
$result =  preg_replace("/<span style='color:red'>.*<\/span>/","",$var);
echo $result;
*/

//preg_split function
//$str = "There is a need, there is a way.";
// $ary = preg_split("//",$str,5,PREG_SPLIT_OFFSET_CAPTURE);
// echo "<pre>" .print_r($ary,true)."</pre>";

//preg_match_all function
/*
$str = "We start learning PHP at 7:30 AM and finish learning at 5:30 PM";

preg_match_all("/(\d+:+\d+)\s*(AM|PM)/",$str,$matches,PREG_SET_ORDER);

echo "<pre>" .print_r($matches,true)."</pre>";

preg_match_all("/(\d+:+\d+)\s*(AM|PM)/",$str,$matches,PREG_PATTERN_ORDER);

echo "<pre>" .print_r($matches,true)."</pre>";
*/

//posix special character
$str = "There is a 40 men in the pool!";
echo $str. "<hr>";

$result =preg_quote($str,'4');
echo $result;

?>
