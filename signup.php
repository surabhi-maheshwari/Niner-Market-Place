<?php
	session_start();
	include 'mysql.php';
	if(!empty($_POST)){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		echo $firstname.'-'.$email.'-'.$password;

		if($firstname && $lastname && $email && $password){

			$sql = "select * from user where email='".$email."' and password='".$password."'";
			echo $sql;
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				
				$msg= "User with this Email Already exists";
				$_SESSION['loggedin']=true;
				echo $msg;
				echo $_SERVER['REQUEST_URI'];
				header('Location:login.html');
			}
			else{
				$sql = $sql = "insert into user(firstname,lastname,email,password)values ('".$firstname."','".$lastname."','".$email."','".$password."')";
				echo $sql;
				if ($conn->query($sql) === TRUE) {
					$userid = (int)$conn->insert_id;
					$success = "New User created successfully";
					$_SESSION['loggedin']=true;
					$_SESSION['userid']=$userid;
					if(isset($_SESSION['redirect'])){
						header('Location:'.$_SESSION["link"]."'");
					}
					header('Location:index.php');
				} else {
					$success = "Error: " . $sql . "<br>" . $conn->error;
				}
				echo $success;
			}

			
		}
	}

?>