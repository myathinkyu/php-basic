<?php

define("DB_HOST","localhost");
define("DB_NAME","index");
define("DB_USER","root");
define("DB_PASS","");

function updateData($qry){
    $db = dbConnect();
    $result =  mysqli_query($db,$qry);
    echo $result ? "Data insert successfully". mysqli_insert_id($db) : "Data insert fail!" ;

}

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    if(mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else 
        return $db;
}


$qry = "UPDATE users SET name='Aye Mya' WHERE name='Daw Aye'";
//create table
$qry = "CREATE TABLE subject(
        id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
        name VARCHAR(225) UNIQUE NOT NULL , 
        created_at date,
        updated_at date);";
//updateData($qry);

$result = mysqli_query(dbConnect(),$qry);
echo $result ? "Table created successfully" : "Table creation fails!" ;

?>