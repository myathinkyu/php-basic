<?php

$a = 50;
$b = &$a;

$b = 70;

echo "Variable A value now is => " .$a;
echo "<br>";
echo "Variable B value now is => " .$b;
echo "<hr>";
?>

<?php

$age = 20;
function myFunc($age){
    $age = 60;
    echo $age;
    echo "<br>";
}

myFunc($age);
echo $age; 

?>