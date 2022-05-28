jQuery(document).ready(function($){
    
$(".hamburger").click(function(){
    $(".main-nav-mob").toggleClass("move");
    $(this).toggleClass("close-menu");
});
$(window).scroll(function(){
    if ($(window).scrollTop() > 100) {
        $('.main-header').addClass('stiky');
    }
    else {
        $('.main-header').removeClass('stiky')
    }
});
});