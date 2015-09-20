<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clicker App About Page</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<link href="css/profilestyle.css" rel="stylesheet" media="all" />
</head>

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
							
							<a href="#">
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
								<img src="images/letter.png">  Grades</div></a>
							
						</li>
						<li class="sidebar-brand">
							
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

							<div class="col-lg-12">
							<h1>About Clicker App</h1>
							<p>Clickers are a great tool to help you engage your students, receive instant feedback from your students about understanding concepts you are teaching, and to get an overall feel for your student audience.This Virtual Clicker is an interactive response system used by instructors in classrooms or meetings for polling audiences with mobile devices,laptops, Pc's</p>
							<h1>FeedBack</h1>
							<p>i wanted to utilize active learning smart technology to optimize lecture delivery and enhance student understanding of concepts in real-time. REEF Polling gave students the ability to use their own device which increased the speed and ease of adoption <strong> - John Smith,  Havard University </strong></p>

							<p>Students simply use their smart devices to answer questions during class. It is inexpensive, easy to use, keeps students engaged and provides valuable feedback to both the instructor and the student regarding areas of confusion.<strong> - Cain Shmoke,  Stanford University </strong></p>
						
						

						<h1>Team Members</h1>
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="Blake Pic" src="images/blake.png" class="img-circle img-responsive">
							<div class="col-lg-12">
							<p> <a href="http://facultyprofile.csuohio.edu/csufacultyprofile/detail.cfm?FacultyID=BENBLAKE">Dr. Ben Blake</a> </p>
							<p><i>Owner/Ceo/Manager/Team Lead/Supervisor</i></p>
						</div>

						 </div>

						 <div class="col-md-3 col-lg-3 " align="center"> <img alt="Immanuel Pic" src="images/Immanuel.png" class="img-circle img-responsive">
							<div class="col-lg-12">
							<p> <a href="http://careers.stackoverflow.com/imgeorgeresume">Immanuel I George</a></p>
							<p><i>Software/UX Developer</i></p>
						</div>

						 </div>

						  <div class="col-md-3 col-lg-3 " align="center"> <img alt="David Pic" src="images/David.png" class="img-circle img-responsive">
							<div class="col-lg-12">
							<p><a href="https://www.linkedin.com/pub/david-jones/9a/b92/608">David Jones</a></p>
							<p><i>Database Admin/ Software Developer</i></p>
						</div>

						 </div>
						 	  <div class="col-md-3 col-lg-3 " align="center"> <img alt="Dan Pic" src="images/noprofile.png" class="img-circle img-responsive">
							<div class="col-lg-12">
							<p><a href="https://github.com/DanGrinblat">Dan Grinblat </a></p>
							<p><i>Software Developer/QA Analyst</i></p>
						</div>

						 </div>

						   <div class="col-md-3 col-lg-3 " align="center"> <img alt="Gergius Pic" src="images/noprofile.png" class="img-circle img-responsive">
							<div class="col-lg-12">
							<p><a href="https://github.com/G-Square">George Gergius</a></p>
							<p><i> Sr. Software Developer</i></p>
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
</html>

