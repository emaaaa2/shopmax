<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      .star{
        cursor: pointer;
      }
    </style>
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
           
          </form>  
          <div style="background: white; width: 100% ; position: absolute; top: 100px">
            <ul id="u" style="list-style: none;"></ul>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">ShopMax</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.php">Home</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
                <li><a href="shop.php">Shop</a></li>
          
                <li><a href="contact.php">Contact</a></li>
                <?php

                if (isset($_SESSION['username'])) {

                 ?> <li><a href="database/signout.php">sign out</a></li>
 
<?php } 
else{
 ?> <li><a href="signin.php">sign in</a></li>
                <li><a href="signup.php">sign up</a></li>

<?php } ?>



                                
              </ul>
            </nav>
          </div>
          <?php
          include "database/connection.php";
          if (isset($_SESSION['id'])) {
          $id_user=$_SESSION['id'];
          }
          else{
                      $id_user=0;

          }

          $select = "SELECT COUNT(id_pro) FROM cart WHERE id_user = '$id_user'";
          $result = $conn->query($select);

          $row = $result -> fetch_assoc();

          ?>
          <div class="icons">

            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>

            <a href="wishlist.php?id=<?php echo $_SESSION['id'];?>" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <?php
              if (isset($_SESSION['id'])) { ?>
              <span class="number"><?php echo $row['COUNT(id_pro)'] ;?></span>
            <?php } 

            else{ ?>
                            <span class="number">0</span>

            <?php }?>

            

            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
