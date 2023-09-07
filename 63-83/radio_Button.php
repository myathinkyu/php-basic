<?php

    if(isset($_POST['submit'])){
        $color = $_POST['myRadio'];
        echo $color;
    }

?>

<form action="<?php $_PHP_SELF ?>"  method="post">
    <h3> Choose your best color</h3>
    <input type="radio" name="myRadio" value="Red"> Red <br><br>
    <input type="radio" name="myRadio" value="Green"> Green <br><br>
    <input type="radio" name="myRadio" value="Blue"> Blue <br><br>
    <input type="radio" name="myRadio" value="Yellow"> Yellow <br><br>
    <button type="submit" name="submit">Choose</button>
</form>