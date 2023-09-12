<?php

define("DB_HOST","localhost");
define("DB_NAME","index");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    if(mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else 
        return $db;
}

function executeQuery($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    foreach($result as $item){
        //errDubbger($item);
        echo "ID is => ".$item["id"]."<br>";
        echo "Name is => ".$item["name"]."<br>";
        echo "Email is => ".$item["email"]."<br>";
        echo "Password is => ".$item["password"];
        echo "<hr>";
    }
}

$qry = "SELECT * FROM users ORDER BY name DESC LIMIT 2,4"; //from 2(not include 2) next to 2
executeQuery($qry);

?>