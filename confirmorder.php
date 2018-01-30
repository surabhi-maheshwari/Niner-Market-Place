<?php
    session_start();
    include('mysql.php');
    $userid= $_SESSION['userid'];

    if(isset($_POST) && isset($_SESSION['cart'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        $total = (int)$_POST['total'];

        //print_r($_POST);
        $sql = "insert into address(street,city,state,zipcode)values ('".$street."','".$city."','".$state."','".$zipcode."')";
        if ($conn->query($sql) === TRUE) {
            $addressid = (int)$conn->insert_id;
            echo "New record created successfully. Last inserted ID is: " . $addressid;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //change it after integration
        //$userid = 1;
        $sql = "insert into orders(userid,status,payment,address,amount)values ('".$userid."','waiting confirmation','waiting confirmation','".$addressid."','".$total."')";
        if ($conn->query($sql) === TRUE) {
            $orderid = (int)$conn->insert_id;
            echo "New record created successfully in order. Last inserted ID is: " . $orderid;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        foreach($_SESSION['cart'] as $item=>$str)
        {
          list($productname,$productid,$quantity) = preg_split('[,]',$str);
            
          $sql = "insert into ordermap(orderid,productid,quantity)values ('".$orderid."','".$productid."','".$quantity."')";
          if ($conn->query($sql) === TRUE) {
              $ordermapid = (int)$conn->insert_id;
              echo "<br/>New record created successfully in ordermap. Last inserted ID is: " . $ordermapid;
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

        }
        mysqli_close($conn);
        unset($_SESSION['cart']);

        $_SESSION['payment']=true;
        header('Location:checkout.php');
    }
?>