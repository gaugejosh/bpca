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

        // if a user clicks on the same active .grid element
        if ($(this).hasClass('active')) {

            // remove any active classes
            $grid.removeClass('active');

            // hide any open descriptions
            $('.grid-alt').slideUp('slow');

        // if this is the initial click
        } else if (!$grid.hasClass('active')) {

            // add the active class to the current element
            $(this).addClass('active');

            // add content to section
            $target.html($content).slideDown('slow');

        // if the users clicks a second, different .grid element
        } else {

            // remove any active classes
            $grid.removeClass('active');

            // hide any open descriptions
            $('.grid-alt').slideUp('slow').promise().done(function() {

                // show new content
                $target.html($content).slideDown('slow');

            });

            // add the active class to the current element
            $(this).addClass('active');

        }
    });

});