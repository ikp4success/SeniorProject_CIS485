<!DOCTYPE html>
<html>

<head>

<!-- All the files that are required -->
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='css/style.css' rel='stylesheet' type='text/css'>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- gen.js needs to make sure jquery is loaded to work-->
<script src="js/gen.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Clicker App home Page</title>
</head>
<body>



<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:20px 0">
<div>
	<center><img class="img-responsive" src="images/csulogo.png" alt="Mountain View"></center>

</div>
	<div class="logo_2"> Clicker App</div>
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form method="post" action="login_action.php" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Username</label>
						<input pattern=".{3,20}" required title="3 to 20 characters for username" type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input pattern=".{6,20}" required title="6 to 20 characters for password" type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button" style="background-color:#80FF00;"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form method="post" action="register_action.php" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="school_id" class="sr-only">School ID</label>
						<input pattern=".{7}" required title="7 characters for username" type="text" class="form-control" id="school_id" name="school_id" placeholder="7-digit school id">
					</div>
					<div class="form-group">
						<label for="reg_username" class="sr-only">Username</label>
						<input pattern=".{3,20}" required title="3 to 20 characters for username" type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input pattern=".{6,20}" required title="6 to 20 characters for password" type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
						<input required="required" type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input required type="email" class="form-control" id="reg_email" name="reg_email" placeholder="email">
					</div>
					<div class="form-group">
						<label for="reg_fname" class="sr-only">First Name</label>
						<input pattern=".{3,20}" required title="3 to 20 characters for name" type="text" class="form-control" id="reg_fname" name="reg_fname" placeholder="first name">
					</div>
					<div class="form-group">
						<label for="reg_lname" class="sr-only">Last Name</label>
						<input pattern=".{3,20}" required title="3 to 20 characters for name" type="text" class="form-control" id="reg_lname" name="reg_lname" placeholder="last name">
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="radio" class="" name="reg_gender" id="male" placeholder="username" value="M" checked>
						<label for="male">Male</label>
						
						<input type="radio" class="" name="reg_gender" id="female" placeholder="username" value="F">
						<label for="female">Female</label>
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree">
						<label for="reg_agree">i agree with <a href="#">terms</a></label>
					</div>
				</div>
				<button type="submit" class="login-button" style="background-color:#80FF00;"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="#">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

<!-- FORGOT PASSWORD FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">forgot password</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
					</div>
				</div>
				<button type="submit" class="login-button" style="background-color:#80FF00;"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="#">login here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>

</div>
</body>
	<!-- end:Main Form -->
	<footer>
	<p>Copyright &copy; 2015 Senior Project CIS485 Clicker App.</p>
	<p><a href="mailto:CIS485@csuohio.com">Contact</a></p>
</footer>
</html>