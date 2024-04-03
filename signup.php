<?php
session_start();
if(isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["email"]) && isset($_POST["mobilenum"])) {
    
    include 'partial\_dbconnect.php';
    
    $username = $_POST["user"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $mobile = $_POST["mobilenum"];
    
    $check_sql = "SELECT COUNT(*) AS count FROM `user` WHERE `mobilenum` = '$mobile'";
    $check_result = mysqli_query($conn, $check_sql);
    $row = mysqli_fetch_assoc($check_result);
    if ($row['count'] > 0) {
        echo '<script>alert("Mobile number already exists");</script>';
    } else {
        
        $sql = "INSERT INTO `user` (`username`, `email`, `password`, `mobilenum`) VALUES ('$username', '$email', '$password', '$mobile')";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            $_SESSION['email'] = $email;
            header("location: loogin.php"); 
            exit; 
        } else {
            echo "Error: " . mysqli_error($conn); 
        }
    }
}
?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./CSS/signup.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="signup.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="user" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="mobilenum" placeholder="Mobile Number" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </div>
            </form>
            <p class="text-center">Already have an account? <a href="loogin.php">Sign In</a></p>
        </div>
    </div>
</body>
</html> 
