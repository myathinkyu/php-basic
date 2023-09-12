<?php

define("DB_HOST","localhost");
define("DB_NAME","best");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    if(mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else 
        return $db;
}

function errDubbger($data){
    echo "<pre>". print_r($data,true). "</pre>";
}

function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    return $pass;
}

$users = json_decode(file_get_contents("user.json"));
//errDubbger($users);

/*foreach($users as $user){
    $pass = passGen($user->password);
    echo $user->name."<br>";
    $qry = "INSERT INTO users VALUES($user->id,'$user->name',$user->creator,
            '$user->email','$pass')";
    mysqli_query(dbConnect(),$qry);
}
*/

$subjects = json_decode(file_get_contents("subjects.json"));
/*foreach($subjects as $subject){
    
    //echo $subject->name."<br>";
    $qry = "INSERT INTO subjects (name) VALUES('$subject->name')";
    mysqli_query(dbConnect(),$qry);
}
*/

$tutorials = json_decode(file_get_contents("tutorial.json"));
$qry = "SELECT * FROM subjects";
$db = dbConnect();
$result = mysqli_query($db,$qry);
//$i = 1;

foreach($result as $item){
    //echo $item ["name"] . "id is ". $i++ ."<br>";
     
}

/*foreach($tutorials as $tutorial){
    $qry = "SELECT name FROM subjects WHERE id=$tutorial->subject_id";
    $result = mysqli_query($db,$qry);
    //errDubbger($result);

    $name = "";
    foreach($result as $row){
        $name = $row["name"];
    }

    //echo $name. "<br>";

    $subjectid = $tutorial->subject_id;
    $creator = $tutorial->creator_id;
    $t = 0;
    
    for($i = $tutorial->start_id; $i <= $tutorial->end_id; $i++){
        $title = $name . "" . ++$t;
        $qry = "INSERT INTO tutorials (subject_id,title,created_by) VALUES 
                ($subjectid,'$title',$creator)";
        mysqli_query(dbConnect(),$qry);
    }
}*/

$qry = "SELECT * FROM tutorials ";
$result = mysqli_query($db,$qry);
foreach ($result as $item){
    //echo $item["id"];
    $id = $item["id"];
    $static_view = mt_rand(1000,1000000);
    $unique_view = mt_rand(100,10000);

    echo $id . '<br>' . $static_view . '<br>' . $unique_view. "<hr>";

    $qry = "INSERT INTO tutorial_views VALUES ($id,$static_view,$unique_view)";
    mysqli_query(dbConnect(),$qry);
}





?>