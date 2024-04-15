


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="./CSS/category.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include 'partial/_dbconnect.php'; ?>
    <?php include "./partial/nav.php"; ?>

    <div class="container">
        <div class="sidebar">
            <h2>Categories</h2>
            <ul>
                <?php
            
                    $sql_categories = "SELECT DISTINCT category FROM products";
                    $result_categories = mysqli_query($conn, $sql_categories);
                    while ($row_category = mysqli_fetch_assoc($result_categories)) {
                        $category = $row_category['category'];
                        echo '<div class="sidec">';
                        echo '<li>> <a href="?category=' . $category . '">' . $category . '</a></li>';
                        echo '</div>';
                    }
                ?>
            </ul>
        </div>

        <div class="main-content">
            <div class="profuctheasder">
                <h1>Products</h1>
                <select class="as">
                    <option disabled selected>Sort By</option>
                    <option>Popular</option>
                    <option>latest</option>
                    <option>Expensive</option>
                </select>
                
            </div>
            <div class="product-list">   
                    <!-- <div class="pro1">
                        <div class="aa">
                            <img src="./images/sofa.jpg" alt="sofa" srcset="">
                        </div>
                        <div class="bb">
                            <div class="bbfirst">
                                <h3>Sofa</h3>
                                <h3>3000$</h3>
                            </div>
                            <div class="bbsecond">
                                <p style="font-family: serif;font-size: 16px;margin: 5px;">Get it by Tomorrow, 16 April
                                FREE Delivery by Bidify</p>
                            </div>
                        </div>
                    </div> -->        
                <?php
                   
                    if(isset($_GET['category'])) {
                        $selectedCategory = $_GET['category'];
                        $sql_products = "SELECT * FROM products WHERE category = '$selectedCategory'";
                    } else {
                        $sql_products = "SELECT * FROM products";
                    }
                    $result_products = mysqli_query($conn, $sql_products);
                    if (mysqli_num_rows($result_products) > 0) {
                        while ($row = mysqli_fetch_assoc($result_products)) {
                            echo '<div class="pro1">'; 
                            echo '<div class="aa">';
                            
                            if(!empty($row['file_name'])) {
                            echo '<img src="./images' . $row['file_name'] . '" alt="Product Image">';
                            }                
                            echo '</div>';
                                echo '<div class="bb">';
                                    echo '<div class="bbfirst">';
                                        echo '<h3>' . $row['name'] . '</h3>';
                                        echo '<h3>' . $row['st_bid_price'] . '$'. '</h3>';
                                    echo '</div>';
                                    echo '<div class="bbsecond">';
			                        echo '<p style="font-family: serif;font-size: 16px;margin: 5px;">' . $row['description'] . '</p>';
		                            echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No products found.</p>';
                    }
                ?>
            </div>
        </div>
    </div>
    <script>
        const starsa = document.querySelectorAll('.rating input');
        starsa.forEach(star => {
        star.addEventListener('change', () => {
            console.log('Rating: ', star.value);
        });
        });
        
    </script>
    <?php mysqli_close($conn); ?>
</body>
</html>
