<?php
session_start(); 
	$_SESSION['loggedin']=true;
	$_SESSION['userid']=100;
	//echo $_SESSION['loggedin'];
  ?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="//connect.facebook.net/en_US/sdk.js"></script>
	
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="631320733089-k8squ0m5ggojh4n33btocn3hmg6pe9ru.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



	<title>Login</title>

	<link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/form-login.css">
    <link href="css/project.css" rel="stylesheet" type="text/css" media="all" />

	<style>
	.data{
		display:none;
	}
	</style>
	
	
</head>
<body>
<script>
function timeout(){
	  window.location = 'index.php';
}
    window.fbAsyncInit = function() {
    FB.init({
      appId      : 1757730341188737,
      xfbml      : true,
      version    : 'v2.11',
    });
	
    FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			document.getElementById('status').innerHTML = 'We are connected.';
			console.log('hello2');
			//document.getElementById('login').style.visibility = 'hidden';
		} else if (response.status === 'not_authorized') {
			document.getElementById('status').innerHTML = 'We are not logged in.';
			console.log('hello3');
		   	} else {
		    document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
			console.log('hello4');
		    }
		});
	};
	

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11";
     fjs.parentNode.insertBefore(js, fjs);
	 console.log('hello5');
	}(document, 'script', 'facebook-jssdk'));
   
   
   		function login() {
			FB.login(function(response) {
				if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
					console.log('hello6');
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.';
					console.log('hello7');
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
					console.log('hello8');
		    	}
			}, {scope: 'email'});
			
			
		}

		
		
				function getInfo() {
			    FB.api('/me', 'GET', {fields: 'first_name,last_name,name,email,id,picture.width(150).height(150)'}, function(response) {
				document.getElementById('status').innerHTML = "<img src='" + response.picture.data.url + "'>";
				document.getElementById('status').innerHTML = response.name;

				console.table(response);
				
				
			});

		}
		
</script>





<script>

function timeout(){
	  window.location = 'index.php';
}
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  
  
	redirectTimout = setTimeout(function(){
	timeout();
	},1000);
    

  $(".g-signin2").css("display","none");
  $(".data").css("display","block");
  $("#pic").attr('src',profile.getImageUrl());
  $("#email").text(profile.getEmail());
  
  //email:$('#email').val();
  				//document.getElementById('response1').innerHTML = profile.getEmail();
				
	



	//console.log(document.getElementById('response1').value);
  
  
}

	function signOut()
	{
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function(){			
		alert("You have been successfully signed out");			
		$(".g-signin2").css("display","block");
		$(".data").css("display","none");
		  
		});
		
	}
</script>




<div id="fb-root"></div>
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login"  method="post" action="signin.php">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input id='email' type="email" name="email" required="required">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input id='password' type="password" name="password" required="required">
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Log in</button>
                    </div>

                </div>

                <!-- <a href="#" class="form-forgotten-password">Forgotten password &middot;</a> -->
                <a href="register.html" class="form-create-an-account">Create an account &rarr;</a>

            </div>
			
			

    <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>
				

<div class="divider"></div>
<div class="divider"></div>



<div class="fb-login-button" data-max-rows="1" onlogin="window.location='index.php'" data-width="170" data-height="26" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>

<div id="status"></div>


<!---<input type="hidden" name="response1" id="response1"/>--->

<!---<input type="hidden" id="email" />--->



<div class="divider"></div>

<!--<button onclick="getInfo()">Get User Information</button>
<div class="divider"></div>
<div class="divider"></div>-->

<div class="g-signin2" data-width="181" data-height="26" data-onsuccess="onSignIn"></div>
<div class="data">
<!---<p>Profile Details</p>--->
<img id="pic" class="img-circle" width="100" height="100"/>
<!---<p>Email Address</p>
<p id="email" class="alert alert-danger"></p>--->

<button onclick="signOut()" class="btn btn-danger">SignOut</button>
</div>
        

        
</form>
    </div>
</div>
</body>

</html>
