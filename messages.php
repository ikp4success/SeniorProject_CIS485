<?php



?>
<!DOCTYPE html>
<html>

<head>

    <!-- All the files that are required -->
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <script type="text/javascript">
        jQuery(document).ready(function($){
            //Add multi-choice answer
            $('.multi-choice-form .add-multi-choice').click(function(){
                //alphabetically
               // var a = String.fromCharCode(64+$('.multi-choice-container').length + 1);

                var n = $('.multi-choice-container').length + 1;

                //set max multi choices
                if( 10 < n ) {return false;}

               // var edited_html = $('<p class="text-box"><label for="box' + n + '">Box <span class="box-number">' + n + '</span></label> <textarea type="text" name="boxes[]" value="" id="box' + n + '" /></textarea> <a href="#" class="remove-box">Remove</a></p>');

                var edited_html =
                    $('<div class="multi-choice-container">' +
                        '<label for="multi-choice' + n + '"><span class="multi-choice-index">' + n + '</span></label>' +
                        '<textarea placeholder="Multi choice answer" style="width: 100%; height: 5%;" name="multi-choices[]" id="multi-choice' + n + '" /></textarea> ' +
                        '<a href="#" class="remove-multi-choice btn btn-sm btn-danger"">Remove</a></div>');

                edited_html.hide();
                $('.multi-choice-form div.multi-choice-container:last').after(edited_html);
                edited_html.fadeIn('slow');
                return false;
            });
            /////////end of multi-choice answer


            //Remove multi-choice answer
            $('.multi-choice-form').on('click', '.remove-multi-choice', function(){
                $(this).parent().fadeOut("slow", function() {
                    $(this).remove();
                    $('.multi-choice-index').each(function(index){
                       $(this).text( index + 1 );
                    });
                });
                return false;
            });
        });
    </script>


    <title>Set-multi-choice question</title>
</head>
<body>


<div class="text-center" style="padding:20px 0">
    <div>
        <img src="images/csulogo.png" alt="Mountain View">

    </div>
    <div class="logo"> Clicker App</div>
    <p>Class Name/number: <?php $class?> </p>
    <p>Total connected students: <?php $total_students?> </p>
    <p>Gender ratio (M/F): <?php $gender_ratio?></p>


<div class="multi-choice-form">
    <form role="form" method="post">
        <textarea name="question" placeholder="Question?" style="width: 100%; height: 5%;"></textarea>
        <div class="multi-choice-container">
            <label for="multi-choice1"><span class="multi-choice-index">1</span></label>
            <textarea placeholder="Multi choice answer" style="width: 100%; height: 5%;" name="multi-choices[]" id="multi-choice1" /></textarea>
            <a class="add-multi-choice btn btn-sm btn-success" href="#">Add</a>
        </div>
        <p><input class="btn btn-primary" type="submit"  value="Save" /><input class="btn btn-success" type="submit" value="Send" /></p>
    </form>
</div>

</body>
<footer>
    <p>Copyright &copy; 2015 Senior Project CIS485</p>
    <p><a href="mailto:ig@gmail.com">Contact</a></p>
</footer>
</html>

