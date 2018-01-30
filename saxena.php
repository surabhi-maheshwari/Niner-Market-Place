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
  <link href="css/project.css" rel="stylesheet" type="text/css" media="all" />
  <!-- =======================================================
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/ -->

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
          <?php
            if(isset($_SESSION['loggedin'])){
              echo '<li><a href="logout.php">Logout</a></li>';
            }
            else{
              echo '<li><a href="login.html">Login</a></li>';
            }
          ?>
          <li><a href="cart.php"><img src='img/cart.svg' style="color:white"/></a></li>

     
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>

  
</header><!-- #header -->



<?php 
if (!isset($_GET['categoryid'])) {
    die();
}


$get_id = $_GET['categoryid'];

		
		$server = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "product";

		// Create connection
		$conn = new mysqli($server, $user, $pass, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$q1 = "SELECT productid,categoryid,name,description,price FROM product_data WHERE categoryid = '$get_id'";
		//$ok =mysqli_query($conn,$q1) ;
    $ok = $conn->query($q1);

			
			$index=0;
			//while ($row = mysqli_fetch_array($ok)) {
			//while($row = $ok->fetch_assoc())
      //{
      while($row = mysqli_fetch_array($ok))
      {
      $Productid[] = $row['productid'];
      $Categoryid=$row['categoryid'];
      $name[] = $row['name'];
			$description[]= $row['description'];
      $price[]=$row['price'];			
      }	
			//foreach ( $name as ;
      

?>

<section id="hero"> 
    <div class="hero-container mycontent">  
  <div class="row"  id="item_p">
<section id="portfolio">
      <div class="container wow fadeInUp" >
        <div class="section-header" >
          <h3 class="section-title">Services We Provide</h3>
          <p class="section-description">Get exclusive products from our partners</p>
        </div>
     
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 1)  echo 'class="filter-active"';?> >Travel Agency</li>
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 2)  echo 'class="filter-active"';?> >Hotel Bookings</li>
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 3)  echo 'class="filter-active"';?> >Education Courses</li>
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 4)  echo 'class="filter-active"';?> >Education Products</li>
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 5)  echo 'class="filter-active"';?> >Online Tutoring</li>
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web"<?php if(isset($get_id) && $get_id == 6)  echo 'class="filter-active"';?>  >Luxury Cars</li>
            </ul>
          </div>
        </div>

<label class="checkcontainer">&ensp;Low to High
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="checkcontainer">&ensp;High to Low
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="checkcontainer">&ensp;Top Viewed
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="checkcontainer">&ensp;Top Rated
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>

          <div class="row" id="portfolio-wrapper">
            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <?php
            echo "<a href= 'prod.php?name=$name[0]'>"; 
            ?>
              <img src="img/travel/1.jpg" alt="">
              <div class="details">
                
                <h4> <?php echo $name[0]; ?> </h4>
                <span><?php echo $price[0]; ?></span>
              </div>
            </a>
          </div>
          
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <?php
            echo "<a href= 'prod.php?name=$name[1]'>"; 
            ?>
              <img src="img/travel/2.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[1]; ?></h4>
                <span> <?php echo $price[1]; ?></span>
                
              </div>
            </a>
            <p><button>Contact</button></p>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <?php
            echo "<a href= 'prod.php?name=$name[2]'>"; 
            ?>
              <img src="img/travel/3.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[2]; ?> </h4>
                <span><?php echo $price[2]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <?php
            echo "<a href= 'prod.php?name=$name[1]'>"; 
            ?>
              <img src="img/travel/4.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[3]; ?> </h4>
                <span><?php echo $price[3]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <?php
            echo "<a href= 'prod.php?name=$name[1]'>"; 
            ?>
              <img src="img/travel/5.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[4]; ?> </h4>
                <span><?php echo $price[4]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <?php
            echo "<a href= 'prod.php?name=$name[1]'>"; 
            ?>
              <img src="img/travel/6.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[5]; ?> </h4>
                <span><?php echo $price[5]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/travel/6.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[6]; ?> </h4>
                <span><?php echo $price[6]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/travel/6.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[7]; ?> </h4>
                <span><?php echo $price[7]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/travel/6.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[8]; ?> </h4>
                <span><?php echo $price[8]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/travel/6.jpg" alt="">
              <div class="details">
                <h4> <?php  echo $name[9]; ?> </h4>
                <span><?php echo $price[9]; ?></span>
              </div>
            </a>
          </div>


          </div>
        </div>
	</div>
  </div>
	
</section>	
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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
