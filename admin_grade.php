<!DOCTYPE HTML>
<html lang="en">
	<title>Clicker App Admin Home Page</title>
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
	<!-- Morris Charts CSS -->
	<link href="css/plugins/morris.css" rel="stylesheet"/>
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
						<div class="col-lg-12">
							<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
							<h1>GRADES</h1>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
								<p>Enter Question Set Number:

								<?php
									if(isset($_POST["set_no"]))
										$set_no = $_POST["set_no"];
									else
										$set_no = $_SESSION["set_no"];
								?>
								<div class="col-xs-2 col-xs-offset-5">
									<input class="form-control" type="number" min="1"
										   value="<?php echo $set_no; ?>" name="set_no" size="5" required>
								</div>
								<input type="submit" value="View"></p><br><br>
							</form>
							<?php
							if ((isset($_POST["set_no"]) && is_numeric($_POST["set_no"])) || isset($_SESSION["set_no"])) {
								if(isset($_POST["set_no"])) 
									$set_no = $_SESSION["set_no"] = $_POST["set_no"];
								else
									$set_no = $_SESSION["set_no"];
								
								echo "<h3>Set Number " . $set_no . "</h3>";
								$teacher_id = $_SESSION["teacher_id"];
								$sql = "SELECT * FROM poll_results WHERE teacher_id = '$teacher_id' AND set_no = '$set_no'";
								$result = $link->query($sql);
								
								echo "<table class=\"table table-bordered table-striped\">
										<tr>
											<th>Student ID</th>
											<th>Student First Name</th>
											<th>Number Correct</th>
											<th>Total Questions</th>
											<th>Percentage</th>
										</tr>";
								$sum = 0;
								$total = 0;
								//$prev_stu = "";
								//$stu_name = "";
								$first = true;
								while($row=mysqli_fetch_array($result)){
									$curr_stu = $row["stu_id"];
									
									if($first) {
										$prev_stu = $curr_stu;
										$stu_name = $row["stu_fname"];
										$first = false;
									}
									
									if($curr_stu == $prev_stu) {
										$total++;
										if($row["correct_yn"] == "Y")
											$sum++;
										
									}
									else {
										echo "<tr>";
										echo "<td>" . $prev_stu . "</td>";
										echo "<td>" . $stu_name . "</td>";
										echo "<td>" . $sum . "</td>";
										echo "<td>" . $total . "</td>";
										$percent = (($sum / $total) * 100);
										echo "<td>" . round($percent, 2) . "</td>";
										echo "</tr>";
										$sum = 0;
										$total = 1;
										$stu_name = $row["stu_fname"];
										if($row["correct_yn"] == "Y")
											$sum++;
									}
									
									$prev_stu = $curr_stu;
								}
								echo "<tr>";
								echo "<td>" . $prev_stu . "</td>";
								echo "<td>" . $stu_name . "</td>";
								echo "<td>" . $sum . "</td>";
								echo "<td>" . $total . "</td>";
								$percent = (($sum / $total) * 100);
								echo "<td>" . round($percent, 2) . "</td>";
								echo "</tr>";
								echo "</table>";
							}
							?>
						</div>

							<div class="col-lg-4">
													<div class="panel panel-primary">
														<div class="panel-heading">
															<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Representation Of Options Selected</h3>
														</div>
														<div class="panel-body">
															<div id="morris-bar-chart"></div>
															<div class="text-right">
																<a href="viewdetails_barchartadmin.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
															</div>
															<br>
															<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
															<p>Question Number: 
															<?php
																if(isset($_POST["chart_q_no"]))
																	$chart_q_no = $_POST["chart_q_no"];
																else
																	$chart_q_no = $_SESSION["chart_q_no"];
															?>
															<input type="number" min="1" value="<?php echo $chart_q_no; ?>" name="chart_q_no" required> 
															<input type="submit" value="Submit">
															</p>
															</form>
															<?php
																if(isset($_POST["chart_q_no"]) && is_numeric($_POST["chart_q_no"])) {
																	$_SESSION["chart_q_no"] = $_POST["chart_q_no"];
																}
															?>
														</div>
													</div>
												</div>


												<div class="col-lg-4">
													<div class="panel panel-primary">
														<div class="panel-heading">
															<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Donut Chart Representation of Students</h3>
														</div>
														<div class="panel-body">
															<div id="morris-donut-chart"></div>
															<div class="text-right">
																<a href="viewdetails_donutchartadmin.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>


					</div>
				</div>
			</div>
			<!-- /#page-content-wrapper -->
				<div id="totalStudents" hidden>
				
				<?php 
				$sql="SELECT * FROM  users where admin_yn = 'N'"; 
				$result = $link->query($sql);
				echo $result->num_rows;
				

				?>

			</div>
			<div id="totalStudentsanswered" hidden>
				
				<?php 
				$sql="SELECT DISTINCT stu_id FROM poll_results"; 
				$result = $link->query($sql);
				echo $result->num_rows;
				

				?>

			</div>

			<div id="totalStudentscorrect" hidden>
				
				<?php 
				$sql="SELECT DISTINCT `stu_id` FROM `poll_results` WHERE `correct_yn` ='Y'"; 
				$result = $link->query($sql);
				echo $result->num_rows;
				

				?>

			</div>

			<div id="totalStudentsfail" hidden>
				
				<?php 
				$sql="SELECT DISTINCT `stu_id` FROM `poll_results` WHERE `correct_yn` ='N'"; 
				$result = $link->query($sql);
				echo $result->num_rows;
				

				?>

			</div>

			<div id="ans1students" hidden>
				
				<?php
				if(isset($_SESSION["chart_q_no"]))
					$q_no = $_SESSION["chart_q_no"];
				else
					$q_no = 1;
				$tid = $_SESSION["teacher_id"];
				$set_no = $_SESSION["set_no"];
				$sql="select count(response)
						from poll_results
						where teacher_id = '$tid'
						and set_no = '$set_no'
						and q_no = '$q_no'
						and response = 1"; 
				$result = $link->query($sql);
				$row = mysqli_fetch_array($result);
				echo $row["count(response)"];
				

				?>

			</div>

			<div id="ans2students" hidden>
				
				<?php 
				if(isset($_SESSION["chart_q_no"]))
					$q_no = $_SESSION["chart_q_no"];
				else
					$q_no = 1;
				$tid = $_SESSION["teacher_id"];
				$set_no = $_SESSION["set_no"];
				$sql="select count(response)
						from poll_results
						where teacher_id = '$tid'
						and set_no = '$set_no'
						and q_no = '$q_no'
						and response = 2"; 
				$result = $link->query($sql);
				$row = mysqli_fetch_array($result);
				echo $row["count(response)"];
				

				?>

			</div>

			<div id="ans3students" hidden>
				
				<?php 
				if(isset($_SESSION["chart_q_no"]))
					$q_no = $_SESSION["chart_q_no"];
				else
					$q_no = 1;
				$tid = $_SESSION["teacher_id"];
				$set_no = $_SESSION["set_no"];
				$sql="select count(response)
						from poll_results
						where teacher_id = '$tid'
						and set_no = '$set_no'
						and q_no = '$q_no'
						and response = 3"; 
				$result = $link->query($sql);
				$row = mysqli_fetch_array($result);
				echo $row["count(response)"];
				

				?>

			</div>

			<div id="ans4students" hidden>
				
				<?php 
				if(isset($_SESSION["chart_q_no"]))
					$q_no = $_SESSION["chart_q_no"];
				else
					$q_no = 1;
				$tid = $_SESSION["teacher_id"];
				$set_no = $_SESSION["set_no"];
				$sql="select count(response)
						from poll_results
						where teacher_id = '$tid'
						and set_no = '$set_no'
						and q_no = '$q_no'
						and response = 4"; 
				$result = $link->query($sql);
				$row = mysqli_fetch_array($result);
				echo $row["count(response)"];
				

				?>

			</div>

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