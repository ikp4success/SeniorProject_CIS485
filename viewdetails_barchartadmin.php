<!DOCTYPE HTML>
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
	<head>
		<style>
			h1 {
				text-align: center;
			}

			h3 {
				text-align: center;
			}

			p {
				text-align: center;
			}

			table, th, td {
				border: 1px solid black;
			}

			table {
				width: 100%;
			}

			th, td {
				height: 50px;
				text-align: center;
			}
		</style>
	</head>
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
						include "db.php";
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
							
							<a href="#"><div class="formatbar">
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
									<td>Admin User Portal</td>

								
							</p>

						</div>

							<div id="ans1students" >
				
										Total Students Who Selected Option A: <?php 
											include "db.php"; 
											$tid = $_SESSION["teacher_id"];
											$set_no = $_SESSION["set_no"];
											$sql="select count(response)
													from poll_results
													where teacher_id = '$tid'
													and set_no = '$set_no'
													and q_no = 1
													and response = 1"; 
											$result = $link->query($sql);
											$row = mysqli_fetch_array($result);
											echo $row["count(response)"];
											

											?>

										</div>

										<div id="ans2students" >
											
											Total Students Who Selected Option B: <?php 
											include "db.php"; 
											$tid = $_SESSION["teacher_id"];
											$set_no = $_SESSION["set_no"];
											$sql="select count(response)
													from poll_results
													where teacher_id = '$tid'
													and set_no = '$set_no'
													and q_no = 1
													and response = 2"; 
											$result = $link->query($sql);
											$row = mysqli_fetch_array($result);
											echo $row["count(response)"];
											

											?>

										</div>

										<div id="ans3students" >
											
											Total Students Who Selected Option C: <?php 
											include "db.php"; 
											$tid = $_SESSION["teacher_id"];
											$set_no = $_SESSION["set_no"];
											$sql="select count(response)
													from poll_results
													where teacher_id = '$tid'
													and set_no = '$set_no'
													and q_no = 1
													and response = 3"; 
											$result = $link->query($sql);
											$row = mysqli_fetch_array($result);
											echo $row["count(response)"];
											

											?>

										</div>

										<div id="ans4students" >
											
											Total Students Who Selected Option D: <?php 
											include "db.php"; 
											$tid = $_SESSION["teacher_id"];
											$set_no = $_SESSION["set_no"];
											$sql="select count(response)
													from poll_results
													where teacher_id = '$tid'
													and set_no = '$set_no'
													and q_no = 1
													and response = 4"; 
											$result = $link->query($sql);
											$row = mysqli_fetch_array($result);
											echo $row["count(response)"];
											

											?>

										</div>

										<div  class="span2" type="submit">
		<a class="btn btn-info btn-lg confirmation" href="admin_grade.php">
			<span class="glyphicon glyphicon-circle-arrow-right"> </span> Go Back</a>
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