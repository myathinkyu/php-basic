<?php

session_start();

if(!isset($_SESSION['name'])){
    header("Location:login_Session.php");

}

include "links.php";
 
?>

<h3>Member Page</h3>