<?php
session_start();
$_SESSION["favcolor"] = "green";

/*
if(isset($_POST['name'])){
 $db = new Mysqli("localhost","root","12345678","product");
 if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
		}
 $name = $db->real_escape_string($_POST['name']);
 $description = $db->real_escape_string($_POST['description']);
 $price = (int)$_POST['price'];
 $productid = $db->real_escape_string($_POST['productid']);
 $categoryid = (int)$_POST['categoryid'];
 echo $name;
 echo $price;
 $query = "INSERT INTO `product_data`(`productid`, `categoryid`, `name`, `description`, `price`) VALUES('$productid','$categoryid','$name','$description','$price')";
 $db->query($query);
}
else
{ //echo "here";
}*/

$type=0;
include('mysql.php');

// if(isset($_GET['type'])){
//   echo "bolo tara rara";
// $type = $_GET['type'];
// }
// else{
//   $type=5;
// }

//echo $type;


		$q1 = "SELECT p.productid,p.name,p.price,p.categoryid,p.description,AVG(r.star) AS rating_average FROM product_data p INNER JOIN review r ON r.productid = p.productid GROUP BY p.productid ORDER BY rating_average DESC LIMIT 6";
        $ok = $conn->query($q1);

			
			$index6=0;
      while($row = mysqli_fetch_array($ok))
      {
        $index6++;
        $Productid6[] = $row['productid'];
        $Categoryid6=$row['categoryid'];
        $name6[] = $row['name'];
        $description6[]= $row['description'];
        $price6[]=$row['price'];			
      }
      //echo $index6;
      //header('Location:index.php#portfolio');	

  $q1 = "SELECT productid,categoryid,name,description,price FROM product_data ORDER BY visits DESC limit 6";
      $ok = $conn->query($q1);

    
    $index7=0;
    while($row = mysqli_fetch_array($ok))
    {
      $index7++;
      $Productid7[] = $row['productid'];
      $Categoryid7=$row['categoryid'];
      $name7[] = $row['name'];
      $description7[]= $row['description'];
      $price7[]=$row['price'];			
    }
    //echo $index7;
	
  $q1 = "select * from product_data p,orders o ,ordermap om where p.productid=om.productid and om.orderid=o.orderid group by p.productid order by o.created desc limit 6";
      $ok = $conn->query($q1);

    
    $index5=0;
    while($row = mysqli_fetch_array($ok))
    {
      $index5++;
      $Productid5[] = $row['productid'];
      $Categoryid5=$row['categoryid'];
      $name5[] = $row['name'];
      $description5[]= $row['description'];
      $price5[]=$row['price'];			
    }
    //echo $index5;

    $q1 = "select * from product_data,(select p.productid,sum(om.quantity) as total from product_data p,orders o ,ordermap om where p.productid=om.productid and om.orderid=o.orderid group by p.productid order by total desc) as result where product_data.productid=result.productid";
    $ok = $conn->query($q1);
    $index8=0;
    while($row = mysqli_fetch_array($ok))
    {
      $index8++;
      $Productid8[] = $row['productid'];
      $Categoryid8=$row['categoryid'];
      $name8[] = $row['name'];
      $description8[]= $row['description'];
      $price8[]=$row['price'];			
    }
    //echo $index8;

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
  <link href="css/main.97292821.css" rel="stylesheet"/>
  <!-- =======================================================
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/ -->

</head>

<body>

    <script>
      $(function(){
        $('#portfolio-wrapper').mixItUp({
          load: {
            filter: '.filter-app'
          }
        });
      });
    </script>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

