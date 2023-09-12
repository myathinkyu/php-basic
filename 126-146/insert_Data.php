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

function insertData($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result > 0 ? "Data Insert Successfully". mysqli_insert_id($db) : "Data Insert Fail";

}

function insertUniqueData($name,$email,$pass){
    $qry = "SELECT * FROM users WHERE name='$name'";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if(mysqli_num_rows($result) > 0){
        echo "Username is already in use!";  
    }else{
        $qry = "INSERT INTO users (name,email,password)
                VALUES ('$name','$email','$pass')";
        $result = mysqli_query($db,$qry);
        echo $result > 0 ? "Data insert successfully".mysqli_insert_id($db)  : "Data insert fail!" ;
    }
}

function multiInsertData($qry){
    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result > 0 ? "Data insert successfully". mysqli_insert_id($db) : "Data insert fail!" ;
}

function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    return $pass;
}

$pass = passGen(123);
//$qry = "INSERT INTO users VALUES (0,'Mg Mg','mgmg@gmail.com','$pass','')";
//insertData($qry);
//insertUniqueData('Aung Aung','aungaung@gmail.com',$pass);

$qry = "INSERT INTO users VALUES (0,'Tun Tun', 'tuntun@gmail.com', '$pass','');";
$qry .= "INSERT INTO users VALUES (0,'Su Su', 'susu@gmail.com', '$pass','');";
$qry .= "INSERT INTO users VALUES (0,'U Than', 'uthan@gmail.com', '$pass','');";
$qry .= "INSERT INTO users VALUES (0,'Daw Aye', 'dawaye@gmail.com', '$pass','');";

multiInsertData($qry);


?>