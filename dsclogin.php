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
		  	<form>
		    	<div class="form-group">
		      		<label for="email">Email:</label>
		      		<input type="email" class="form-control" id="email" placeholder="Enter email">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd">Password:</label>
		      		<input type="password" class="form-control" id="pwd" placeholder="Enter password">
		    	</div>
		    	
		    	<button type="submit" class="btn btn-default">Login</button>
		  	</form>
		</div>
	</body>
</html>