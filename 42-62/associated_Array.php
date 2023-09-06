<?php

$ary = array();

$ary["First"] = "Toyota";
$ary["Second"] = "Alphard";
$ary["Third"] = "Crown";
$ary["Fourth"] = "prado";
$ary["Fifth"] = "kluger";
$ary["Sixth"]="Wish";

echo $ary["Sixth"];

?>

<?php

$ary = array("One"=>"TOYOTA","Two"=>"WISH","Three"=>"PRADO","Four"=>"CROWN");

echo $ary["Three"];
echo count($ary);

?>