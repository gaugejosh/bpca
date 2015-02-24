// wait for document to load before running script
$(document).ready(function () {

    // enforce good coding styles
    'use strict';

    // cache some variables
    var $grid = $('.grid');

    // setup click action on .grid-button element
    $grid.on('click', function () {

        // define some variables
        var $target = $(this).find('.grid-description').parent().nextAll('.grid-alt:first');

        // copy description and append it to container
        var $content = $(this).find('.grid-description').html();

        // remove any active classes
        $grid.removeClass('active');

        // hide any open descriptions
        $('.grid-alt').hide();

        // add the active class to the current element
        $(this).addClass('active');

        // show current element description
        $target.html($content).show();

    });

});