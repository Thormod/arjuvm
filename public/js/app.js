$(function(){

    // $('.nav-bar').affix({
    // offset: {
    //     /* Affix the navbar after scroll below header */
    //     top: $("header").outerHeight(true)}
    // });

    /*------------------------------------------
     Calling Functions
     ------------------------------------------*/

    $(document).ready(function(){
        activeNavPage();
        preloader();
        backgrounds();
        navMobileTrigger();
        mobileNav();
        initFormStyler();
        initReviewsSlider();
        productImagesSlider();
        initMap();
        popupYoutube();
        popup();
        rangeSlider();
        numCounter();
        welcomeSlider();
        searchOpen();
        toTop();
        animateOnScroll();
        hoverAnimation();
        sidebarNavigation();
    });

    /*------------------------------------------
     Defining Functions
     ------------------------------------------*/

    //Function for active navigation link
    function activeNavPage(){
        $('.main-nav a').each(function () {
            var location = window.location.href;
            var link = this.href;
            var result = location.match(link);

            if(result != null) {
                $(this).parent('li').addClass('active');
            }
        });
    }

    //Function for preloader
    function preloader(){
        $('.preloader').fadeOut('slow');
        var welcomeSliderInit = $('div.welcome-slider:first-child').find('[data-animation]');
        doAnimations(welcomeSliderInit);
    }

    //Function for css-backgrounds from attribute data-background
    function backgrounds(){
        if($('.data-bg').length){
            $( '.data-bg' ).each(function() {
                var attr = $(this).attr('data-background');

                if (typeof attr !== typeof undefined && attr !== false) {
                    $(this).css('background', 'url('+attr+')');
                }

            });
        }
    }

    //Init FormStyler, for beautiful form elements
    function initFormStyler() {
        $('select, input[type="radio"], input[type="checkbox"], input[type="number"]').styler({
            //
        });
    }

    //Mobile navigation trigger (sandwich button)
    function navMobileTrigger(){
        $('.bars').on('click', function(){
            $(this).toggleClass('open');
        });
    }

    //Reviews slider (used for example on home page)
    function initReviewsSlider() {
        var reviewsImg = $('.reviews-img__js'); // small images
        var reviewsTxt = $('.reviews-txt__js'); // review text
        var reviewsCount = $('.reviews-img-item').length;
        if(reviewsCount >= 6){
            var reviewsSlides = 5;
        }else{
            var reviewsSlides = 3;
            reviewsImg.addClass('hide-pseudo');
        }
        if(reviewsImg.length && reviewsTxt.length){
            reviewsTxt.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: true,
                asNavFor: reviewsImg
            });
            reviewsImg.slick({
                slidesToShow: reviewsSlides,
                slidesToScroll: 1,
                asNavFor: reviewsTxt,
                infinite: true,
                dots: false,
                centerMode: true,
                arrows: false,
                focusOnSelect: true,
                centerPadding: '0px',
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true
                        }
                    },{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: false
                        }
                    }
                ]
            });
        }
    }

    // Mobile navigation
    function mobileNav() {
        var trigger = $('.nav-trigger');
        var top = $('.main-header').height();

        trigger.on('click', function(event) {
            event.preventDefault();
            $('.nav-box').stop().slideToggle(200).css('top', top);
        });
        if($(window).width() <= 992){
            if($('.parent-nav').length){
                $('.parent-nav').on('click', function(){
                    if($(this).hasClass('show-submenu')){
                        $(this).removeClass('show-submenu');
                        $(this).children('.submenu').slideUp('fast');
                    }else{
                        $(this).addClass('show-submenu');
                        $(this).children('.submenu').slideDown('fast');
                    }

                    return false;
                })
            }
        }
    }

    // Init google map
    function initMap(){
        var latitude = 40.730610,   //    <- This is place for your latitude value (!)
            longitude = -73.935242; //    <- This is place for your longitude value (!)

        if($('#contacts-map').length){
            var centerMap = {lat: latitude, lng: longitude};
            var map = new google.maps.Map(document.getElementById('contacts-map'), {
                zoom: 14, //Map Zooming
                center: centerMap, // By default map centered on your latitude and longitude values
                styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
            });
            var marker = new google.maps.Marker({
                position: centerMap,
                map: map
            });
        }
    }

    // Popup for youtube video
    function popupYoutube(){
        $('.popup-youtube').magnificPopup({

            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                    }
                },
                srcAction: 'iframe_src',
            }
        });
    }

    // Init magnificPopup for popup windows
    function popup(){
        $('.popup').magnificPopup({
            type:'inline',
            showCloseBtn: true,
            midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
            closeBtnInside: true
        });
    }

    // Init Image slider, used on single product page
    function productImagesSlider(){
        var productImg = $('.product-img-slider');
        var productThumbs = $('.product-img-carousel');
        if(productImg.length && productThumbs.length){
            productImg.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: true,
                asNavFor: productThumbs
            });
            productImg.magnificPopup({
                type: 'image',
                delegate: 'a:not(.slick-cloned)',
                gallery: {
                    enabled: true
                }
            });
            productThumbs.slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: productImg,
                infinite: true,
                dots: false,
                centerMode: true,
                arrows: false,
                focusOnSelect: true,
                centerPadding: '0px',
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true
                        }
                    },{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: false
                        }
                    }
                ]
            });
        }
    }

    // Init Jquery UI range slider, used for filter by price on catalog page
    function rangeSlider(){
        var sliderPrice = $('#slider-price');
        if(sliderPrice.length){
            sliderPrice.slider({
                range: true,
                min: 0, // This is your min-price value
                max: 500, // This is your max-price value
                values: [ 75, 300 ], // Default values
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( "$" + sliderPrice.slider( "values", 0 ) + " - $" + sliderPrice.slider( "values", 1 ) );
        }
    }

    // Counter on home page
    function numCounter(){
        if($('.counter').length){
            var countFlag = false;
            var oTop = $('.counters-section').offset().top - window.innerHeight;
            $(window).scroll(function(){
                var pTop = $(window).scrollTop();
                if( pTop > oTop ){
                    if(!countFlag) {
                        $('.counter').countTo();
                        countFlag = true;
                    }
                }
            });
        }
    }

    $(window).on('resize orientationchange', function() {
        $('.welcome-slider').slick('resize');
    });

    // Init Slick slider for welcome slider with animation.css
    function welcomeSlider(){
        var sliderOuter = $('.welcome-slider');

        if(sliderOuter.length){
            sliderOuter.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                fade: true,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000,
                pauseOnHover: false
            });
            sliderOuter.on('beforeChange', function(event, slick, currentSlide, nextSlide){
                var element = $('div.welcome-slider-item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations(element);
            });

        }

        // Timeline for welcome slider
        var percentTime;
        var tick;
        var time = 1;
        var progressBarIndex = 0;

        $('.progressBar').each(function(index) {
            var progress = "<div class='inProgress inProgress" + index + "'></div>";
            $(this).html(progress);
        });

        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            tick = setInterval(interval, 10);
        }

        function interval() {
            if (($('.welcome-slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
                progressBarIndex = $('.welcome-slider .slick-track div[aria-hidden="false"]').data("slickIndex");
                startProgressbar();
            } else {
                percentTime += 1 / (time + 5);
                $('.inProgress' + progressBarIndex).css({
                    width: percentTime + "%"
                });
                if (percentTime >= 100) {
                    $('.single-item').slick('slickNext');
                    progressBarIndex++;
                    if (progressBarIndex > 2) {
                        progressBarIndex = 0;
                    }
                    startProgressbar();
                }
            }
        }

        function resetProgressbar() {
            $('.inProgress').css({
                width: 0 + '%'
            });
            clearInterval(tick);
        }

        startProgressbar();

        $('.progressBarContainer div').on('click', function () {
            clearInterval(tick);
            var goToThisIndex = $(this).find("span").data("slickIndex");
            $('.single-item').slick('slickGoTo', goToThisIndex, false);
            startProgressbar();
        });
    }

    // Function to include Animation.css effects
    function doAnimations(elements){
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay,
                'animation-duration': '.5s'
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }

    // Function to include Animation.css effects on scrolling
    function animateOnScroll(){
        $(function() {
            var $window           = $(window),
                win_height_padded = $window.height() * 1.1,
                isTouch           = Modernizr.touch;

            if (isTouch) { $('.animated-on-scroll').addClass('animated'); }

            $window.on('scroll', revealOnScroll);

            function revealOnScroll() {
                var scrolled = $window.scrollTop(),
                    win_height_padded = $window.height() * 1.1;

                $(".animated-on-scroll:not(.animated)").each(function () {
                    var $this     = $(this),
                        offsetTop = $this.offset().top,
                        $animationDelay = $this.data('delay');
                    if (scrolled + win_height_padded > offsetTop) {
                        if ($this.data('timeout')) {
                            window.setTimeout(function(){
                                $this.addClass('animated ' + $this.data('animation'));
                            }, parseInt($this.data('timeout'),10));
                        } else {
                            $this.css({
                                'animation-delay': $animationDelay,
                                '-webkit-animation-delay': $animationDelay,
                                'animation-duration': '.5s'
                            });
                            $this.addClass('animated ' + $this.data('animation'));
                        }
                    }
                });

                $(".animated-on-scroll.animated").each(function (index) {
                    var $this     = $(this),
                        offsetTop = $this.offset().top;
                    if (scrolled + win_height_padded < offsetTop) {
                        $(this).removeClass('animated fadeInUp fadeInLeft fadeInRight')
                    }
                });
            }

            revealOnScroll();
        });
    }

    // Search on header
    function searchOpen(){
        $('.search-open').on('click', function(){
            $('.nav-container').hide();
            $('.search-box').fadeIn();
            return false;
        });
        $('.search-close').on('click', function(){
            $('.search-box').hide();
            $('.nav-container').fadeIn();
            return false;
        })
    }

    // To top arrow
    function toTop(){
        $('.arrow-top').on('click', function(){
            $('body, html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        })
    }

    // Hover animation, zooming on hover
    function hoverAnimation(){
        if($('.news-item__content').length){
            $(".news-item__content").on({
                mouseenter: function () {
                    $(this).prev('.news-item__img').find('img').css('transform', 'scale(1.1)');
                },
                mouseleave: function () {
                    $(this).prev('.news-item__img').find('img').css('transform', 'scale(1)');
                }
            });
        }
    }
    // Sidebar navigation
    function sidebarNavigation(){
        $('.has-child').on('click', function(){
            if($(this).hasClass('show-inner-nav')){
                $(this).removeClass('show-inner-nav');
            }else{
                $(this).addClass('show-inner-nav');
            }

            return false;
        })
    }
    // Table searchbar navigation
    $(document).ready(function() {
        $(".search").keyup(function () {
          var searchTerm = $(".search").val();
          var listItem = $('.results tbody').children('tr');
          var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
          
        $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
              return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
          }
        });
          
        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
          $(this).attr('visible','false');
        });
      
        $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
          $(this).attr('visible','true');
        });
      
        var jobCount = $('.results tbody tr[visible="true"]').length;
          $('.counter').text(jobCount + ' item');
      
        if(jobCount == '0') {$('.no-result').show();}
          else {$('.no-result').hide();}
                });
    });

    $(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
            }, 
             function () {
               $('.image-preview').popover('hide');
            }
        );    
    });
    
    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse"); 
        }); 
        // Create the preview image
        $(".image-preview-input input:file").change(function (){     
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });      
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);            
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }        
            reader.readAsDataURL(file);
        });  
    });

    // Function to stop playing the video when the modal closes
    $(function(){
    $('.modal').on('hidden.bs.modal', function (e) {
        $iframe = $(this).find("iframe");
        $iframe.attr("src", $iframe.attr("src"));
    });
    });
});