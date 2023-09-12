<?php

define("DB_HOST","localhost");
define("DB_NAME","index");
define("DB_USER","root");
define("DB_PASS","");

function deleteData($name){
    $qry = "DELETE FROM users WHERE name='$name'";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Deleted" : "Delete Fail!" ;
}

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    if(mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else 
        return $db;
}

deleteData("Mg Mg");

?>