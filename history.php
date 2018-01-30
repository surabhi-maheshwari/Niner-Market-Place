<?php 
  session_start();
  //unset($_SESSION['cart']);
  if(isset($_SESSION['cart'])){
    //print_r($_SESSION['cart']);
  }
  if(isset($_SESSION['userid'])){
      $userid=$_SESSION['userid'];
  }
  else{
      header('Location:index.php');
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
    <div class="hero-container mycontent"style="color:white!important">
      <div class="row">
        <span class="carttitle"> Orders</span>
        <span class="carttitle" style="text-align:right;width:640px"><a style="color:white;text-decoration:underline!important" href='cart.php'>Cart</a></span>
      </div>

      <?php
      include('mysql.php');
      $sql='select * from orders where orders.userid='.$userid.' order by created desc';
      $ok = $conn->query($sql);
      while($row = mysqli_fetch_array($ok))
      {
        $order=$row['orderid'];	
        $total = $row['amount'];
        $created = $row['created'];

        $sql = 'select * from ordermap om,product_data p where om.productid=p.productid and om.orderid='.$order;
        echo '<h2 style="margin-top:50px;margin-bottom:5px">Order id:'.$order.' Total Amount:'.$total.' Date:'.$created.'</h2>';
        $okay = $conn->query($sql);
        while($row1=mysqli_fetch_array($okay)){
            $name=$row1['name'];
            $price = $row1['price'];
            $q= $row1['quantity'];

            echo '<div class="row cartitem topitem">';
            
            echo '<div class="col-md-3" style="text-align:left">';
              
            echo '<img src="./img/travel/'.$name.'.jpg" style="height:100px;width:70%;padding:10px 0px"/>';
    
            echo '</div>';
            echo '<div class="col-md-5" style="text-align:left!important;font-size:20px;margin-top:25px">';
            echo '<p style="text-overflow: ellipsis!important;">';
            echo $name;
            echo '</p>';
            echo '</div>';
            echo '<div class="col-md-4" style="text-align:center!important;font-size:15px;margin-top:15px">';
            
            //echo 'Price: '.$price[0];
            echo 'Price: $'.$price[0];
            echo '<br/>';
            echo 'Quantity: X '.$q;
            echo '<br/>'; 
            echo 'Amount: '.$total;
            echo '<br/>';
           
            echo '</div>';
            echo '</div>';
        } 
        
        
      }
      ?>
     
     <section id="portfolio" class="productlist" style="margin-top:0px!important">
     <div class="container wow fadeInUp fullpage" >
 <div class="row" id="portfolio-wrapper">
 <div class="col-md-12">
   <div class="row" style="font-size:30px;margin-left:0px;margin-bottom:40px;text-align:center!important">
     <div class="col-md-12">
       Recommended For You
     </div>
   </div>
     <div class="row">

     
 <?php
   
   include('mysql.php');
   //echo $name;
   $sql="SELECT productid,categoryid,name,description,price from product_data where name<>'$name' and categoryid IN(SELECT DISTINCT categoryid from product_data where name='$name')limit 3";

   //echo $name;
   $ok = $conn->query($sql);
   $index=0;
   //print_r($ok);
   $name =array();
   $description =array();
   $price = array();
   while($row = mysqli_fetch_array($ok))
   {
     //echo 'hello';
     //print_r($row);
     $index++;
     $Productid[] = $row['productid'];
     $Categoryid=$row['categoryid'];
     $name[] = $row['name'];
     $description[]= $row['description'];
     $price[]=$row['price'];			
   }


   for($i=0; $i<$index;$i++)
   {
     echo '<div class="col-lg-4 col-md-4 portfolio-item filter-web">';
     echo '<a href= "prod.php?name='.$name[$i].'">';
       echo '<img style="height: 200px; width: 100%; object-fit: fill" src="img/travel/'.($name[$i]).'.jpg" alt="">';	  
     echo '<div class=" details mydetails">';
     echo '<h4>'.$name[$i].'</h4>';
       echo '<span>$</span';
     echo '<span>'.$price[$i].'</span>';
     echo '</div></a></div>';   
     
   }
 
 ?>
   </div>
 </div>
 </div>
 </div>
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
