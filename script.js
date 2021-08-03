$(document).ready(function(){
    $(".slide-down").slideDown(1000);
    $("header").slideDown(1000);
    $("footer").slideDown(1000);
    $(".lang-button").click(function() {
        $(".lang-dropdown").slideToggle();
    });
    $('.nav-link, .lang-dropdown a, .container-galleries a').click(function() {
        var href = this.href;
        event.preventDefault();
        $(".slide-down").slideUp(1000);
        $("header").slideUp(1000);
        $("footer").slideUp(1000, function(){
            window.location = href;
        });
    }); 
});


