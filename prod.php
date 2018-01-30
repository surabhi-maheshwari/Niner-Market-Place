<?php
session_start();
if(isset($_SESSION['userid'])){
  $userid = $_SESSION['userid'];
}
else{
  $userid = 0;
}
$coming = $_GET['name'];
include('mysql.php');
$sql = "set SQL_SAFE_UPDATES =0;update product_data set visits = visits + 1 WHERE name = '$coming';";
//echo $sql;
$ok = $conn->multi_query($sql);
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
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
  <!-- Favicons -->
 <!--  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<style>
ul{
	padding:0;
	margin:0;
	color:black;
}

ul li{
	list-style-type: none;
	display:inline-block;
	margin:10px;
	color:white;
	text-shadow: 2px 2px 7px grey;
	font-size: 25px !important;
}
lable {
  border: 1px solid black;
}
ul li:hover{
	color: yellow;
}
ul li.active, ul li.secondary-active{
	color: yellow;
}

input[type="radio"]{
	
	display:none;
}
</style>
</head>


<?php 
    
    $get_id=1;
   
    include('mysql.php');
    // Check connection
    if (!$conn)
 		 {
 			 echo 'Could not connect: ' . mysql_error();
 		 }	 
    $q1 = "SELECT productid,categoryid,name,description,price FROM product_data WHERE name = '$coming'";
    //$ok =mysqli_query($conn,$q1) ;
    $ok = $conn->query($q1);
    echo $q1;

      
      $index=0;
      //while ($row = mysqli_fetch_array($ok)) {
      //while($row = $ok->fetch_assoc())
      //{
      while($row = $ok->fetch_assoc())
      {
      $Productid = $row['productid'];
      $Categoryid=$row['categoryid'];
      $name = $row['name'];
      $description= $row['description'];
      $price=$row['price'];     
      } 
       if(isset($_POST['submit']))
	    {	 
		 // echo"here it is $Productid ";
		  $message = $_POST['psw'];
          $rating1 = $_POST['ratings'];
		  $sql = "INSERT INTO `review`( `userid`, `productid`, `star`, `comments`) VALUES ('$userid','$Productid','$rating1','$message')";
		  $result = mysqli_query($conn,$sql);
      echo $sql;
		  if($result)
		  {
			    // function prompt($prompt_msg){
					// echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

					// $answer = "<script type='text/javascript'> document.write(answer); </script>";
					// return($answer);
    //}

    //program
    // $prompt_msg = "Please type your name.";
    // $name = prompt($prompt_msg);
    //echo ($name);
    //$output_msg = "Hello there ".$name."!";
    //echo($output_msg);
			//echo "<script language='Javascript'>\n f=prompt('Enter your User name','');	alert('Wlecome '+f+'!')  \n </script>";
			//$nickname=$_POST['f']; 
		}
		else
		{
			
			echo 'DATA NOT INSERTED';
		}
	  include('mysql.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `reviewid`, `userid`, `productid`, `star`, `comments`, `timestamp` FROM `review`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $star =  $row["star"];
		//echo("$star");
		$prod = $row["productid"];
		 $time = $row["timestamp"];
		 $comm = $row["comments"];
    }
} else {
    echo "0 results";
}
$conn->close();	
	
	  
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
                      
                      ?>
                      <div class="col-md-4" style="margin-left:100px;text-align: justify;text-justify: inter-word;">
                      <h2 ><p><?php echo $coming ?></p> </h2>
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
                          <br/>
                              <?php echo '<form class="form-inline" action="addtocart.php" method="post">';?>
                                <input type="hidden" name="id" value="<?php echo $Productid?>">
                                <input type="hidden" name="name" value="<?php echo $name?>" />
                                <div class="form-group" style="margin-bottom:40px;margin-left:20px">
                                  <label>Quantity &nbsp; &nbsp;</label>
                                  <select name="quantity" class="form-control">
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
                                <button type="" class="btn btn-success" style="margin-left: 0px;width:350px;"  onClick="add_to_cart()">
                                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                  Add to Cart
                                </button>
								
                          </form>
						    <div class="w3-container">
                <button onclick="document.getElementById('id01').style.display='block'" style="margin-left: -15px;width:350px;" class="btn btn-success" >
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                </span>Write a Review
              </button>
              <button onclick="document.getElementById('id02').style.display='block'" style="margin-left: -15px;width:350px;" class="btn btn-success" >
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                </span>See Reviews
              </button>
   <div id="id02" class="w3-modal" style= "color:black">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

     <form class="w3-container" action="" method = "POST">

	
          
