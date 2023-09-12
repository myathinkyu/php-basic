<?php

define("DB_HOST","localhost");
define("DB_NAME","index");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    //errDubbger($db);
    echo mysqli_connect_errno() > 0 ? "Connection Error" : "Connection Success";// include mistake greater than 0

    if(mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else 
        return $db;
}

function errDubbger($data){
    echo "<pre>". print_r($data,true). "</pre>";
}

errDubbger(dbConnect());
?>