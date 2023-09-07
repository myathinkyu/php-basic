<?php

    if(isset($_POST['submit'])){
        if(isset($_POST['color'])){
        $colors = $_POST['color'];

            foreach ($colors as $color) {
            echo $color . "<br>";
            }
        }
    }

?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type="checkbox" name="color[]" value="red"> Red <br><br>
    <input type="checkbox" name="color[]" value="blue"> Blue <br><br>
    <input type="checkbox" name="color[]" value="green"> Green <br><br>
    <input type="checkbox" name="color[]" value="rainbow"> Rainbow <br><br>
    <input type="submit" name="submit" value="Choose">


</form>