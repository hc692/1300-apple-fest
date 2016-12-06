//jQuery file for Apple Fest 

//global variables
var kid_stage = true;
var parent_stage = true;

$(document).ready(function() {
    
    
    //define functions
    
    //define AND call function
    $('#vendors_kids').click(function(){
        if (kid_stage) {
            $('#vendors_kids').attr('src', 'images/green.PNG');
            kid_stage = false;
            
        } else {
            $('#vendors_kids').attr('src', 'images/face_painting.jpg');
            kid_stage = true;
        }
    });

    
    $('#vendors_parents').click(function(){
        if (parent_stage) {            
            $('#vendors_parents').attr('src', 'images/red.PNG');
            parent_stage = false;
        } else {
            $('#vendors_parents').attr('src', 'images/IMG_6118.jpg');
            parent_stage = true;
        }
    });
    
    //call

});