<html lang="en">
<head>
	<title>Clicker App Student Users Page</title>
	<?php
	include("views/sidebar-head.php");
	?>
</head>

<body style="background-color:#D8D8D8;">
<?php
include("views/sidebar-body.php");
?>
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
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="Student User Pic" src="images/university1.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>


									<?php
									session_start();

									include "db.php";
									$reg_user = $_SESSION['reg_username'];

									$sql  = "SELECT reg_username, reg_gender,reg_fullname,reg_email
											 FROM student_users WHERE reg_username = '$reg_user'";

									$result = $link->query($sql);

									 if($result == false) {

									   echo '<a href="private.php">Error: cannot execute query</a>';
									   exit;
									 }


									if($row=mysqli_fetch_array($result)){

										echo '<tr><td> Username: '.$row["reg_username"].'</td></tr>';
										echo "\n";
										echo '<tr><td> Fullname: '.$row["reg_fullname"].'</td></tr>';
										echo "\n";
										echo '<tr><td> Gender: '.$row["reg_gender"].'</td></tr>';
										echo "\n";
										echo '<tr><td> Email: '.$row["reg_email"].'</td></tr>';
										echo "\n";


									}

								
								?> 
						
                     
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Edit Information</a>
                  <a href="#" class="btn btn-primary">Home</a>
                </div>
              </div>
            </div>
				</div>			

						</div>
						
				</div>
			</div>
			<!-- /#page-content-wrapper -->

		</div>
		<!-- /#wrapper -->





	</div>
</body>
</html>

