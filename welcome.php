<?php 
session_start();
$a = isset($_SESSION["username"]) ? $_SESSION["username"] : '';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: loogin.php"); 
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Bidify</title>
    <link rel="stylesheet" href="./CSS/welcomee.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <div class="container_w">
      <!-- <div id="loader">
      <div class="ad">
        <h1>1</h1>
        <h1>2</h1>
        <h1>3</h1>
        <h1>SOLD !</h1>
      </div>
      <div class="avade">
        <center>
          <h1 style="font-size: 35px">
            <span>W</span><span>E</span><span>L</span><span>C</span
            ><span>O</span><span>M</span><span>E</span> <span>T</span
            ><span>O</span> <span>B</span><span>I</span><span>D</span
            ><span>I</span><span>F</span><span>Y</span>
          </h1>
        </center>
      </div> -->
    </div>

    <?php require 'partial\nav.php'?>

    <div class="welcome_container">
      <div class="container_textandimg">
        <div class="mainn">
          <div class="first_text">
            <div class="pehlu">
              <h1>
                Find A Comfortable<br />
                Product <span class="usernameprint"><?php echo $a ?></span>
              </h1>
            </div>
            <div class="biju">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                officia aspernatur expedita cupiditate fuga, ea sint iste nemo
                esse aliquam ut. Ab assumenda neque beatae, maiores vitae quam.
                Reprehenderit, nostrum!
              </p>
            </div>
            <div class="triju"></div>
            <button class="explore">EXPLORE NOW</button>
          </div>
          <div class="second_text">
            <img
              class="as"
              style="width: 37vw; height: auto; position: relative; top: -30px"
              src="./a.png"
              alt="img"
              srcset=""
            />
          </div>
        </div>
      </div>
      <!-- <div class="ff">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, voluptatem accusamus rem a veritatis, saepe temporibus eos voluptates, culpa molestias dolor? Natus quam consequatur iure obcaecati, accusantium nemo molestiae distinctio illum illo minima laudantium deserunt, nisi odit doloremque in dicta.</p>
      </div> -->
    </div>

    <div class="welcome__container">
      <div class="popolar">
        <div class="popular_first">
          <h2>Popular Top Category</h2>
          <a href="#"><h4>view all</h4></a>
        </div>
        <div class="popular_second">
          <div class="choktha">
            <div class="choktha_first">
              <img src="./images/bags.jpg" alt="bags" srcset="" />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Travel</p></center>
            </div>
          </div>

          <div class="choktha">
            <div class="choktha_first">
              <img src="./images/lap.jpg" alt="laptop" srcset="" />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Electronics</p></center>
            </div>
          </div>

          <div class="choktha">
            <div class="choktha_first">
              <img src="./images/sofa.jpg" alt="laptop" srcset="" />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Furniture</p></center>
            </div>
          </div>

          <div class="choktha">
            <div class="choktha_first">
              <img
                src="https://img.freepik.com/premium-photo/stack-books-with-one-that-says-word-it_732812-1236.jpg?w=740"
                alt="laptop"
                srcset=""
              />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Books</p></center>
            </div>
          </div>

          <div class="choktha">
            <div class="choktha_first">
              <img
                src="https://img.freepik.com/premium-photo/black-sneakers-yellow-background-right-upper-corner_639785-9175.jpg?w=740"
                alt="laptop"
                srcset=""
              />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Shoes</p></center>
            </div>
          </div>

          <div class="choktha">
            <div class="choktha_first">
              <img
                src="https://img.freepik.com/premium-photo/neon-cyberpunk-gamepad-motion-screen-flat-icon-with-thick-lines-black-background_1114736-34.jpg?w=740"
                alt="laptop"
                srcset=""
              />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Controller</p></center>
            </div>
          </div>
          <div class="choktha">
            <div class="choktha_first">
              <img
                src="https://img.freepik.com/free-photo/skincare-products-near-lemon-honey_23-2147710606.jpg?t=st=1711692233~exp=1711695833~hmac=b29f3e2453a2ada222d887f429c9c43121b6b497b3663a11c65aafb2be34e291&w=740"
                alt="laptop"
                srcset=""
              />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Cream</p></center>
            </div>
          </div>
          <div class="choktha">
            <div class="choktha_first">
              <img
                src="https://img.freepik.com/premium-photo/top-view-fruits-vegetables_1057389-20588.jpg?w=740"
                alt="laptop"
                srcset=""
              />
            </div>
            <div class="choktha_second">
              <center><p class="chok">Vegetables</p></center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="welcome__container"
      style="background-color: antiquewhite"
    ></div>
    <div class="welcome__container" style="background-color: black"></div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="./CSS/welcome.js?v=<?php echo time(); ?>"></script>
  </body>
</html>