<?php     
  include('mysql.php');

// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT `reviewid`, `userid`, `productid`, `star`, `comments`, `timestamp` FROM `review` where productid='".$Productid."' ORDER BY timestamp desc";
	$result = $conn->query($sql);
	$index=0;
	?> 
<!--<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
</tr>-->
<?php
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$index++;
$star = array();
$time = array();
$comm = array();
$star[] =  $row["star"];
//echo("$star");
//$prod[] = $row["productid"];
$time[] = $row["timestamp"];
$comm[] = $row["comments"];
for($i=0; $i<sizeof($star);$i++)
{
?>
<!--<tr>
<td><?php echo $star[$i];?></td>
<td><?php echo $time[$i];?></td>
<td><?php echo $comm[$i];?></td>
</tr>-->

<div class="row">
	<div class="col-md-3">
		Rating: <?php echo $star[$i];?>/5
  </div>
  <div class="col-md-5">
    <?php
      if ($star[$i] == 1) {
			?>
        <span style="color: gold"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <?php }
			  elseif($star == 2){ ?>
				<span style="color: gold"> &#x2605</span>
          <span style="color: gold"> &#x2605</span>
          <span style="color: black"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <span style="color: black"> &#x2605</span> 
				<?php }
				elseif($star[$i] == 3){ ?>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <?php }
        elseif($star[$i] == 4){ ?>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: black"> &#x2605</span>
        <?php }
        elseif($star[$i] == 5){ ?>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <span style="color: gold"> &#x2605</span>
        <?php }
															
	
?>

  </div>
	<div class="col-md-4 ">
		<?php echo $time[$i];?>
	</div>
</div>
<div class="row" style="margin-bottom:10px;margin-left:10px">
	<p>Comments: <?php echo $comm[$i];?></p>
</div>


		<?php
	  // echo "<table border = '0'>";

   
            // echo 
            // "<tr>" .
            // "<td class='link2'>" . $star[$i] . "</td>".
            // "<td class='link2'>" . $time[$i] . "</td>".
            // "<td class='link2'>" . $comm[$i] . "</td>".
            // "</tr>";
    // echo "</table>";
      // /* echo '<img src="img/travel/'.((int)$i+1).'.jpg" alt="">'; */
      // echo '<h4>'.$star[$i].'</h4>';
     
	  // echo '<h4>'.$time[$i].'</h4>';
    }
	
    }
echo '</table>';	
} else {
    echo "0 results";
}
$conn->close();	  
?>
      </form>
        
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>
<script>
	$('li').on('click',function(){
		
		$('li').removeClass('active');
		$('li').removeClass('secondary-active');
		$(this).addClass('active');
		$(this).prevAll().addClass('secondary-active');
	})
	

</script>
    </div>
  </div>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

     <form class="w3-container" action="" method = "POST">
		 <ul>
		 Add A Review:
     <li><label for= "rating_1"><i class="fa fa-star" aria-hidden="true"></i></label>
     <input type = "radio" name="ratings" id = "rating_1" value = "1"/></li>
		 <li><label for= "rating_2"><i class="fa fa-star" aria-hidden="true"></i>
    </label><input type = "radio" name="ratings" id = "rating_2" value = "2"/></li>
		 <li><label for= "rating_3"><i class="fa fa-star" aria-hidden="true"></i>
    </label><input type = "radio" name="ratings" id = "rating_3" value = "3"/></li>
		 <li><label for= "rating_4"><i class="fa fa-star" aria-hidden="true"></i>
    </label><input type = "radio" name="ratings" id = "rating_4" value = "4"/></li>
		 <li><label for= "rating_5"><i class="fa fa-star" aria-hidden="true"></i>
    </label><input type = "radio" name="ratings" id = "rating_5" value = "5"/></li>

		 </ul>
          <input class="w3-input w3-border" type="name" placeholder="Enter Review" name="psw" required>

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name = "submit">Add Review</button>
         
      </form>
        
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>
<script>
	$('li').on('click',function(){
		
		$('li').removeClass('active');
		$('li').removeClass('secondary-active');
		$(this).addClass('active');
		$(this).prevAll().addClass('secondary-active');
	})
	

</script>
    </div>
  </div>
</div>                        
								</div>
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
