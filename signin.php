<?php
	session_start();
	//echo $_SESSION['id'];
	include 'mysql.php';
	if(!empty($_POST)){
		$email = $_POST['email'];
		$password = $_POST['password'];
		//echo $_SESSION['redirect'];
		//echo $_SESSION['link'];

		echo $email.'-'.$password;

		if($email && $password){
			$sql = "select * from user where email='".$email."' and password='".$password."'";
			echo $sql;
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				$row = mysqli_fetch_assoc($result);
				$userid=$row['userid'];
				echo $userid;
				
				$msg= "User logged in successfully";
				$_SESSION['loggedin']=true;
				$_SESSION['userid']=$userid;
				if(isset($_SESSION['redirect'])){
					echo 'Location:'.$_SESSION["link"];
					header('Location:'.$_SESSION["link"]);
				}
				//echo $_SERVER['REQUEST_URI'];
				header('Location:index.php');
			}
			else{
				$msg= "User login failed";
			}
			//echo $msg;
		}
	}

?>