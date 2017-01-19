/**
 * Created by !l-PazZ0 on 21/05/2016.
 */
$(document).ready(function () {
    $('ul#nav > li').click(function (e) {
        e.preventDefault();
        $('ul#nav > li').removeClass('active');
        $(this).addClass('active');
    });
});
$(document).ready(function () {
    $('ul.nav > li').click(function (e) {
        e.preventDefault();
        $('ul.nav > li').removeClass('active');
        $(this).addClass('active');
    });
});