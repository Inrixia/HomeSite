$(function() {
    $('#tab-button').click(function(e) {
        $(".new-user-form").delay(100).fadeIn(100);
        $(".login-form").fadeOut(100);
        e.preventDefault();
    });
    $('#tab-button-login').click(function(e) {
        $(".login-form").delay(100).fadeIn(100);
        $(".new-user-form").fadeOut(100);
        e.preventDefault();
    });
});
