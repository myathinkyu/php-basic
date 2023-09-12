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

function retrieveDataNewStyle($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if(mysqli_num_rows ($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            //echo "ID is " .$row["id"]."<br>";
            echo "Name is " .$row["name"]."<br>";
            //echo "Email is " .$row["email"]."<br>";
            //echo "Password is " .$row["password"]."<br>";
            echo "<hr>";
        }
    }
}

//$qry = "SELECT * FROM users WHERE extra is NULL";
$qry = "SELECT DISTINCT(name) FROM users WHERE extra is NULL";
retrieveDataNewStyle($qry);
?>