<?php

if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    echo $uname ."=".$email. "=".$pass. "<br>";

    $gender = $_POST['gender'];
    echo $gender . "<br>";

    
    $subjects = $_POST['subjects'];
    foreach($subjects as $subject){
        echo $subject. "<br>";
    }
    
    
    $file = $_FILES['files']['tmp_name'];
    echo count($file);  
    echo $_FILES['files']['tmp_name'][0] ."<br>";
    
    foreach($_FILES['files']['tmp_name'] as $key => $val){
        echo $_FILES['files']['name'] [$key] ."<br>";
        move_uploaded_file($_FILES['files']['tmp_name'][$key],'uploads/'.
        $_FILES['files']['name'][$key]);
    }
}
?>



<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="User Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password"><br><br>
    <h3>Choose Gender</h3>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <h3>Choose Subject</h3>
    <input type="checkbox" name="subjects[]" value="PHP"> PHP
    <input type="checkbox" name="subjects[]" value="Java"> Java
    <input type="checkbox" name="subjects[]" value="React"> React
    <input type="checkbox" name="subjects[]" value="MySQL"> MySQL<br><br>
    <input type="file" name="files[]" multiple><br><br>
    <button type="submit" name="submit">Register</button>
</form>
