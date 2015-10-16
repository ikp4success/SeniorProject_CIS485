jQuery(document).ready(function($){
    //Add multi-choice answer
    $('.multi-choice-form .add-multi-choice').click(function(){
        //alphabetically
        // var a = String.fromCharCode(64+$('.multi-choice-container').length + 1);

        var n = $('.multi-choice-container').length + 1;

        //set max multi choices
        if( 4 < n ) {return false;}

        // var edited_html = $('<p class="text-box"><label for="box' + n + '">Box <span class="box-number">' + n + '</span></label> <textarea type="text" name="boxes[]" value="" id="box' + n + '" /></textarea> <a href="#" class="remove-box">Remove</a></p>');

        var edited_html =
            $('<div class="multi-choice-container">' +
                '<label for="multi-choice' + n + '"><span class="multi-choice-index">' + n + '</span></label>' +
                '<textarea placeholder="Multi choice answer" style="width: 100%; height: 5%;" name="multi-choices'+n+'" id="multi-choice' + n + '" /></textarea> ' +
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