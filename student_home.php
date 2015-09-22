<html>
<head lang="en">
	<title>Clicker App Student Home Page</title>
<<<<<<< HEAD
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
=======
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
>>>>>>> deploy
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all">
</head>

<body style="background-color:#D8D8D8;">
<div id="container">
	<div id="wrapper" class="">

		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li style="background-color:#045FB4;">

					<a style="color:#FFFFFF;" href="student_profile.php">
						<div class="formatbar">
							<img src="images/student-32.png">
							Welcome, 	<?php
							session_start();

							if (isset($_SESSION['reg_username'])) {
								echo  $_SESSION['reg_username'];
							}
							?>	</div>

					</a>

				</li>
				<li class="sidebar-brand">


					<a href="student_home.php" title="student home">
						<div class="formatbar">
							<img src="images/home.png">
							Student Home
						</div>
					</a>

				</li>
				<li>

					<a href="#"title="questions">
						<div class="formatbar">
							<img src="images/question.png">
							Questions
						</div>
					</a>

				</li>
				<li>

					<a href="#">
						<div class="formatbar">
							<img src="images/book.png">
							Answers</div></a>

				</li>
				<li>

					<a href="#" title="view grades"><div class="formatbar">
							<img src="images/letter.png">  Grades</div></a>

				</li>
				<li>

					<a href="about.php" title="about us"><div class="formatbar">
							<img src="images/about.png">  About	</div></a>

				</li>

				<li>

					<a href="exit.php" title="Logout">
						<div class="formatbar">
							<img src="images/exit.png">
							LogOff
						</div>
					</a>

				</li>


			</ul>
			<div class="sidebar-nav-bottom">
				<p class="sidebar-copyright">© 2015 Senior Project CIS485 Clicker App. <a href="mailto:CIS485@csuohio.com">Contact</a></p>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="col-lg-12">
				<div class="row">
					<div>
						<p>
							Student User Portal -- UNDER CONSTRUCTION

							<!-- 	 -->
						</p>

					</div>
					<div class="col-lg-12">
						<h1>Simple Sidebar</h1>
						<p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
						<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
						<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>




</div>



</body>
</html>