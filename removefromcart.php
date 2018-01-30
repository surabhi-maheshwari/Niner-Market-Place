<?php
 session_start();
 $name = $_POST['name'];
 $id = $_POST['id'];

 echo $name;
 echo $id;

 if(isset($_SESSION['cart'][$name])){
     unset($_SESSION['cart'][$name]);
     echo 'removed';
 }
 else{
    //$string = $name.','.$id.','.$quantity;
    //$_SESSION['cart'][$name] =$string;
 }
header('Location:cart.php');
?>