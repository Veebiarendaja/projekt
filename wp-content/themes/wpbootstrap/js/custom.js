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


    //Cache reference to window and animation items
    var $animation_elements = $('.boxjq');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }
    $window.on('scroll', check_if_in_view);
    $window.trigger('scroll');
});