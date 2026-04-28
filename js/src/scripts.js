console.log("test");
console.log(2+2);





$(document).ready(function() {

    /* Function for About Menu button to scroll to About section */
    $(".slide-to-about").click(function(){
        console.log("click");
        var offset = $("#aboutContainer").offset();
        $("html, body").animate({
            scrollTop: offset.top,
            scrollLeft: offset.left
            }, 800)
    });

    /* Function for Projects Menu button to scroll to Projects section */
    $(".slide-to-projects").click(function(){
        console.log("click");
        var offset = $("#projectsContainer").offset();
        $("html, body").animate({
            scrollTop: offset.top,
            scrollLeft: offset.left
            }, 800)
    });

     /* Function for Contact Menu button to scroll to Contact section */
    $(".slide-to-contact").click(function(){
        console.log("click");
        var offset = $("#contactContainer").offset();
        $("html, body").animate({
            scrollTop: offset.top,
            scrollLeft: offset.left
            }, 800)
    });

    // /* Function for Projects Menu button to scroll to Projects section */
    // $(".slide-to-PCMS").click(function(){
    //     //var offset = $("#rowPCMS").offset();
    //     $("html, body").animate({
    //         scrollBottom: $(this).offset().top + $(this).height() / 2,
    //         scrollLeft: offset.left
    //         }, 800)
    // });

    /*Functions to fade in text on page load*/
    $("#siteLogo").delay(250).animate({'opacity':'1'},1600);
    $(".slide-to-about").delay(350).animate({'opacity':'1'},1600);
    $(".slide-to-projects").delay(450).animate({'opacity':'1'},1600);
    $(".slide-to-contact").delay(550).animate({'opacity':'1'},1600);
  $("#svgImg").delay(2750).animate({'opacity':'1'},1600);
    $("#svgImgTwo").delay(2750).animate({'opacity':'1'},1600);
    
    if ($(window).width() > 991) {
        $("#fName").delay(1000).animate({'opacity':'1','margin-right':'+=5rem'},1600);
        $("#lName").delay(1750).animate({'opacity':'1','margin-right':'+=5rem'},1600);
        $("#leadTitle").delay(2250).animate({'opacity':'1','margin-right':'+=5rem'},1600);
     } else if ($(window).width() > 768){
        $("#fName").delay(1000).animate({'opacity':'1','margin-right':'+=2.5rem'},1600);
        $("#lName").delay(1750).animate({'opacity':'1','margin-right':'+=2.5rem'},1600);
        $("#leadTitle").delay(2250).animate({'opacity':'1','margin-right':'+=2.5rem'},1600);
     }
     else {
        $("#fName").delay(1000).animate({'opacity':'1'},1600);
        $("#lName").delay(1750).animate({'opacity':'1'},1600);
        $("#leadTitle").delay(2250).animate({'opacity':'1'},1600);
     }



    /*On Project Image Click, toggle image max height class*/

    $(".maxImage").click(function(){
        $(".contentCardOne").toggleClass("maxImageHeight", 3000);
    });

    $(".maxImage").click(function(){
        $(".contentCardOne").toggleClass("bringToFront", 3000);
    });

   





    /* Project Accordion Cards Content and Slide */

    /* Assign IDs to project cards and make them tab-able */
        $(".projectCard").each(function(i){ // for each instance of card content
            $(this).attr("id", $(this).find("h3").text().split(' ')[0]); //assign ID of header text to this element
            $(this).attr("tabindex", "0"); //assign tabindex of 0 so that cards can be tabbed through
        })

    /* Assign IDs to expandable row content and make them tab-able */
        $(".expandedContent").each(function(i){ // for each instance of expanded content
            var ecRow = $(this).find("h4").text().split(' ')[0]; //assign ID of header text to this element
            //console.log("row"+ecRow);
            $(this).attr("id", "row"+ecRow);
            //$(this).attr("tabindex", "0"); //assign tabindex of 0 so that cards can be tabbed through
        })


    /*Setup reusable function for expanding content*/
        function projectScroll(ele) {
            var el = $(ele)
            console.log(el);
            var cardID = $(el).attr("id"); //assign id of clicked element and assign to variable
            if ($(el).hasClass("active-card")) { //if clicked element has class of active-card
                $(el).removeClass("active-card"); //then remove the class of active card from clicked element
                $("#row"+cardID).slideToggle("slow").removeClass("active"); //find row that corresponds to clicked element id and toggle it and remove .active
            } else { //if clicked element does not have .active-card
                $(".active-card").removeClass("active-card"); //from previously clicked card remove .active-card
                $(".expandedContent.active").slideToggle("slow").removeClass("active"); //hiding previously shown row
                $(el).addClass("active-card"); //add .active-card to newly clicked element
                $("#row"+cardID).slideToggle("slow").addClass("active"); //show newly clicked element row
            }


     /* If statement to slide content down to appropriate content row */     
            if((window.outerWidth < 2000) & ($(el).hasClass("active-card"))) { //if window is less than certain width AND the project card has a class of active-card being applied
                var offset = $("#cardRow").offset();
                    console.log(offset.top + $('#expandedContentRow').height());
                    console.log($('#expandedContentRow').outerHeight());
                    $("html, body").animate({
                    scrollTop: offset.top + $('#cardRow').outerHeight(),
                    scrollLeft: offset.left
                    }, 800) 
            }
        }
 

    /*On Click*/
        $(".projectCard").click(function(e){ //when element of class .expandedContent is clicked
            e.preventDefault(); //ignore other actions and complete this code
            projectScroll(this);
        });


    /*On Enter*/  
        $(".projectCard").on('keypress', function(e){ //when element of class .expandedContent has the enter key pressed on it
            if(e.which == 13) { //set the key press value to the enter key
                e.preventDefault(); //ignore other actions and complete this code
                projectScroll(this);
            }
        });
});



