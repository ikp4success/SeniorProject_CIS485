<body style="background-color:#D8D8D8;">
<div id="container">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li style="background-color:#045FB4;"><a style="color:#FFFFFF;" href="student_profile.php">
                        <div class="formatbar">
                            <img src="images/student-32.png">
                            Welcome, <?php
                            session_start();

                            if (isset($_SESSION['reg_username'])) {
                                echo $_SESSION['reg_username'];
                            }
                            ?>
                        </div>
                    </a></li>
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
                            Answers
                        </div>
                    </a>

                </li>
                <li>

                    <a href="#">
                        <div class="formatbar">
                            <img src="images/letter.png"> Grades
                        </div>
                    </a>

                </li>
                <li class="sidebar-brand">

                    <a href="about.php">
                        <div class="formatbar">
                            <img src="images/about.png"> About
                        </div>
                    </a>

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
                <p class="sidebar-copyright">&copy; 2015 Senior Project CIS485 Clicker App. <a
                        href="mailto:CIS485@csuohio.com">Contact</a></p>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->