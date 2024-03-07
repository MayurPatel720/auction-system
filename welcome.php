<?php 
    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
        header("location: loogin.php"); 
        exit;
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="./logo.png" type="image/x-icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/welcome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidify</title>
</head>
<body>
    <?php require 'partial\nav.php'?>
    <div class="welcome_container" style="background-color: antiquewhite;">
        <div class="is_first">
        
        </div>
    </div>
    <div class="welcome__container" style="background-color: black;"></div>
    <div class="welcome__container" style="background-color: antiquewhite;"></div>
    <div class="welcome__container" style="background-color: black;"></div>

</body>
</html>