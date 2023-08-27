jQuery(document).ready(function($) {

    var rtl;
    
    if( ridhi_data.rtl == '1' ){
        rtl = true;
    }else{
        rtl = false;
    }
    
    // banner slider
    $('#banner-slider').owlCarousel({
        loop       : false,
        mouseDrag  : false,
        margin     : 0,
        nav        : true,
        items      : 1,
        dots       : false,
        autoplay   : true,
        navText    : '',
        rtl        : rtl,
        lazyLoad   : true,
        animateOut : ridhi_data.animation,
    });

    $('.site-header .header-b .search-icon .search-btn').on( 'click', function() {
        $('.site-header .header-b .search-icon .header-searh-wrap').show();
    });

    $('.site-header .header-b .search-icon .btn-form-close').on( 'click', function() {
        $('.header-searh-wrap').hide();
    });
    var winWidth = $(window).width();
    
    // Menu Accessibility
    if(winWidth > 1024){
        $(".main-navigation ul li a").on( 'focus', function() {
            $(this).parents("li").addClass("focus");
        }).on( 'blur', function() {
            $(this).parents("li").removeClass("focus");
        });
    }

    // search for mobile header-b
    $('.mobile-header .search-icon .search-btn').on( 'click', function() {
        $('.mobile-header .search-icon .header-searh-wrap').show();
    });

    $('.mobile-header .header-searh-wrap .btn-form-close').on( 'click', function(){
        $('.header-searh-wrap').hide();
    });

    $('.btn-form-close').on( 'click', function(){
    });

    //mobile menu
    // $('.mobile-header .mobile-menu-wrapper').append('<button class="close"></button>');
    $('<button class="arrow-down"></button>').insertAfter($('.mobile-navigation ul .menu-item-has-children > a'));
    $('.mobile-navigation ul li .arrow-down').on( 'click', function() {
        $(this).next().slideToggle();
        $(this).toggleClass('active');
    });

    $('.mobile-header .mobile-menu-btn').on( 'click', function() {
        $('body').addClass('menu-open');
    });

    $('.mobile-header .close').on( 'click', function() {
        $('body').removeClass('menu-open');
    });

    $('.overlay').on( 'click', function() {
        $('body').removeClass('menu-open');
    });
    
    //responsive menu toggle
    $('.mobile-header .mobile-menu-opener').on('click', function(){
        $('.mobile-menu-wrapper').animate({
            width: 'toggle',
        });
    });

    $('.mobile-header .close').on('click', function () {
        $('.mobile-menu-wrapper').animate({
            width: 'toggle',
        });
    });

    //team modal remove this js after development as it is in plugin
    if(winWidth > 1024){
        $('.rtc-team-holder').on( 'click', function() {
            $(this).siblings('.rtc-team-holder-modal').addClass('show');
            $(this).siblings('.rtc-team-holder-modal').css('display', 'block');
        });

        $('.close_popup').on( 'click', function() {
            $('.rtc-team-holder-modal').removeClass('show');
            // $(this).parent().css('display', 'none');
            $('.rtc-team-holder-modal').css('display', 'none');
            return false;
        });
    }
    

    //testimonial-slider
    $('.testimonial-slider').owlCarousel({
        items  : 1,
        nav    : true,
        rtl    : rtl,
        loop   : false,
        dots   : false,
        navText: '',
    });

    // Script for back to top
    $(window).on( 'scroll', function() {
        if ($(this).scrollTop() > 300) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });

    $("#back-top").on( 'click', function() {
        $('html,body').animate({ scrollTop: 0 }, 600);
    });
});
