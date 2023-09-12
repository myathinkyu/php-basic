<?php

session_start();
session_destroy();

//unset($_SESSION['name']);
//unset($_SESSION['password']);

header("Location:login_Session.php");

include "links.php";

?>

<h3>Logout Page</h3>

