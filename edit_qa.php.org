<HTML>
	<title>Clicker App Admin Home Page</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- gen.js needs to make sure jquery is loaded to work-->
	<script src="js/gen.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
	<head>
		<style>
			h1 {text-align:center;}
			h3 {text-align:center;}
			p {text-align:center;}
			table, th, td {border: 1px solid black;}
			table {width: 100%;}
			th, td {height: 50px; text-align:center;}
		</style>
	</head>
	<body style="background-color:#D8D8D8;">
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
							echo $_SESSION['reg_username'];
						} 
						?>
							</div>

					</a>
				
					</li>
						<li>
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
						<li  class="sidebar-brand">
							
							<a href="#">
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
							<h1>View/Edit Questions and Answers</h1>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<p>Enter Question Set Number: <input type="text" name="set_no" size="5" required>
								<input type="submit" value="View"></p><br><br>
							</form>
							<?php
								if(isset($_POST["set_no"]) && is_numeric($_POST["set_no"])) {
									$set_no = $_POST["set_no"];
									echo "<h3>Set Number " . $set_no . "</h3>";
									$teacher_id = $_SESSION["teacher_id"];
									$sql = "SELECT * FROM questions_answers WHERE teacher_id = '$teacher_id' AND set_no = '$set_no'";
									$result = $link->query($sql);
									
									echo  "<table class=\"table table-bordered table-striped\">
										<tr>
											<th>Question Number</th>
											<th>Question</th>
											<th>Answer 1</th>
											<th>Answer 2</th>
											<th>Answer 3</th>
											<th>Answer 4</th>
											<th>Correct Answer</th>
											<th>Edit?</th>
										</tr>";
									$i = 1;
									while($row = mysqli_fetch_array($result)) {
										echo "<tr>";
											echo "<td>" . $row["q_no"] . "</td>";
											echo "<td>" . $row["question"] . "</td>";
											echo "<td>" . $row["a1"] . "</td>";
											echo "<td>" . $row["a2"] . "</td>";
											echo "<td>" . $row["a3"] . "</td>";
											echo "<td>" . $row["a4"] . "</td>";
											echo "<td>" . $row["correct"] . "</td>";
											echo "<td> <input type='submit' value='Edit " . $i . "' name='edit" . $i . "'> </td>";
										echo "</tr>";
										$i = $i + 1;
									}
									echo "</table>";
								}
							?>
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