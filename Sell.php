<?php
    if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"])) {
        
        include 'partial/_dbconnect.php';
        $name = $_POST["name"];
        $description = $_POST["description"];
        $st_bid_price = $_POST["bid_price"];
        $category = $_POST["category"]; 

       
        $targetDir = "./images"; // Directory where uploaded files will be saved
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        // Check if file is selected
        if(!empty($fileName)){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)){
                    // Insert file details into the database
                    $sql = "INSERT INTO `products` (`name`, `description`, `st_bid_price`, `category`, `file_name`) VALUES ('$name', '$description', '$st_bid_price', '$category', '$fileName')";
                    $result = mysqli_query($conn, $sql);
                }else{
                    echo "Sorry, there was an error uploading your file.";
                }
            }else{
                echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
            }
        }else{
            echo "Please select a file to upload.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell</title>
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
        input[type="file"] {
            margin-bottom: 12px;
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
    <form action="Sell.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="bid_price">Bid Price</label>
        <input type="text" name="bid_price">
        <label for="category">Category</label>
        <select name="category">
            <option value="Furniture">Furniture</option>
            <option value="Books">Books</option>
            <option value="Car">Car</option>
            <option value="Paa">Paa</option>
        </select>
        <br>
        <label for="fileToUpload">Select file to upload</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
