<?php 
  session_start();
  //unset($_SESSION['cart']);
  if(isset($_SESSION['cart'])){
    //print_r($_SESSION['cart']);
  }
  if(!isset($_SESSION['loggedin'])){
      $_SESSION['redirect']=true;
      $_SESSION['link']="checkout.php";
      header("Location:login.html");
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Spartan MarketPlace</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
 <!--  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style_new.css" rel="stylesheet">
    <link href="css/project.css" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
  <div class="container">
  
    <div id="logo" class="pull-left">
      <a href="#hero"><img class="logostyle" src="img/uklogo.svg" alt="" title="" /></img></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!--<h1><a href="#hero">Regna</a></h1>-->
    </div>
  
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="index.html">Home</a></li>
        <!-- <li><a href="#services">Services</a></li> -->
                  
        <li class="menu-has-children"><a href="#services">Services</a>
          <ul>
      <li><?php echo "<a href= 'product_page.php?categoryid=1'>";?>All Services</a></li>
        
      <li><?php echo "<a href= 'product_page.php?categoryid=1'>";?>Travel Agency</a></li>
            
      <li><?php echo "<a href= 'product_page.php?categoryid=3'>";?>Education courses</a></li>
      <li><?php echo "<a href= 'product_page.php?categoryid=4'>";?>Education Products</a></li>
      <li><?php echo "<a href= 'product_page.php?categoryid=5'>";?>Online Tutoring</a></li>      
      <li><?php echo "<a href= 'product_page.php?categoryid=6'>";?>Buy Cars</a></li>
          </ul>
        </li>
  
        <?php
          if(isset($_SESSION['loggedin'])){
            echo '<li><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
          }
        ?>
        <li><a href="cart.php"><img src='img/cart.svg' style="color:white"/></a></li>
      
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
  </header><!-- #header -->

  <section id="hero">
    <div class="hero-container mycontent">
      

      <?php
      include('mysql.php');
      $total = $_SESSION['total'];

      if(!isset($_SESSION['payment'])){

      
      ?>

    <div class="row">
        <span class="carttitle"> Checkout</span>
      </div>

        <div class="row">
            <div class="col-md-9 billlist">
            <form action="confirmorder.php" method="post">
                <div class="row billitem">
                    <div class="col-md-2">
                        First Name:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="firstname" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        Last Name:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="lastname" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        Phone:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="phone" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        Address
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        Street:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="street" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        City:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="city" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        State:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="state" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        Zipcode:
                    </div>
                    <div class="col-md-4">
                        <input class="billinput" type="text" name="zipcode" required="required">
                    </div>
                </div>
                <div class="row billitem">
                    <div class="col-md-2">
                        Country:
                    </div>
                    <div class="col-md-4">
                        USA
                    </div>
                </div>
                <input type="hidden" name="total" value="<?php echo $total?>">
                
                <button type="submit" class="btn btn-success billbtn" style="margin-left: 100px">
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    Confirm Booking
                </button>
            </form>
            </div>
        </div>
      <?php 
      }
      else{
          unset($_SESSION['payment']);
          ?>
            <h1>Thank You For Confirming Your Order</h1>
            
          <h2><strong>Pay with Paypal</strong></h2>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="S78XL9WB8J8WE">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <img src="img/paypal.jpeg" style="width:100px"/>
        <?php
      }
      ?>
    </div>
  </section>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
          
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SpartanMarket</strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
