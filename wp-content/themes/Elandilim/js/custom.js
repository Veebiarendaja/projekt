$(document).ready(function () {
    //LightBox
    $('.image-lightbox').click(function (e) {

        //prevent default action (hyperlink)
        e.preventDefault();

        //Get clicked link href
        var image_href = $(this).attr("src");

        //place href as img src value
        $('#lightbox-content').html('<img src="' + image_href + '" />');
        //show lightbox window - you could use .show('fast') for a transition
        $('#lightbox').show();

    });

    //Click anywhere on the page to get rid of lightbox window
    $('html').on('click', '#lightbox', function () { //must use live, as the lightbox element is inserted into the DOM
        $('#lightbox').hide();
    });

    $('image-lightbox').on('click', '#lightbox-content', function(){
       $value = $(this).next().filter('.image-lightbox');
        alert($value);
    });


    //Menu show
    var $window = $(window);
    function menu_appear() {
        var window_top_pos = $window.scrollTop();
        var a_trigger = 150;
        if (window_top_pos > a_trigger) {
            $('.navigation-wrap').addClass('navigation-wrap-in-view');
            $('.menu-line').removeClass('menu-line-in-view');
        } else {
            $('.navigation-wrap').removeClass('navigation-wrap-in-view');
            $('.menu-line').addClass('menu-line-in-view');
        }
    }

    //Trigger
    $window.on('scroll', menu_appear);
    $window.trigger('scroll');
});