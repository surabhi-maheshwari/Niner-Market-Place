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
	
  
  <section id="portfolio" class="productlist">

      <div class="container wow fadeInUp" >
        <div class="section-header2" style="margin-left:-100px">
	       <h3 class="section-title2">Deal of the Day!</h3>
          <p class="section-description">Get exclusive products from our partners</p>
        </div>

<?php 
$min = 1;
$max = 40;
$selected= mt_rand ($min, $max );
//echo $selected;
include('mysql.php');
		$q1 = "SELECT productid,categoryid,name,description,price FROM product_data WHERE productid = '$selected'";
		$ok = $conn->query($q1);
		
		$index=0;
		$row = mysqli_fetch_array($ok);
      
        $index++;
        $Productid = $row['productid'];
        $Categoryid=$row['categoryid'];
        $name= $row['name'];
        $description= $row['description'];
        $price=($row['price']);
		$newprice=((int)($price)*0.75);
		
			
     

?>
 <div class="col-md-8">
           <div class="row">

          <?php
            //echo $index;
            
            
              /* echo '<div class="col-lg-4 col-md-4 portfolio-item filter-web">'; */
              echo '<a href= "prod.php?name='.$name.'">';
              echo '<img style=" margin-left: 140px; width: 100%; object-fit: fill" src="img/travel/'.($name).'.jpg" alt="">';   
              /* echo '<img src="img/travel/'.((int)$i+1).'.jpg" alt="">'; */
              echo '<div class="details" style="margin-left: 290px; width: auto;">';
              
			  echo '<h2  style = "margin-bottom:20px;" >'.$name.'</h2>';
              echo '<h2 style="text-decoration: line-through; margin-bottom:10px;">$'.$price.'</h2>';
			  
			  echo '<h2>New Price: $'.$newprice.'</h2>';
              echo '</div></a></div>';   
            
           
          
          ?>

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
