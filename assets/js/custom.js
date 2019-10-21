jQuery(document).ready(function($) {

    /*------------------------------------------------
                DECLARATIONS
    ------------------------------------------------*/

    var loader = $('#loader');
    var loader_container = $('#loader-container');
    var display_none = $('.display-none');
    var scrollup = $('.backtotop');

    /*------------------------------------------------
                PRELOADER
    ------------------------------------------------*/

    loader.fadeOut();
    loader_container.fadeOut();
    display_none.css({'display' : 'block'});

    /*------------------------------------------------
                BACK TO TOP
    ------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

    /*------------------------------------------------
                    MENU ACTIVE AND STICKY
    ------------------------------------------------*/

    $('.main-navigation ul li').click(function() {
        $('.main-navigation ul li').removeClass('current-menu-item');
        $(this).addClass('current-menu-item');
    });

    $('.main-navigation ul li a.search').click(function() {
        $('.main-navigation #search').fadeToggle();
        $('.main-navigation .search-field').focus();
    });

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();  
        if (scroll > 1) {
            $(".site-header.is-sticky").addClass("nav-shrink");
        }
        else {
             $(".site-header.is-sticky").removeClass("nav-shrink");
        }
    });

    $("#masthead .menu-toggle").click(function() {    
        $("#masthead .menu-toggle").toggleClass("active");
        $("#masthead").toggleClass("menu-active");
        $('.main-navigation').toggleClass('toggled');
        $(".main-navigation").fadeToggle();
    });

    $('.main-navigation .menu-item-has-children > a').after('<button class="dropdown-toggle"><i class="fa fa-angle-down"></button>');

    /*------------------------------------------------
                  SEARCH
    ------------------------------------------------*/

    $('.main-navigation ul li a.search').click(function() {
        $(this).toggleClass('search-open');
        $('.main-navigation #search').Toggle();
        $('.main-navigation .search-field').focus();
    });

    /*------------------------------------------------
                  DROP-DOWN-MENU
    ------------------------------------------------*/

    $('.main-navigation .dropdown-toggle').click(function() {
        $(this).toggleClass('active');
        $(this).parent().find('.sub-menu').first().slideToggle();
    });
        
    /*------------------------------------------------
                   SECTION-SCROLL
    ------------------------------------------------*/

    $('.scroll-link').on('click', function(event) {
      event.preventDefault();
      var section = $(this).attr("href");

        $('html,body').animate({
            scrollTop: $(section).offset().top},
        '800');
    });

    /*------------------------------------------------
                   ICONS-MENU
    ------------------------------------------------*/

    var sectionPosition = $("#content").offset().top;
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= sectionPosition ) {
            $('.icons-menu').fadeIn();
        } 
        else {
            $('.icons-menu').fadeOut();

        }
    });

    $('.scroll-link').on('click', function(event) {
      event.preventDefault();
      var section = $(this).attr("href");

        $('html,body').animate({
            scrollTop: $(section).offset().top},
        '800');

        $('.icons-menu li .scroll-link').removeClass('active');
        $(this).addClass('active');
    });

    function onScroll(){
        var scrollPosition = $(document).scrollTop();
        $('.icons-menu .scroll-link').each(function () {
            var currentLink = $(this);
            var refElement = $(currentLink.attr("href"));
            if (refElement.position() <= scrollPosition && refElement.position() - 60) {
                $('.icons-menu .scroll-link').parent().removeClass("active");
                currentLink.parent().addClass("active");
            }
            else{
                currentLink.parent().removeClass("active");
            }
        });
    }

    $(window).scroll(function() {
        onScroll();
    });

    /*------------------------------------------------
                   SLICK SLIDER
    ------------------------------------------------*/

    $('.testimonial-slider').slick();
    $('.author-slider').slick();
    $('#client .regular').slick({
        responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 567,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 421,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });

    $('#author .slick-prev').insertBefore('#author .slick-next');

    /*------------------------------------------------
                    TABS   
    ------------------------------------------------*/

    $("#services .nav-tabs li a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $("#services .tab-pane").not(tab).css("display", "none");
        $(tab).fadeIn();

    });

    $("#team .nav-tabs li a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $("#team .tab-pane").not(tab).css("display", "none");
        $(tab).fadeIn();

    });

    /*------------------------------------------------
                        COUNTER   
    ------------------------------------------------*/
    function count($this){
        var current = parseInt($this.html(), 10);
        current = current + 1; /* Where 50 is increment */
        $this.html(++current);
        if(current > $this.data('count')){
            $this.html($this.data('count'));
        } 
        else {    
            setTimeout(function(){count($this)}, 5);
        }
    }        
        
    $(".stat-count").each(function() {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    });

    /*--------------------------------------------------------
                COLOR, BOXED LAYOUT AND FONT SWITCHER
    ----------------------------------------------------------*/

    $('.color-switcher .switch-colors li').click(function() {
        $('.color-switcher .switch-colors li').removeClass('active');
        $(this).addClass('active');
    });

    $("#green" ).click(function(){
        $("#color" ).attr("href", "assets/css/green.css");
    });

    $("#yellow" ).click(function(){
        $("#color" ).attr("href", "assets/css/yellow.css");
    });

    $("#black" ).click(function(){
        $("#color" ).attr("href", "assets/css/black.css");
    });

    $("#blue" ).click(function(){
        $("#color" ).attr("href", "assets/css/blue.css");
    });

    $("#red" ).click(function(){
        $("#color" ).attr("href", "assets/css/red.css");
    });

    $(".picker_close").click(function(){  
        $("#choose_color").toggleClass("position");
    });

    $('.boxed').click(function() {
        $('body').addClass('boxed');
    });

    $('.wide').click(function() {
        $('body').removeClass('boxed');
        $('body').addClass('wide');
    });


    $('.font-family li').click(function() {
        $('.font-family li').removeClass('active');
        $(this).addClass('active');
    });

    $('.header-font-1').click(function() {
        if  ($('body').hasClass('header-font-2') || 
            $('body').hasClass('header-font-3') ||
            $('body').hasClass('header-font-4') || 
            $('body').hasClass('header-font-5'))
        {
            $('body').removeClass('header-font-2 header-font-3 header-font-4 header-font-5');
        }
        $('body').addClass('header-font-1');
    });
    $('.header-font-2').click(function() {
        if  ($('body').hasClass('header-font-1') || 
            $('body').hasClass('header-font-3') ||
            $('body').hasClass('header-font-4') || 
            $('body').hasClass('header-font-5'))
        {
            $('body').removeClass('header-font-1 header-font-3 header-font-4 header-font-5');
        }
        $('body').addClass('header-font-2');
    });
    $('.header-font-3').click(function() {
        if  ($('body').hasClass('header-font-1') || 
            $('body').hasClass('header-font-2') ||
            $('body').hasClass('header-font-4') || 
            $('body').hasClass('header-font-5'))
        {
            $('body').removeClass('header-font-1 header-font-2 header-font-4 header-font-5');
        }
        $('body').addClass('header-font-3');
    });
    $('.header-font-4').click(function() {
        if  ($('body').hasClass('header-font-1') || 
            $('body').hasClass('header-font-2') ||
            $('body').hasClass('header-font-3') || 
            $('body').hasClass('header-font-5'))
        {
            $('body').removeClass('header-font-1 header-font-2 header-font-3 header-font-5');
        }
        $('body').addClass('header-font-4');
    });
    $('.header-font-5').click(function() {
        if  ($('body').hasClass('header-font-1') || 
            $('body').hasClass('header-font-2') ||
            $('body').hasClass('header-font-3') || 
            $('body').hasClass('header-font-4'))
        {
            $('body').removeClass('header-font-1 header-font-2 header-font-3 header-font-4');
        }
        $('body').addClass('header-font-5');
    });

    $('.body-font-1').click(function() {
        if  ($('body').hasClass('body-font-2') || 
            $('body').hasClass('body-font-3') ||
            $('body').hasClass('body-font-4') || 
            $('body').hasClass('body-font-5'))
        {
            $('body').removeClass('body-font-1 body-font-2 body-font-3 body-font-4');
        }
        $('body').addClass('body-font-1');
    });
    $('.body-font-2').click(function() {
        if  ($('body').hasClass('body-font-1') || 
            $('body').hasClass('body-font-3') ||
            $('body').hasClass('body-font-4') || 
            $('body').hasClass('body-font-5'))
        {
            $('body').removeClass('body-font-1 body-font-3 body-font-4 body-font-5');
        }
        $('body').addClass('body-font-2');
    });
    $('.body-font-3').click(function() {
        if  ($('body').hasClass('body-font-1') || 
            $('body').hasClass('body-font-2') ||
            $('body').hasClass('body-font-4') || 
            $('body').hasClass('body-font-5'))
        {
            $('body').removeClass('body-font-1 body-font-2 body-font-4 body-font-5');
        }
        $('body').addClass('body-font-3');
    });
    $('.body-font-4').click(function() {
        if  ($('body').hasClass('body-font-1') || 
            $('body').hasClass('body-font-2') ||
            $('body').hasClass('body-font-3') || 
            $('body').hasClass('body-font-5'))
        {
            $('body').removeClass('body-font-1 body-font-2 body-font-3 body-font-5');
        }
        $('body').addClass('body-font-4');
    });
    $('.body-font-5').click(function() {
        if  ($('body').hasClass('body-font-1') || 
            $('body').hasClass('body-font-2') ||
            $('body').hasClass('body-font-3') || 
            $('body').hasClass('body-font-4'))
        {
            $('body').removeClass('body-font-1 body-font-2 body-font-3 body-font-4');
        }
        $('body').addClass('body-font-5');
    });

    /*--------------------------------------------------------------------
                    END COLOR, BOXED LAYOUT AND FONT SWITCHER
    ---------------------------------------------------------------------*/
 
/*------------------------------------------------
                END JQUERY
------------------------------------------------*/
});

