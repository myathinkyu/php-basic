<?php

$num = 0;

while($num <= 10){
    if($num == 5){
        break;
    }else{
        echo "value now is $num<br>";
        $num++;
    }
}

?>

<?php

$num = 0;

while($num <= 10){
    if($num == 5){
        $num++;
        continue;
    }else{
        echo "value now is $num<br>";
        $num++;
    }
}

?>