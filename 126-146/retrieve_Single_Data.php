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

function retrieveSingleData($id){
    $qry = "SELECT * FROM users WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $data){
            echo "ID is " . $data["id"] ."<br>";
            echo "Name is " . $data["name"] ."<br>";
            echo "Email is " . $data["email"] ."<br>";
            echo "Extra is " . $data["extra"] ."<br>";
            
        }
    }
}

function errDubbger($data){
    echo "<pre>". print_r($data,true). "</pre>";
}

$qry = "SELECT * FROM users";
retrieveSingleData(2);
?>