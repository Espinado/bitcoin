jQuery(document).ready(function ($){
    /////CONFIGURING SCENE
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);
    function resizeLines() {
        let stepImageFirst = $('.step_image.first');
        let stepImageSecond = $('.step_image.second');
        let stepImageThird = $('.step_image.third');

        let canvasWidthSecond = stepImageSecond.offset().left - stepImageFirst.offset().left;
        let canvasWidthThird = stepImageThird.offset().left - stepImageSecond.offset().left -50;
        let topOffset = stepImageSecond.outerHeight() / 2;

        console.log(topOffset);

        stepImageSecond.parent('.step_wrapp').append("<div id='line' style='width:"+canvasWidthSecond+"px; top:" +topOffset+ "px;'></div>");
        stepImageThird.parent('.step_wrapp').append("<div id='line' style='width:"+canvasWidthThird+"px; top:" +topOffset+ "px;'></div>");
    }

    /////SCROLLSPY
    $('body').scrollspy({ target: '#mainNav' });

    if($(window).width() > 992) {
        /////// SCROLL AND OFFSET FUNCTIONS FOR MAIN MENU
        if($(window).offsetTop >=50) {
            $('.main_menu_wrap').addClass('scrolled');
            $('.logo-wrapp').addClass('smalled');
        }
        else {
            $('.main_menu_wrap').removeClass('scrolled');
            $('.logo-wrapp').removeClass('smalled');

        }
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $('.main_menu_wrap').addClass('scrolled');
                $('.logo-wrapp').addClass('smalled');
            }
            else if (scroll <= 50){
                $('.main_menu_wrap').removeClass('scrolled');
                $('.logo-wrapp').removeClass('smalled');
            }
        });

        ///////LANGUAGE SWITCHER FUNCTIONAL
        $('.mainLang').on('mouseover touch', function (){
            $('.subLang').collapse('show');
        });
        $('.subLang').on('mouseleave', function (){
            $('.subLang').collapse('hide');
        });

        //////ADD CLASSES TO MENU ITEMS ON CLICK
        $('main-item').each(function (){
            $(this).on('click', function (){
                $(this).addClass('link-active');
                $(this).find('.nav-link').addClass('active');
            });
        });
        resizeLines();
    }else {
        $('.main_menu_wrap').addClass('scrolled');
    }
    $(window).resize(function (){
        resizeLines();
    });
});