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
  

<?php 

if(isset($_POST['name'])){
 $db = new Mysqli("localhost","root","","product");
 $name = $db->real_escape_string($_POST['name']);
 $description = $db->real_escape_string($_POST['description']);
 $price = (int)$_POST['price'];
 $productid = $db->real_escape_string($_POST['productidx']);
 $categoryid = (int)$_POST['categoryid'];
 echo $name;
 echo $age;
 $query = "INSERT INTO product_data( `productid`,`categoryid`, `name`, `description`, `price`) VALUES('$categoryid','$productid','$name','$description','$price')";
 $db->query($query);
}
else
{ //echo "here";
}


if (!isset($_GET['categoryid'])) {
    die();
}

include('mysql.php');
$get_id = $_GET['categoryid'];
if(isset($_GET['type'])){
  $type= $_GET['type'];
}
else{
  $type= 'lh';
}


  if($type=='lh'){
    $sort = "ORDER BY price ASC";
    $q1 = "SELECT productid,categoryid,name,description,price FROM product_data WHERE categoryid = '$get_id' ".$sort;
  }
  if($type=='hl'){
    $sort = "ORDER BY price DESC";
    $q1 = "SELECT productid,categoryid,name,description,price FROM product_data WHERE categoryid = '$get_id' ".$sort;
  }
  if($type=='tr'){
    $q1 ="SELECT p.productid,p.name,p.price,p.description,p.categoryid,AVG(r.star) AS rating_average FROM product_data p INNER JOIN review r ON r.productid = p.productid  where categoryid=".$get_id." GROUP BY p.productid ORDER BY rating_average DESC LIMIT 5"; 
  }
  if($type=='tv'){
    $q1 = "SELECT productid,categoryid,name,description,price FROM product_data where categoryid=".$get_id." ORDER BY visits DESC";
  }
	
    $ok = $conn->query($q1);
			$index=0;
      while($row = mysqli_fetch_array($ok))
      {
        $index++;
        $Productid[] = $row['productid'];
        $Categoryid=$row['categoryid'];
        $name[] = $row['name'];
        $description[]= $row['description'];
        $price[]=$row['price'];			
      }	      

?>

<section id="hero"> 
    <div class="hero-container mycontent">  
  <div class="row"  id="item_p">
<section id="portfolio" class="productlist">
      <div class="container wow fadeInUp fullpage" >
        <div class="section-header2" >
          <h3 class="section-title2">Services We Provide</h3>
          <p class="section-description">Get exclusive products from our partners</p>
        </div>
     
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li style="width:180px" data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 1)  echo 'class="filter-active"';?> ><a class="sitelink" href= 'product_page.php?categoryid=1'>Travel Agency</a></li>
              <li style="width:180px" data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 3)  echo 'class="filter-active"';?> ><a class="sitelink" href= 'product_page.php?categoryid=3'>Education Courses</a></li>
              <li style="width:180px" data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 4)  echo 'class="filter-active"';?> ><a class="sitelink" href= 'product_page.php?categoryid=4'>Education Products</a></li>
              <li style="width:180px" data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" <?php if(isset($get_id) && $get_id == 5)  echo 'class="filter-active"';?> ><a class="sitelink" href= 'product_page.php?categoryid=5'>Online Tutoring</a></li>
              <li style="width:180px" data-filter=".filter-app, .filter-card, .filter-logo, .filter-web"<?php if(isset($get_id) && $get_id == 6)  echo 'class="filter-active"';?>  ><a class="sitelink" href= 'product_page.php?categoryid=6'>Luxury Cars</a></li>
            </ul>
          </div>
        </div>

  <div class="row" id="portfolio-wrapper">

  <div class="col-md-2 radiolist">
  <form name='theForm' id='theForm'> 
  <input type="hidden" name="categoryid" value="<?php echo $get_id?>">  
   
  <label class="checkcontainer">&ensp; &ensp;Low to High
  <input type="radio" name="type" <?php if ($type == 'lh') { ?>checked='checked' <?php } ?>value="lh" onChange="autoSubmit('theForm');" />
    <span class="checkmark"></span>
  </label>
  <label class="checkcontainer">&ensp; &ensp;High to Low
  <input type="radio" name="type" <?php if ($type == 'hl') { ?>checked='checked' <?php } ?>value="hl" onChange="autoSubmit('theForm');" />
    <span class="checkmark"></span>
  </label>
  <label class="checkcontainer">&ensp; &ensp;Top Viewed
  <input type="radio" name="type" <?php if ($type == 'tv') { ?>checked='checked' <?php } ?>value="tv" onChange="autoSubmit('theForm');" />
    <span class="checkmark"></span>
  </label>
  <label class="checkcontainer">&ensp; &ensp;Top Rated
  <input type="radio" name="type" <?php if ($type == 'tr') { ?>checked='checked' <?php } ?>value="tr" onChange="autoSubmit('theForm');" />
    <span class="checkmark"></span>
  </label>
  </form>
  </div>

  <div class="col-md-10">
      <div class="row">

      
  <?php
    //echo $index;
    for($i=0; $i<$index;$i++)
    {
      echo '<div class="col-lg-4 col-md-4 portfolio-item filter-web">';
      echo '<a href= "prod.php?name='.$name[$i].'">';
	    echo '<img style="height: 200px; width: 100%; object-fit: fill" src="img/travel/'.($name[$i]).'.jpg" alt="">';	  
      echo '<div class="details">';
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
  <script>
  function autoSubmit(form1)
  {
      var formObject = document.forms[form1];
      formObject.submit();
  }
  </script>

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
