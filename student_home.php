<HTML>
	<title>Clicker App Student Users Page</title>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<body style="background-color:#D8D8D8;">
		<div id="container">
			<div id="wrapper">

				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li style="background-color:#045FB4;"><a style="color:#FFFFFF;" href="student_profile.php"> Welcome, <?php 
						session_start();

						if (isset($_SESSION['reg_username'])) {
							echo  $_SESSION['reg_username'];
						} 
						?></a></li>
						<li class="sidebar-brand">
							<a href="#">
								Student Home
							</a>
						</li>
						<li>
							<a href="#">Questions</a>
						</li>
						<li>
							<a href="#">Answers</a>
						</li>
						<li>
							<a href="#">Grade</a>
						</li>
						<li>
							<a href="#">Events</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Services</a>
						</li>

							<li><a href="exit.php" title="Login private area">LogOff</a></li>
						

					</ul>
					<div class="sidebar-nav-bottom">
							<p class="sidebar-copyright">&copy; 2015 Senior Project CIS485 .Clicker App. <a href="mailto:CIS485@csuohio.com">Contact</a></p>
						</div>
				</div>
				<!-- /#sidebar-wrapper -->

				<!-- Page Content -->
				<div id="page-content-wrapper">
					<div class="col-lg-12">
						<div class="row">
							<div>
								<p>
									<td>Student User Portal -- UNDER CONSTRUCTION</td>

								<!-- 	<?php
									// session_start();

									// include "db.php";


									// $allmessage  = "SELECT dateposted,reg_username, reg_msg FROM message";
									// $result = $link->query($sql);

									//  if($result == false) {

									//    echo '<a href="private.php">Error: cannot execute query</a>';
									//    exit;
									//  }


									// while($row=mysqli_fetch_array($result)){

									// 	echo '<p>'.$row["dateposted"]."---Message: ".$row["msg"].", UserName: ".$row["username"].'</p>';
									// 	echo "\n";


									// }

									// mysql_free_result($result);
									// mysql_close($link);
								?> -->
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

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Menu Toggle Script -->
		<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
		</script>




	</div>
</body>
</HTML>