<!--       <div id="logo" class="pull-left">
        <a href="#hero"><img class="logostyle" src="img/uklogo.svg" alt="" title="" /></img></a>
        
        
       -->

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
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

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Niner MarketPlace</h1>
      <h2>Cheers! We are Union of 5 websites</h2>
      <a href="#about" class="btn-get-started">Explore Now</a><br>
	  <a href="dealofday.php" class="btn-get-started">Deal of the Day!</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 col-lg-offset-3">
            <h2 class="title">Few Words About Us</h2>
            <p>
              We bring you variety of Products together from partner website. Aloha!! Your One Stop Shop
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Shop the best Cars till date </a></h4>
              <p class="description">When it comes to lavish cars, Spartan Marketplace is the first place to look. Exploit your driving enthusiam with luxurious cars.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Explore the Mesmering Nature</a></h4>
              <p class="description">Travelling is our reason of excitment, and exploring realms of planets provide us pleasure.Success comes from travelling and make people travel.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Know your strength</a></h4>
              <p class="description">Test your coding skills and use our education courses and coding languages to strengthen your skills.</p>
            </div>

          </div>

          <!-- <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div> -->
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description"></p>
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">60</span>
            <p>No. of Services</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">121</span>
            <p>No. of Users</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1</span>
            <p>Total Reviews</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">5</span>
            <p>Top Rated Products</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><?php
            echo "<a href= 'product_page.php?categoryid=1'>"; 
            ?><i class="fa fa-plane"></i></a></div>
              <h4 class="title">Travel Solutions</h4>
              <p class="description">Enjoy the beauty of nature with our special adventure travels. Going in groups is more fun now with Our Group plans.</p>
            </div>
          </div>
          <!--<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><?php
            echo "<a href= 'product_page.php?categoryid=2'>"; 
            ?>
            <i class="fa fa-bed"></i></a></div>
              <h4 class="title">Hotel Solutions</a></h4>
              <p class="description">Get exotic hotels with special travel plans if you book both packages together. We believe in luxury and comfort. Try our Duet plan to avail best offers.</p>
            </div>
          </div>-->
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><?php
            echo "<a href= 'product_page.php?categoryid=6'>"; 
            ?><i class="fa fa-car"></i></a></div>
              <h4 class="title">Supreme Cars</a></h4>
              <p class="description">Love Speed? Come shop with up to look into world's most fastest and furiest cars in market. Hope you love the light speed Bugatti cars.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><?php
            echo "<a href= 'product_page.php?categoryid=5'>"; 
            ?><i class="fa fa-book"></i></a></div>
              <h4 class="title">Online Tutoring</a></h4>
              <p class="description">Our Nanodegree programs are built with the world's most forward–thinking companies–Google, Facebook, GitHub. Our expert project mentors ensure that you're job-ready.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><?php echo "<a href= 'product_page.php?categoryid=4'>"; ?>
			  <i class="fa fa-graduation-cap"></i></a></div>
              <h4 class="title">Education Products</a></h4>
              <p class="description">Here are numerous kinds of stationery products available. From pens, to colour pencils, from compass boxes to crayons, from tape dispenser to zipper pouches.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><?php echo "<a href= 'product_page.php?categoryid=3'>"; ?>
			  <i class="fa fa-hashtag"></i></a></div>
              <h4 class="title">Education Courses</a></h4>
              <p class="description">Test your skills for coding to crack interviews for best fortune 100 companies. We bring you interview questions from over 100 past employees from these fortune companies.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->


    <!--==========================
      Service Listing Section
    ============================-->
    <section id="portfolio" class="productlist">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Service We Provide</h3>
          <p class="section-description">We take care of our customers</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All Filters</li>
              <li data-filter=".filter-app" >Recommended</li>
              <li data-filter=".filter-card">Top Rated </li>
              <li data-filter=".filter-logo">Most Viewed </li>
              <li data-filter=".filter-web" >Best-Sellers</li>
            </ul>
          </div>
        </div>
          <div class="row" id="portfolio-wrapper">

            <?php
              
              for($i=0; $i<$index5;$i++)
              {
                echo '<div class="col-lg-4 col-md-4 portfolio-item filter-app">';
                echo '<a href= "prod.php?name='.$name5[$i].'">';
              echo '<img style="height: 200px; width: 100%; object-fit: fill" src="img/travel/'.($name5[$i]).'.jpg" alt="">';   
                /* echo '<img src="img/travel/'.((int)$i+1).'.jpg" alt="">'; */
                echo '<div class="details">';
                echo '<h4>'.$name5[$i].'</h4>';
              echo '<span>$</span';
                echo '<span>'.$price5[$i].'</span>';
                echo '</div></a></div>';   
              }
           
            ?>
          


            <?php
              
                for($i=0; $i<$index6;$i++)
                {
                  echo '<div class="col-lg-4 col-md-4 portfolio-item filter-card">';
                  echo '<a href= "prod.php?name='.$name6[$i].'">';
                echo '<img style="height: 200px; width: 100%; object-fit: fill" src="img/travel/'.($name6[$i]).'.jpg" alt="">';   
                  /* echo '<img src="img/travel/'.((int)$i+1).'.jpg" alt="">'; */
                  echo '<div class="details">';
                  echo '<h4>'.$name6[$i].'</h4>';
                echo '<span>$</span';
                  echo '<span>'.$price6[$i].'</span>';
                  echo '</div></a></div>';   
                }
              
            ?>
          
            <?php
              
              for($i=0; $i<$index7;$i++)
              {
                echo '<div class="col-lg-4 col-md-4 portfolio-item filter-logo">';
                echo '<a href= "prod.php?name='.$name7[$i].'">';
              echo '<img style="height: 200px; width: 100%; object-fit: fill" src="img/travel/'.($name7[$i]).'.jpg" alt="">';   
                /* echo '<img src="img/travel/'.((int)$i+1).'.jpg" alt="">'; */
                echo '<div class="details">';
                echo '<h4>'.$name7[$i].'</h4>';
              echo '<span>$</span';
                echo '<span>'.$price7[$i].'</span>';
                echo '</div></a></div>';   
              }
            
            ?>
          
            <?php
              
              for($i=0; $i<$index8;$i++)
              {
                echo '<div class="col-lg-4 col-md-4 portfolio-item filter-web">';
                echo '<a href= "prod.php?name='.$name8[$i].'">';
              echo '<img style="height: 200px; width: 100%; object-fit: fill" src="img/travel/'.($name8[$i]).'.jpg" alt="">';   
                /* echo '<img src="img/travel/'.((int)$i+1).'.jpg" alt="">'; */
                echo '<div class="details">';
                echo '<h4>'.$name8[$i].'</h4>';
              echo '<span>$</span';
                echo '<span>'.$price8[$i].'</span>';
                echo '</div></a></div>';   
              }
            
            ?>
          </div>

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description"></p>
        </div>
      </div>

      
      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Spartan MarketPlace,<br>9201 University City Blvd<br>Charlotte,NC 28223</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>smahesh1@uncc.edu</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 980-349-2318</p>
              </div>
            </div>

          <!--   <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div> -->

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" required="required" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="row">


                <div class="col-md-4">


                </div>

                <div class="col-md-4">
                        
                    <center><h4>Enroll for annual subscription</h4></center>
                    
                    <div class="form-group">
                      <div class="row">
                        <div class="">
                            <input type="email" require="required" class="form-control footer-input-text" style="width:450px"/>
                            <div>
                        </div>
                        <div class="row">
                <button id="myBtn">Submit</button>
                </div>
<!-- The Modal -->
								<div id="myModal" class="modal">

  <!-- Modal content -->	
								<div class="modal-content" style = "color:black">
								<span class="close">&times;</span>
								<br>
								<center>
								<p>Thankyou for subscribing !!
								<br>
								 You will receive all the update notifications and newsletters.
								</p>
								</center>
							</div>

								</div>

								<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
                            </div>
                        </div>
                    
					
					<center>
                    <div>
                        <p>
                            <a href="https://www.twitter.com" class="fa-icon" title="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                            <a href="https://www.facebook.com" class="fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com" class="fa-icon" title="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
					</center>

                        
                    </div>
					
                </div>
        </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SpartanMarket</strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->

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
