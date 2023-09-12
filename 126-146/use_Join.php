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


$qry = "SELECT 
        ur.name AS User_Name,
        ur.id AS User_id,
        COUNT(tuto.id) AS Total_Tutorial,
        (
        CASE WHEN
           COUNT(tuto.id) <= 30
           THEN
               'right'
            ELSE
               'Genius'
            END    
        ) AS teacher_type,
        SUM(tv.static_view) AS Total_Static_View,
        SUM(tv.unique_view) AS Total_Unique_View,
        sub.name AS Subject


        FROM 
           users AS ur
        JOIN      
           tutorials AS tuto
        ON
           ur.id = tuto.created_by
        JOIN
           tutorial_views AS tv
        JOIN
           subjects AS sub
        ON
           tuto.subject_id = sub.id
        WHERE
           ur.creator = 4
        GROUP BY
            tuto.created_by
        
";

$result = mysqli_query(dbConnect(),$qry);
//errDubbger($result);

foreach ($result as $value) {
    errDubbger($value);
}

?>