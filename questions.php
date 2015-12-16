<!DOCTYPE html>
<head>
    <title>Clicker App Questions</title>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel='stylesheet' type='text/css'/>
    <link href='css/style.css' rel='stylesheet' type='text/css'/>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/AddQuestions.js"></script>

    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="css/simple-sidebar.css" rel="stylesheet" media="all" />
<script>
    $(document).ready(function(){
        // helper function: log message to screen
        function log(msg) {
            console.log(msg + '\n');
        }
        var host = "ws://159.203.85.220:8080/";
        ws = new WebSocket(host);

        ws.onopen = function (evt) {
        log('connected to WebSocket :)');
        };

        ws.onclose = function (evt) {
        log('closed WebSocket :(');
        }; //on close event

        ws.onmessage = function (evt) {
            log('msg: '+evt.data);
        };

        ws.onerror = function (evt) {
            log('error on WebSocket :(!');
        };
        //on click of send button
        $("input[name='send']").click(function(){
            <?php 	session_start(); echo 'var prof_ID ="'.$_SESSION["teacher_id"].'";';?>
            mesobj={
                prof: prof_ID,
                set: document.getElementById("set_no").innerHTML,
                question: document.getElementById("question_no").innerHTML,
                timeOut: document.getElementById("set_time_out").value,
                live_mode: document.getElementsByName("live_mode")[0].value
            };
            var mymessage = JSON.stringify(mesobj);
            ws.send(mymessage);
        });

});
</script>
    <script>
        $(document).ready(function() {
            $('input[type=radio]').on('change', function () {
                if (!this.checked) return
                $('#collapseID').not($('div.' + $(this).attr('class'))).slideUp();
                $('#collapseID.' + $(this).attr('class')).slideDown();

            });
        ///BOOTSTRAP BUG checked does not work!! need this to bypass ahhh...
        $('#option_live').on('change', function(){
            document.getElementsByName("live_mode")[0].value= 1;
        });
            $('#option_quiz').on('change', function(){
                document.getElementsByName("live_mode")[0].value= 0;
            });

        });
    </script>

</head>

<body style="background-color:#FFFFFF;  box-shadow: 5px 8px 7px 2px #A2A2A2;">
<div id="container">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li style="background-color:#045FB4;"><a style="color:#FFFFFF;" href="admin_profile.php"> 	<div class="formatbar">
                            <img src="images/professor-32.png">
                            Welcome, <?php
                            session_start();
                            if (isset($_SESSION['reg_username'])) {
                                echo  $_SESSION['reg_username'];
                            }
                            ?>
                        </div></a></li>
                </li>
                <li>


                    <a href="admin_home.php">
                        <div class="formatbar">
                            <img src="images/home.png">
                            Admin Home
                        </div>
                    </a>

                </li>
                <li class="sidebar-brand">

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

                    <a href="admin_grade.php"><div class="formatbar">
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
            				<form method="post" action="update_q_no.php">
                                <div>
                                    <label for="setNumber">Set Number:</label>
                                     <input id="setNumber" class="form-control " style="width:auto;"  type="number" min="1" max="1000" name="set_no" size="5" value="<?php
												echo ((isset($_SESSION['set_no'])) ? $_SESSION['set_no']: $_SESSION['set_no']="1");?>" required>

								<input class="btn btn-info " type="submit" value="Update Set">
                                </div>
							</form>

                           		<h3>Set: <?php
                                    include_once "update_q_no.php";

                                    //update_q($link);
                                    echo'<label id="set_no">'.$_SESSION['set_no'].'</label> Question: <label id="question_no">'.$_SESSION["q_no"].'</label>';?>
                                </h3>

                <form role="form" method="post" action="post_question.php">
                    <div>
                        <input type="hidden" name="set_no" value="<?php echo $_SESSION['set_no'];?>"  />
                    <label for="correct-label">Correct answer:</label>
                    <select id="correct" name="correct" placeholder="1" required="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
            </div>
            <div id="mode_option" class="btn-group " data-toggle="buttons">
                <input type="hidden" name="live_mode" value=<?php 	session_start();
                echo $_SESSION["live_mode"];?>>
                <label class="btn btn-primary <?php session_start();
                echo (isset($_SESSION["live_mode"]) && $_SESSION["live_mode"] == 1 )?"":"active"?>">
                    <input type="radio" name="mode" id="option_quiz" autocomplete="off">Quiz Mode
                </label>
                <label class="btn btn-primary <?php session_start();echo (isset($_SESSION["live_mode"]) && $_SESSION["live_mode"] == 1 )? "active": "";?>">
                    <input class="collapse" type="radio" name="mode"  id="option_live" autocomplete="off" >Live Mode
                </label>
            </div>

            <div class="collapse" id="collapseID">
                <div class="well">
                    <label>Seconds to complete</label>
                    <input id="set_time_out" class="form-control"  style="width:auto;" type="number" min="3" max="1000" name="set_time_out" size="5" value="<?php session_start();echo (isset($_SESSION["timeOut"]) && $_SESSION["timeOut"] >= 1 )? $_SESSION["timeOut"]: 60;?>" required>

                </div>
            </div>



            <div class="col-lg-12">
                <div class="row">
						<div class="multi-choice-form">
								<textarea class="form-control" name="question" placeholder="Question?" rows="5" required></textarea> <!--question-->
								<div class="multi-choice-container">
									<label for="multi-choice1"><span class="multi-choice-index">1</span></label>
									<textarea class="form-control" placeholder="Multi choice answer" rows="5" name="multi-choices" id="multi-choice1" required/></textarea><!--answer1-->
									<a class="add-multi-choice btn btn-sm btn-success" href="#">Add</a>
								</div>
							<div>
								<input class="btn btn-primary pull-right" type="submit" value="Save">
								<input name="send" class="btn btn-success pull-right" type="submit" value="Send">
							</div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
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