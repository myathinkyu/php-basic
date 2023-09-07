<?php

/*if(isset($_GET['submit'])){
    echo "Submit button was click";
}
*/
?>


<form action="<?php $_PHP_SELF ?>" method="get">
    <input type="text" name="username" placeholder="User Name"><br><br>
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Register</button>
</form>

<?php
/*
if(isset($_GET['submit'])){
    $uname = $_GET['username'];
    echo "Your username is " .$uname ;
}
*/
?>

<?php

if(isset($_GET['submit'])){
    $name = $_GET['username'];
    $pass = $_GET['password'];

    echo "Your username is " . $name . "<br>";
    echo "Your password is " . $pass;
}


?>