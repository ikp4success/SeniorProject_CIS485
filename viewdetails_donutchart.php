<HTML>
	<title>Clicker App Student Home Page</title>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<!-- Morris Charts CSS -->
	<link href="css/plugins/morris.css" rel="stylesheet"/>
	<body style="background-color:#FFFFFF;">
		<div id="container">
			<div id="wrapper">

				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li style="background-color:#045FB4;">
							
							<a style="color:#FFFFFF;" href="student_profile.php">
								<div class="formatbar">
									<img src="images/student-32.png">
									Welcome, <?php 
									session_start();

									if (isset($_SESSION['reg_username'])) {
										echo  $_SESSION['reg_username'];
									} 
									?>
								</div>

							</a>
							
						</li>
						<li >
							
							
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
								<li class="sidebar-brand">
									
									<a href="student_grade.php"><div class="formatbar">
										<img src="images/letter.png">  Grade</div></a>
										
									</li>
									<li>
										
										<a  href="about.php"><div class="formatbar">
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
											<div id="totalStudents" >
													
													Total Number of Student Registered: <?php 
													include "db.php"; 
													$sql="SELECT * FROM  users where admin_yn = 'N'"; 
													$result = $link->query($sql);
													echo $result->num_rows;
													

													?>

												</div>
												<div id="totalStudentsanswered" >
													
													Total Number of Student Participated: <?php 
													include "db.php"; 
													$sql="SELECT DISTINCT stu_id FROM poll_results"; 
													$result = $link->query($sql);
													echo $result->num_rows;
													

													?>

												</div>

												<div id="totalStudentscorrect" >
													
													Total Number of Student with Correct Answers: <?php 
													include "db.php"; 
													$sql="SELECT DISTINCT `stu_id` FROM `poll_results` WHERE `correct_yn` ='Y'"; 
													$result = $link->query($sql);
													echo $result->num_rows;
													

													?>

												</div>

												<div id="totalStudentsfail" >
													
													Total Number of Student with Wrong Answers: <?php 
													include "db.php"; 
													$sql="SELECT DISTINCT `stu_id` FROM `poll_results` WHERE `correct_yn` ='N'"; 
													$result = $link->query($sql);
													echo $result->num_rows;
													

													?>

												</div>
												<div  class="span2" type="submit">
		<a class="btn btn-info btn-lg confirmation" href="student_grade.php">
			<span class="glyphicon glyphicon-circle-arrow-right"> </span> Go Back</a>
		</div>
											<div class="col-lg-12">
							<!-- <h1>Simple Sidebar</h1>
							<p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
							<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->
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

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins/morris/raphael.min.js"></script>
		<script src="js/plugins/morris/morris.min.js"></script>
		<script src="js/plugins/morris/morris-data.js"></script>




	</div>
</body>
</HTML>

