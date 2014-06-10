define(['jquery', 'fancybox', 'bxslider'], function($, IOWA) {

    // Run jQuery in no conflict to prevent clashing with other libs
    $.noConflict();

    IOWA = {
        sliders: function() {
            // assign the slider to a variable
            var slider = $('#slider1').bxSlider({
                controls: false,
                autoDelay: 10000,
                mode: 'fade',
                auto: true,
                speed: 4000,
                autoHover: true
            });
            $(".fancy-lightbox").fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'
            });

            $('.commitment').bxSlider({
                mode: 'fade',
                pager: false,
                controls: false
            });

            $('.slider_main').bxSlider({
                pagerCustom: '#slider-pager',
                controls: false,
                mode: 'fade',
                auto: true
            });

            $('.bxslider').bxSlider({
                pagerCustom: '#bx-pager',
                mode: 'fade',
                controls: false,
                auto: true
            });

            $('.bx-slider1').bxSlider({
                controls: false,
                mode: 'fade',
                auto: true,
                pager: true,
                adaptiveHeight: true,
                responsive: true
            });
            $('#slider').bxSlider({
                auto: true,
                mode: 'fade',
                controls: false,
                speed: 2000,
                pause: 5000,
                autoHover: false,
                pager: true,
                infiniteLoop: true
            });

            // Faculty & Staff
            /*$('.stats-slider').bxSlider({
                slideWidth: 200,
                maxWidth: 580,
                minSlides: 1,
                maxSlides: 3,
                slideMargin: 50,
                pager: false,
                controls: true,
            });*/

            $('.profile-slider').bxSlider({
                slideWidth: 910,
                minSlides: 1,
                maxSlides: 1,
                profileClass: "test",
                auto: false,
                controls: false,
                pause: 6000,
                onSliderLoad: function() {
                    $('.slide').addClass('slider-fix');
                }
            });

            $('.flickr-slider').bxSlider({
                profileClass: true,
                adaptiveHeight: true,
                responsive: true,
                mode: 'fade',
                pager: false,
                auto: true,
                controls: false,
                pause: 6500,
            });

            $(".fancy-lightbox").fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'
            });

            // assign a click event to the external thumbnails
            $('.feature_nav_box a').on('click', function() {
                var thumbIndex = $('.feature_nav_box a').index(this);
                // call the "goToSlide" public function
                slider.goToSlide(thumbIndex);


            });

            // assign "pager-active" class to the first thumb
            $('.feature_nav_box a:first').addClass('pager-active');


            $("#home_page_content li").each(function(i) {

                $(this).delay(i * 1000).fadeIn();

            });
            $("#various2").fancybox();
        },
        philsday: function() {
            // Phil's Day


            // TODO Twitter tweets
            /*moment.lang('en');
            var date_val_0 = 1387425141;
            var date_0 = moment.unix(date_val_0).fromNow();
            jQuery(".0_tweet_date").html(date_0);*/


        },
        startup: function() {
            IOWA.sliders();

            // Hook for determining if Phil's Day page goes here
            IOWA.philsday();
        }
    };
    IOWA.startup();
    return IOWA;
});