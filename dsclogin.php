<html>
	<head>
		<title>CSRF protection by Double submit cookie</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
		  	<h2>Login</h2>
		  	<form action ='dsclogin.php' method='POST' enctype='multipart/form-data'>
		    	<div class="form-group">
		      		<label for="email">Email:</label>
		      		<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
		    	</div>
		    	<div class="form-group">
		      		<label for="password">Password:</label>
		      		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
		    	</div>
		    	
		    	<button type="submit" class="btn btn-default" id="submit" name="submit">Login</button>
		  	</form>
		</div>
	</body>
</html>


<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
    function user_login()
    {
      	$my_email = 'pavithra@gmail.com';
      	$my_password = 'abc123';

      	$email_in = $_POST['email'];
      	$password_in = $_POST['password'];

      	if(($email_in == $my_email)&&($password_in == $my_password)) {
	        // session_set_cookie_params(300);
	        // session_start();
	        // session_regenerate_id();

	        // setcookie('session_cookie', session_id(), time() + 300, '/');

	        // $token = generate_token();

	        // setcookie('csrf_token', $token, time() + 300, '/', 'localhost',true);

	        //header("Location:user-profile.php");
        exit;
    	}
    	else{
        echo "<script> alert('Invalid Credentials, Please try again.') </script>";
	    }
	}

	function generate_token(){
	    return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
	}
?>