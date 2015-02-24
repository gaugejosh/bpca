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

        if ($(this).hasClass('active')) {
            // revert row border color
            $grid.css('border-bottom', '#ebedee');

            // remove any active classes
            $grid.removeClass('active');

            // hide any open descriptions
            $('.grid-alt').slideUp('slow');
        } else {
            // revert row border color
            $grid.css('border-bottom', '#ebedee');

            // remove any active classes
            $grid.removeClass('active');

            // hide any open descriptions
            $('.grid-alt').slideUp('slow', function() {
                $target.html($content);
            });

            // add the active class to the current element
            $(this).addClass('active');

            $grid.prev().css('border-bottom', '#19a6e2');
            $grid.css('border-bottom', '#19a6e2');
            $grid.next().css('border-bottom', '#19a6e2');

            // show current element description
            $target.slideDown('slow');
        }
    });

});