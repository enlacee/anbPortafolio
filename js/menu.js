// DOM Ready
$(function() {

    var $el, leftPos, newWidth;      
    var magic_line=false;
    /*
        EXAMPLE ONE
    */
    
    /* Add Magic Line markup via JavaScript, because it ain't gonna work without */

        
    $("#example-one li").each(function(){
        var $this = this;//console.log($this);        
        if( $($this).attr('id') == 'magic-line'){            
            magic_line = true;           
        }        
    });        

    
    if(magic_line!=true){
         $("#example-one").append("<li id='magic-line'></li>");         
    }

    
    
    /* Cache it */
    var $magicLine = $("#magic-line");    
    //console.log($(".current_page_item a").position().left);
    $magicLine
        .width($(".current_page_item").width())
        .css("left", $(".current_page_item a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());

    console.log("BUG");    
    console.log($magicLine);        
        
    $("#example-one li").find("a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    },function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });
    
    
   //active
    //console.log($("#example-one li").hasClass("active"));


/*
    $(".sayHi").click(function(event){
        $(this).trigger("erickrdch.sayHi", [$(".console"), "Erick"]);
    });*/

    /*

    // jQuery
    $(window).on('click',"#example-one li", function(event, target, message){

        if(this.hasClass("active")){
            console.log("Encontro");
        }else{
            console.log("No Encontro");
        }
        //target.html("Howdy " + message + "!");
        console.log("ANB.CAMBIO escuchando!!");
        // $magicLine.stop().animate({
        //     left: $magicLine.data("origLeft"),
        //     width: $magicLine.data("origWidth")
        // });  

    });

*/

    
});