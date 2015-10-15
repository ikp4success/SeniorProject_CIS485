<html lang="en">
<head>
    <title>Clicker App Questions</title>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
    <script src="js/AddQuestions.js"></script>
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
                <li class="sidebar-brand">

                    <a href="questions.php">
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

                    <div class="col-lg-12">


                        <div class="text-center" style="padding:20px 0">
                             <form role="form" method="post">
                                Correct answer: <input type="text" name="correct" placeholder="1"><br>

                            <div class="multi-choice-form">
                                    <textarea name="question" placeholder="Question?" style="width: 100%; height: 5%;"></textarea>
                                    <div class="multi-choice-container">
                                        <label for="multi-choice1"><span class="multi-choice-index">1</span></label>
                                        <textarea placeholder="Multi choice answer" style="width: 100%; height: 5%;" name="multi-choices" id="multi-choice1" /></textarea>
                                        <a class="add-multi-choice btn btn-sm btn-success" href="#">Add</a>
                                    </div>
                                    <p><input class="btn btn-primary" type="submit"  value="Save" /><input class="btn btn-success" type="submit" value="Send" /></p>
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
</html>

