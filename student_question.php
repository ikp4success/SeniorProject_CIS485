<HTML>
	<title>Clicker App Student Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
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
	<div class="span2" >
		<a href="student_question.php" class="btn btn-info btn-lg">
			<span class="glyphicon glyphicon-circle-arrow-right"> </span> Refresh</a>
		</div>
		<?php
		session_start();

		include "db.php";


		$sql  = "SELECT q_no, correct, set_no, question, a1, a2, a3, a4 FROM questions_answers";
		
		$result = $link->query($sql);
		
		if($result == false) {

			echo '<a href="private.php">Error: cannot execute query</a>';
			exit;
		}

		$i = 0;

		while($row=mysqli_fetch_array($result)){

			print '<h1><p>' . htmlspecialchars($row["question"]) . '</p></h1><form method="post" action="submit_question_action.php" name=ans_form>';
					//echo "\n";
					print '<div class="radio">
				<label>
					<input type="radio" name="ans'. $i .'" id="student_ans" value=" '. htmlspecialchars($row["a1"]) . ' " checked > A. ' . htmlspecialchars($row["a1"]) . '</label></div>';
							//echo "\n";
							print '<div class="radio">
						<label>
							<input type="radio" name="ans'. $i .'" id="student_ans" value=" ' . htmlspecialchars($row["a2"]) . ' "> B. ' . htmlspecialchars($row["a2"]) . '</label></div>';
									//echo "\n";
									print '<div class="radio">
								<label>
									<input type="radio" name="ans'. $i .'" id="student_ans" value=" ' . htmlspecialchars($row["a3"]) . ' "> C. ' . htmlspecialchars($row["a3"]) . '</label></div>';
											//echo "\n";
											print '<div class="radio">
										<label>
											<input type="radio" name="ans'. $i .'" id="student_ans" value=" ' . htmlspecialchars($row["a4"]) . ' "> D. ' . htmlspecialchars($row["a4"]) . '</label>
										</div>';
										//echo "\n";
										$_SESSION["q_no"] = $row["q_no"];
										$_SESSION["correct"] = $row["correct"];
										$_SESSION["set_no"] = $row["set_no"];
										$i++;
									}


									?> 
									

									<br>

									<!-- <div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:5%">

										</div> -->
							
										<div id="submitformans" class="span2" type="submit">
		<a class="btn btn-info btn-lg confirmation">
			<span class="glyphicon glyphicon-circle-arrow-right"> </span> Submit</a>
		</div>

		</form>
									</div>
									</div>
									</div>
									</div>
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



<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are You Sure You Want to Submit?');
    });
</script>

<script>
jQuery(document).ready(function($){
    //use on(), as it's the recommended method
    $('#submitformans').on('click', function () {
        //use plain JavaScript. Forms are easily accessed with plain JavaScript.
        document.ans_form.submit();
        //alert('alert');
    });
});

</script>




	</div>
</body>
</HTML>

