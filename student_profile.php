<HTML>
	<title>Clicker App Student Users Page</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<link href="css/profilestyle.css" rel="stylesheet" media="all" />
	<link href="css/question_answer.css" rel="stylesheet" media="all" />
	<body style="background-color:#D8D8D8;">
		<div id="container">
			<div id="wrapper">

				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li style="background-color:#045FB4;"><a style="color:#FFFFFF;" href="student_profile.php"> 	<div class="formatbar">
								<img src="images/student-32.png">
							 Welcome, <?php 
						session_start();

						if (isset($_SESSION['reg_username'])) {
							echo  $_SESSION['reg_username'];
						} 
						?>
							</div></a></li>
					</li>
						<li>
							
							
							<a href="student_home.php">
								<div class="formatbar">
								<img src="images/home.png">
								 Student Home
								</div>
							</a>
							
						</li>
						<li>
							
							<a href="student_question.php">
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
							
							<a href="#"><div class="formatbar">
								<img src="images/letter.png">  Grade</div></a>
							
						</li>
						<li>
							
							<a href="about.php"><div class="formatbar">
								<img src="images/about.png">  About	</div></a>
						
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

								<div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Student Profile</h3>
            </div>
            <div class="panel-body">
              <div class="row">
				  <form method="post" action="student_profile_action.php">
				  <div class="col-md-3 col-lg-3 " align="center"> <img alt="Student User Pic" src="images/university1.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
									<?php

									session_start();

									include "db.php";
									$reg_user = $_SESSION['reg_username'];

									$sql  = "SELECT id, reg_username, f_name, l_name, reg_email FROM users WHERE reg_username = '$reg_user'";
									stripslashes($sql);
									$result = $link->query($sql);

									 	 if($result == false) {

									   echo '<a href="private.php">Error: cannot execute query</a>';
									   exit;
									 }


									if($row=mysqli_fetch_array($result)){
										echo '<tr><td>Username:'.$row["reg_username"].'</td></tr>';
										echo "\n";
										echo '<tr><td> ID: '.$row["id"].'</td></tr>';
										echo "\n";
										echo '<tr><td> First Name:</td>
										<td><input type="text" name="f_name" size="20" value="'.$row["f_name"].'"></td></tr>';
										echo "\n";
										echo '<tr><td> Last Name:</td>
										<td><input type="text" name="l_name" size="20" value="'.$row["l_name"].'"></td></tr>';
										echo "\n";
										echo '<tr><td> Email:</td>
 										<td><input type="email" name="reg_email" size="20" value="'.$row["reg_email"].'"></td></tr>';
										echo "\n";


									}


								?> 

                    </tbody>
                  </table>

					<button type="submit" class="btn btn-primary">Edit Information</button>
					<a href="student_home.php" class="btn btn-primary">Home</a>
			  </div>
              </div>
				</form>
            </div>
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

