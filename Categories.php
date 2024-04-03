<?php 
include 'partial/_dbconnect.php';
include "./partial/nav.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Description</th><th>Start Bid Price</th></tr>';
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';

        echo '<td>' . $row['st_bid_price']  . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No products found.';
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


</body>
</html>
