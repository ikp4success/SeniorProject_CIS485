<!DOCTYPE html>
<head>
	<title>Clicker App Student Home Page</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'/>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link  type="text/css" rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link type="text/css" rel="stylesheet" href="css/simple-sidebar.css" media="all" />
	<script type='text/javascript'>
		function setMyTeacher(value) {
			xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET", "set_teacher.php?value=" + value, true);
			xmlhttp.send();
			window.location = window.location.href;
		}
	</script>
</head>

	<body style="background-color:#FFFFFF;  box-shadow: 5px 8px 7px 2px #A2A2A2;">
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
						include "db.php";
						if (isset($_SESSION['reg_username'])) {
							echo  $_SESSION['reg_username'];
						} 
						?>
							</div>

					</a>
				
					</li>
						<li class="sidebar-brand">
							
							
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
						<div class="jumbotron">
							<div class="container">
								<p>
									<h1>Student User Portal</h1>
									<p>
										<h2>Online Student Orientation Course</h2>
<p>
Welcome Students!<br>
The Center for eLearning has developed an online student orientation course for students who are interested in learning more about ClickerApp and learning online.<br>
If you are taking an online course or program, we recommend enrolling in this short course.<br>
After completing the course, you will be able to:<br>
<ul> <font size="4.5">
<li>Navigate the ClickerApp course environment</li><br>
<li>Edit your personal information and settings</li><br>
<li>Communicate using messages, email and discussions,</li><br>
<li>Submit assignments and assessments</li><br>
<li>Identify behaviors that will help you succeed as an online student</li>
</font>
</ul>
</p>

									</p>
							</div>
						</div>
						<h3>Selected professor: <?php 	
													//changed logic here, to show teacher's name instead of id number
													$tname = "None";
													if(isset($_SESSION["my_teacher"])) {
														$tid = $_SESSION["my_teacher"];
														$sql = "select l_name, f_name from users where admin_yn = 'Y' and id = '$tid'";
														$result = $link->query($sql);

														if($result == false) {
															echo '<a href="exit.php">Error: cannot execute query</a>';
															exit;
														}
														
														$row = mysqli_fetch_array($result);
														
														$tname = $row["l_name"] . ", " . $row["f_name"];
														
													}
													echo $tname;
												?>
						</h3>
								<br>
								
								<form  name="search" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
									<div class="row">
										<div class="col-lg-6">
											<div class="input-group">
												<input type="text" class="form-control" name="full_name" placeholder="Find professor enter full name...">
												<span class="input-group-btn">
        										<button type="submit" class="btn btn-default">Search
													<i class="glyphicon glyphicon-search"></i></button>
												</span>
											</div><!-- /input-group -->
										</div><!-- /.col-lg-6 -->
									</div><!-- /.row -->
								</form>
	
								<?php
									if(isset($_SESSION["my_teacher"])) {
										echo "<h4>Enter a Question Set Number</h4>";
										echo "<form method=\"post\" action=\"set_set_no.php\">";
										echo "<input type=\"number\" min=\"1\" value=\"1\" name=\"set_no\" id=\"set_no\" required>";
										echo "<input type=\"submit\" value=\"Submit\">";
										echo "</form>";
									}
									
									if(isset($_POST['full_name']))
									{
										$full_name = $_POST['full_name'];
										$name = preg_split('/[\s,]+/', $full_name);
										$f_name = !empty($name[0])?$name[0]:"%";
										$l_name = !empty($name[1])?$name[1]:"%";
										$sql = "select l_name, f_name, id from users where admin_yn = 'Y' and f_name like \"$f_name\" and l_name like \"$l_name\" order by l_name";
										$result = $link->query($sql);

										if($result == false) {
											echo '<a href="exit.php">Error: cannot execute query</a>';
											exit;
										}

										echo "<table class=\"table table-bordered table-striped\">
											<tr>
												<th>First name</th>
												<th>Last name</th>
												<th class=\"col-sm-1\">Add</th>
											</tr>";

										$i = 1;
										while ($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td>" . $row["f_name"] . "</td>";
											echo "<td>" . $row["l_name"] . "</td>";
											echo "<td><button type=\"button\" class=\"btn btn-success btn-md\" onclick=\"setMyTeacher(".$row["id"].")\" \"> Add!  </button></td>";
											echo "</tr>";
										}
									}
									
								?>


							</div>


						<div class="col-lg-12">
							<!-- <h1>Simple Sidebar</h1>
							<p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
							<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->
							<br><br>
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

