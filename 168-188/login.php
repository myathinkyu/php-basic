<?php 
include_once "views/top.php";
include_once "views/nav.php";
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST ["password"];

    echo $email ."-".$password;
}

?>

<div class="container my-2">
    <div class="col-md-8 offset-md-2 table-bordered p-5 ">
        <h5 class="text-danger english text-center mb-3">Login to See Special Post!</h5>
        <form action="login.php" class="form" method="post">
            <div class="form-group">
                <label for="email" class=""english>Email</label>
                <input type="email" class="form-control english" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="passwqord" class=""english>Password</label>
                <input type="password" class="form-control english" name="password" id="password">
            </div>
            <div class="row no-gutters justify-content-end">
                <button class="btn btn-info float-right" type="submit" name="submit" value="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>

</body>
</html>