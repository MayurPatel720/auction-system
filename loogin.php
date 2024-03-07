<?php
session_start();
if(isset($_POST["user"]) && isset($_POST["pass"])) {
    
    include 'partial/_dbconnect.php';
    $login = false;
    $username = $_POST["user"];
    $password = $_POST["pass"];
    
    $sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
    $nums = mysqli_num_rows($result);
    if($nums == 1){
        $login = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/loogin.css">
</head>
<script>
    function ma(){
        window.location.href = "signup.php";
        console.log("aa");
    }
</script>
<body>
    <div class="container">
        <div class="first">
            <div class="ee">
                <h2>Welcome to login</h2>
                <h5 style="font-size:14px;margin:13px 0px">Don't have an account?</h5>
                <button onclick="ma()">Sign Up</button>
            </div>
        </div>
        <div class="second">
            <div class="sef">
                <h3>Sign in</h3>
            </div>
            <div class="ses">
                <form action="loogin.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="user">
                    <label for="password">Password</label>
                    <input type="password" name="pass">
                    <input class="sb" type="submit" value="Sign in">
                </form>
            </div>
            <div class="set">
                <p>Remember me</p>
                <p>Forgot password</p>
            </div>
        </div>
    </div>
</body>
</html>
