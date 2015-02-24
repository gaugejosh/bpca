// wait for document to load before running script
$(document).ready(function () {
    'use strict';

    // cache some variables
    var $grid = $('.grid');

    // setup click action on .grid-button element
    $grid.on('click', function () {
        // define some variables
        var $target = $(this).find('.grid-description').parent().nextAll('.grid-alt:first');

        // copy description and append it to container
        var $content = $(this).find('.grid-description').html();

        // toggle the active class on current element
        //$(this).toggleClass('active');

        // display content
        //$target.html($content).slideToggle();

        $grid.removeClass('active');
        $('.grid-alt.places').hide();

        $(this).addClass('active');
        $target.html($content).show();

    });

});