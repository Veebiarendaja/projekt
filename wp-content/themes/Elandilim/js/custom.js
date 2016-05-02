$(document).ready(function () {
    //LightBox
    $('.image-lightbox').click(function (e) {

        e.preventDefault();

        //klikitud pildi url
        var image_url = $(this).attr("src");

        //pildi lähtekoodi lisamine
        $('#lightbox-content').html('<img src="' + image_url + '" />');
        //LightBoxi kuvamine
        $('#lightbox').show();
    });

    //Peida LightBox
    $('html').on('click', '#lightbox', function () {
        $('#lightbox').hide();
    });


    $('.image-lightbox, #lightbox-content').bind('dragstart contextmenu', function(){
        return false;
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