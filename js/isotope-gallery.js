// javascript for landing page portfolio: isotope and filter

$(window).load(
    function(){

        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 100, // set as whatever?
            columns = null;

        // initialize Isotope
        $container.isotope({
            // options...

            itemSelector: '.grid-item',
            percentPosition: true,
            resizable: false,
            masonry: {
                columnWidth: '.grid-sizer',
                //isFitWidth: true,
                fitWidth: true
            },

            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
        });

    //        resizable: false, // disable normal resizing
            // set columnWidth to a percentage of container width
    //        masonry: { columnWidth: $container.width() / 5 }

/*
        // update columnWidth on window resize
       $(window).smartresize(function(){
           $container.isotope({
               masonry: { columnWidth: $container.width() / 5 }
           });
       });
       */


        // filter
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
             });
             return false;
        });

    } // end function

/*            $(window).smartresize(function(){
            // check if columns has changed
            var currentColumns = Math.floor( ($body.width() - 10 ) / colW );
            if ( currentColumns !== columns ) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width( columns * colW ).isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
*/


); // end window.load
