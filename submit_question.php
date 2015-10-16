<HTML>
	<title>Clicker App Student Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel='stylesheet' type='text/css'>
	<!-- <link href='css/style.css' rel='stylesheet' type='text/css'> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<link href="css/question_answer.css" rel="stylesheet" media="all" />
	<body >
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
						<li class="sidebar-brand">
							
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
						
		

<div class="container">
<div class="jumbotron" >
	<div class="row">
		<div class="span4">
			<h1>
	<p>
			Questions submitted succesfully. Navigate to grade section to see how you every one did in class.
		</br>
		</br>
			Thanks for participating.
	</p>
</h1>
			

	
									</div>
									</div>
									</div>
									</div>
								</div>
								<div class="col-lg-12">
							
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



<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are You Sure You Want to Submit?');
    });
</script>




	</div>
</body>
</HTML>

