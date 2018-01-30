<?php
 session_start();
 $name = $_POST['name'];
 $quantity = $_POST['quantity'];
 $id = $_POST['id'];

 //echo $name;
 //echo $id;
 //echo $quantity;
 $string = $name.','.$id.','.$quantity;

 if(isset($_SESSION['cart'][$name])){
     $str = $_SESSION['cart'][$name];
     //echo $str;
     list($name,$id,$q) = preg_split('[,]',$str);
     //echo $quantity;
     $q = (int)$q + $quantity;
     $string = $name.','.$id.','.$q;
    $_SESSION['cart'][$name] =$string;
 }
 else{
    $string = $name.','.$id.','.$quantity;
    $_SESSION['cart'][$name] =$string;
 }

header('Location:cart.php');
?>