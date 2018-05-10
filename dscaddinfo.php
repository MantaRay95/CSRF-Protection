<html>
	<head>
		<title>Adding Info</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
            if(!isset($_COOKIE['session_cookie'])) {
              	echo "<h3>Couldn't set session correctly. Try login again!!!</h3><br><a href='dsclogin.php' class='button'><button type='submit' class='btn btn-info' id='dsc' name='dsc'> Login </button></a>";
            }
        ?>

        <script>
			function getCookie(cname) {
	            var name = cname + "=";
	        	var decodedCookie = decodeURIComponent(document.cookie);
	            var ca = decodedCookie.split(';');
	            for(var i = 0; i <ca.length; i++) {
	            	ar c = ca[i];
		            	while (c.charAt(0) == ' ') {
		            	c = c.substring(1);
		            	}
	        		f (c.indexOf(name) == 0) {
	            		return c.substring(name.length, c.length);
	        		}
        		}
                return "";
            }

			function submitForm(oFormElement)
            {
                document.getElementById("csrf_Token").value=getCookie("csrf_token");

            }
        </script>

		<?php
			if(isset($_COOKIE['session_cookie'])) {
              	echo "<div class='container'>
			        <div class='row' align='center' style='padding-top: 100px;'>
			        	<div class='col-12'>
							<div class='card'>
			              		<h5 class='card-header'>Add Information</h5>
			              		<div class='card-body'>
			                    	<div class='row'>
			                        <div class='col-sm-2'></div>
			                        	<div class='col-sm-8'>
                        				<form method='post' action='' onsubmit='submitForm(this);'>
						              		<div class='form-group row'>
							                    <label for='name' class='col-sm-2 col-form-label'>Full Name</label>
							                    <div class='col-sm-10'>
							                    	<input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
						                    	</div>
						                    </div>

						                    <div class='form-group row'>
						                        <label for='university' class='col-sm-2 col-form-label'>University</label>
						                        <div class='col-sm-10'>
						                            <input type='text' class='form-control' id='university' name='university' placeholder='University' required>
						                        </div>
						                    </div>

											<div class='form-group row'>
						                        <label for='degree' class='col-sm-2 col-form-label'>Degree</label>
						                        <div class='col-sm-10'>
						                            <input type='text' class='form-control' id='degree' name='degree' placeholder='Degree' required>
						                        </div>
						                    </div>

						                    <div class='form-group row'>
						                        <label for='year' class='col-sm-2 col-form-label'>Year</label>
						                        <div class='col-sm-10'>
						                            <input type='number' class='form-control' id='year' name='year' placeholder='Year' required>
						                        </div>
						                    </div>

						                    <button type='submit' class='btn btn-primary' >Submit</button>
                						</form>
        							    </div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>";
            }
        ?>
      	
	</body>
</html>
