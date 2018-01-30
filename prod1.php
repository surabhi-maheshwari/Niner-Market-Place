<?php
session_start();
if(isset($_SESSION['userid'])){
  $userid = $_SESSION['userid'];
}
else{
  $userid = 0;
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
  <link href="css/project.css" rel="stylesheet" type="text/css" media="all" />
  <!-- =======================================================
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/ -->
<script>
		function check_empty() {
				if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
				alert("Fill All Fields !");
				} else {
				document.getElementById('form').submit();
				alert("Form Submitted Successfully...");
				}
				}
				//Function To Display Popup
				function div_show() {
				document.getElementById('abc').style.display = "block";
				}
				//Function to Hide Popup
				function div_hide(){
				document.getElementById('abc').style.display = "none";
		}
		
</script>
</head>


<?php 
    $coming = $_GET['name'];
    $get_id=1;
    
    include('mysql.php');
    $q1 = "SELECT productid,categoryid,name,description,price FROM product_data WHERE name = '$coming'";
    //$ok =mysqli_query($conn,$q1) ;
    $ok = $conn->query($q1);

      
      $index=0;
      //while ($row = mysqli_fetch_array($ok)) {
      //while($row = $ok->fetch_assoc())
      //{
      $row = mysqli_fetch_array($ok);
      {
      $Productid = $row['productid'];
      $Categoryid=$row['categoryid'];
      $name = $row['name'];
      $description= $row['description'];
      $price=$row['price'];     
      } 
      //foreach ( $name as ;
      

?>

<body>
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img class="logostyle" src="img/uklogo.svg" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <?php
            if(isset($_SESSION['loggedin'])){
              echo '<li><a href="logout.php">Logout</a></li>';
            }
            else{
              echo '<li><a href="login.html">Login</a></li>';
            }
          ?>
          <li><a href="cart.php"><img src='img/cart.svg' style="color:white"/></a></li>
          <li><a href="product_page.php">Back</a></li>
     
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>

  
</header><!-- #header -->


  <section id="hero">
    <div class="hero-container mycontent">
      <div class="row"  id="item_p">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-7 col-md-offset-1">
                          <?php echo '<img src="img/travel/'.($coming).'.jpg" alt="" style="width:100%; height: 425px; margin:20px;margin-top:0px">'; ?>
                          
                      </div>
                      <?php
                      $coming = $_GET['name'];
                      //echo $coming;
                      ?>
                      <div class="col-md-4" style="margin-left:100px;text-align: justify;text-justify: inter-word;">
                          <h2 ><?php echo $coming ?> </h2>
                            <div class="rating" style="margin-bottom:10px;margin-left:20px">
                              <span style="color: gold"> &#x2605</span>
                              <span style="color: gold"> &#x2605</span>
                              <span style="color: gold"> &#x2605</span>
                              <span style="color: gold"> &#x2605</span>
                              <span style="color: gold"> &#x2605</span>
                                (1 review)
                              </div>
                          <br/>
                          <!--<p>From <a href="/sellers/3">Fabposters</a></p>-->
                          <p style="margin-bottom:10px;margin-left:20px"><?php echo '$'.$price; ?></p>
                          <p style="margin-bottom:10px;margin-left:20px" class=""><?echo $coming ?></p>
                          
                          <br/>
                              <?php echo '<form class="form-inline" action="addtocart.php" method="post">';?>
                                <input type="hidden" name="id" value="<?php echo $Productid?>">
                                <input type="hidden" name="name" value="<?php echo $name?>" />
                                <div class="form-group" style="margin-bottom:40px;margin-left:20px">
                                  <label>Quantity &nbsp; &nbsp;</label>
                                  <select name="quantity" class="form-control" >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                  </select>
                                </div>
                                <button type="submit" class="btn btn-success" style="margin-left: 10px;width:300px;" onClick="add_to_cart()">
                                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                  Add to Cart
                                </button>
                                </form>
								                <button onclick="document.getElementById('id01').style.display='block'" style="margin-left: 10px;width:300px;" class="btn btn-success" >
                                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                                  </span>Write a Review
                                </button>
                                <button onclick="document.getElementById('id02').style.display='block'" style="margin-left: 10px;width:300px;" class="btn btn-success" >
                                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                                  </span>See Reviews
                                </button>
                          </form>
						  
                      </div>
                  </div> <!-- row -->
                   
					<div class="row" style="margin-top:30px 100px!important">
            
            <div class="col-md-12" styele="">
              <p style="text-align:left!important;margin-left:20px!important;margin-right:30px!important"><?php echo $description ?></p>
            </div>
            
          </div> <!-- .row -->
              </div>
            </div>
        </div>
    </div>

  </section>
  
  <!-- 
review Modal
  -->
  
  
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
    function add_to_cart(){
      console.log("hello");
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
