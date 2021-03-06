<HTML>
	<title>Clicker App Admin Home Page</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<body style="background-color: #FFFFFF;">
		<div id="container">
			<div id="wrapper">

				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li style="background-color:#045FB4;">
							
							<a style="color:#FFFFFF;" href="admin_profile.php">
								<div class="formatbar">
								<img src="images/professor-32.png">
							 Welcome, <?php 
						session_start();

						if (isset($_SESSION['reg_username'])) {
							echo  $_SESSION['reg_username'];
						} 
						
						?>
							</div>

					</a>
				
					</li>
						<li class="sidebar-brand">
							
							
								<a href="admin_home.php">
								<div class="formatbar">
								<img src="images/home.png">
								 Admin Home
								</div>
							</a>
							
						</li>
						<li>
							
							<a href="questions.php">
								<div class="formatbar">
								<img src="images/question.png">
								 Create Question Set
								</div>
							</a>
							
						</li>
						<li>
							
							<a href="edit_qa.php">
								<div class="formatbar">
								<img src="images/book.png">
								  View/Edit QA Sets</div></a>
							
						</li>
						<li>
							
							<a href="admin_grade.php"><div class="formatbar">
								<img src="images/letter.png">  Grades</div></a>
							
						</li>
						
						<li>
							
							<a href="exit.php" title="Login private area">
								<div class="formatbar">
							<img src="images/exit.png">
								  LogOff
									</div>
							</a>
						
						</li>
						

					</ul>
					<div class="sidebar-nav-bottom">
							<p class="sidebar-copyright">&copy; 2015 Senior Project CIS485 Clicker App. <a href="mailto:CIS485@csuohio.com">Contact</a></p>
						</div>
				</div>
				<!-- /#sidebar-wrapper -->

				<!-- Page Content -->
				<div id="page-content-wrapper">
					<div class="col-lg-12">
						<div class="row">
							<div>
								<p>
									<td>Admin User Portal -- UNDER CONSTRUCTION</td>

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
							<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
							<h1>WELCOME</h1>
							<ul>
								<li>To create a new question set, click on "Create Question Set" in the side menu.</li>
								<li>To edit a question set, click on "Edit Questions/Answers"</li>
								<li>To view student grades, click on "Grades".</li>
							</ul>
							
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
</HTML>