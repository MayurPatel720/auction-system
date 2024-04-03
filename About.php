<?php
    // session_start();
    if(isset($_POST["name"]) && isset($_POST["description"])) {
        
        include 'partial/_dbconnect.php';
        $name = $_POST["name"];
        $description = $_POST["description"];
        $st_bid_price = $_POST["bid_price"];
        
        $sql = "INSERT INTO `products` (`name`, `description`, `st_bid_price`) VALUES ('$name', '$description', '$st_bid_price')";
        $result = mysqli_query($conn, $sql);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        form {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include "./partial/nav.php" ?>
    <form action="About.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="bid_price">Bid Price</label>
        <input type="text" name="bid_price">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
