

$(".name").focus(function(){
  $(".name-help").slideDown(500);
}).blur(function(){
  $(".name-help").slideUp(500);
});

$(".email").focus(function(){
  $(".email-help").slideDown(500);
}).blur(function(){
  $(".email-help").slideUp(500);
});


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});