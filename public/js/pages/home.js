$(document).ready(function() {
    $('.portfolio-item').click(function() {
        var el = $(this);

        $('.portfolio-item').removeClass('active');
        el.addClass('active');
    });
});