<?php

session_start();

if(isset($_POST['submit'])){
    $user = $_POST['name'];
    $pass = $_POST['password'];
    //echo "Name is " . $user ." and Password is ". $pass;
    
    if($user == "mya" && $pass == "123"){
        $_SESSION['name'] = $user;
        $_SESSION['password'] = $pass;
        header("Location:member.php");
    }else
        echo "You are not a valid user";
}

include "links.php";

?>

<h3>Index Page</h3>
<form action="<?php $_PHP_SELF; ?>" method="post">
      <input type="text" name="name" placeholder="username"><br><br>
      <input type="password" name="password"><br><br>
      <button type="submit" name="submit">Login</button>
</form>
     

