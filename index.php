<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Smart Shopping</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="electronic.php">
                                <img src="img/electronic.jpg" alt="electronics">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Electronics</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="gift.php">
                               <img src="img/gift.jpg" alt="gift">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Gift Items</p>
                                    <p>Someone I loved once gave me a box full of darkness.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="fashion.php">
                               <img src="img/fashion.jpg" alt="clothes">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">fashion</p>
                                   <p>Our exquisite collection of clothes.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
			   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="grocery.php">
                               <img src="img/grocery.jpg" alt="groceries">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">grocery</p>
                                    <p>When people are depressed,they eat or go shopping.</p>
                                </div>
                           </center>
                       </div>
                   </div>
				<div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="medicines.php">
                               <img src="img/medicines.jpg" alt="medicine">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">medicines</p>
                                    <p>Let food be thy medicine and medicine be thy food.</p>
                                </div>
                           </center>
                       </div>
                   </div>
				<div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="beauty.php">
                               <img src="img/beauty.jpg" alt="beauty">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">beauty care</p>
                                    <p>Beauty is in the skin! Take care of it.</p>
                                </div>
                           </center>
                       </div>
                   </div>   
			   
			   
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a>smart shopping</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Dharma & Chidvilash</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>