<html>
	<head>
		<title> CSRF protection</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<button type="submit" class="btn btn-success btn-block" id="syn" name="syn" >CSRF protection by Syncronize Token pattern </button>
		<button type="submit" class="btn btn-info btn-block" id="dsc" name="dsc" ><a href="dsclogin.php" class="button">CSRF protection by double submit cookies </a> </button>
		
	</body>
</html>