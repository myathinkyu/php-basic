<?php

//header("Location:Home.php");

$qry = $_SERVER['QUERY_STRING'];

switch ($qry) {
    case 'home': header("Location:home.php");
        break;
    case 'about': header("Location:about.php");
        break;
    case 'contact': header("Location:contact.php");
        break;
    
    default:
        echo "There is not file with that request sir!";
}
?>