<?php

$ary = array(
    array("One", "Two", "Three", "Four"),//0
    array("Five","Six","Seven"),//1
    array("Eight", "Nine")//2
);

for($i=0; $i < count($ary); $i++){
    print_r($ary[$i]);
}

?>

<?php

for($i = 0; $i < count($ary); $i++){
    for($j = 2; $j < count($ary[$i]); $j++){
        echo $ary[$i][$j]. '';
    }
    echo "<hr>";
}

?>