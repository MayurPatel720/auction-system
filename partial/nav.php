<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");
      * {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
      }

      .container_nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #f5f5f7;
        padding: 10px 25px;
        border-bottom: 1px solid black;
      }

      .logo {
        width: 35px; /* Set width of the image */
        height: auto; /* Maintain aspect ratio */
        margin-right: 10px;
      }

      .nav-list {
        list-style-type: none;
        margin: 0;
        display: flex;
        gap: 25px;
        padding: 0;
        display: flex;
      }

      .nav-item {
        margin-right: 15px;
      }

      .nav-link {
        text-decoration: none;
        font-weight: 500;
        font-size: 18px;
        color: #333;
        transition: color 0.3s;
      }

      .nav-link:hover {
        color: #555;
      }

      .logout-link {
        text-decoration: none;
        color: #333;
        font-weight: bold;
      }

      .logout-link:hover {
        color: #555;
      }
    </style>
  </head>
  <body>
    <div class="container_nav">
      <div class="first">
        <img class="logo" src="./logo.png" width="35px" alt="logo" />
      </div>
      <div class="second">
        <ul class="nav-list">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Categories</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </ul>
      </div>
      <div class="third">
        <a href="logout.php" class="logout-link">Log Out</a>
      </div>
    </div>
  </body>
</html>
