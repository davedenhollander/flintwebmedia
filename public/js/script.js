$(document).ready(function() {
    $('#nav-collapse').on('show.bs.collapse', function() {
        $('#nav-overlay').fadeIn();
    });

    $('#nav-collapse').on('hide.bs.collapse', function() {
        $('#nav-overlay').fadeOut();
    });

    $('#nav-overlay').click(function() {
        $('#nav-collapse').collapse('hide');
    });
});