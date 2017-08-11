$(document).ready(function() {
    
$("#search_submit").on("click", function(e){


$(this).parent().parent().submit();


})

$(".menu-item-has-children").on("mouseover", function () {

  
  $( this ).find(".sub-menu").stop().fadeIn( 500 );

});


$(".big-icon").on("click",  function() {

$("#mainMenu").slideToggle("fast");


})

// Adding sumbmenu rollover effect

$(".menu-item-has-children").on("mouseout", function () {
$( this ).find(".sub-menu").stop().fadeOut( 100 );
});




// editing wordpress templates adding classes 

$("textarea").addClass("form-control");
$("input[type=text]").addClass("form-control");
$("input[type=password]").addClass("form-control");
$("input[type=email]").addClass("form-control");
$("input[type=url]").addClass("form-control");
$("input[type=submit]").addClass("btn");
$(".comment-reply-link").addClass("btn");
 
});