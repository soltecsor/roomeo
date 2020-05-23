// ==================================================
// Project Name  :  Bariel - Real Estate Co.
// File          :  JS Base
// Version       :  1.0.0
// Last change   :  06 April 2019
// Author        :  Codeixer (https://themeforest.net/user/codeixer)
// Developer:    :  Rakibul Islam Dewan
// ==================================================


(function($) {
  
  "use strict";

  $('.owl-parceiros').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1280:{
            items:3
        },
        1360:{
            items:4
        }
    }
  });  

setTimeout(()=>{
  $('.owl-property').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1280:{
            items:1
        },
        1360:{
            items:1
        }
    }
  }); 
}, 4000)
   


  // main-slider-1 - start
  // --------------------------------------------------
  $('#main-slider-1').owlCarousel({
    items:1,
    margin:0,
    nav:true,
    loop:true,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
  });



  $('select').niceSelect();

  /* isto pode ser melhorado após implementação do sistema */
  // $('#from').datetimepicker({
  //     onShow:function( ct ){
  //       this.setOptions({
  //       maxDate:$('#to').val()?$('#to').val():false
  //     });
      
  //     $('.xdsoft_datepicker.active').find('.xdsoft_save_selected.blue-gradient-button').addClass('btnFrom').text('').html('<i class="far fa-check"></i> My move-in date is flexible').show();
  //   },
  //   timepicker:false,
  //   inline:false,
  //   lang:'en', 
  //   closeOnDateSelect:true,
  //   todayButton: false,
  //   timepickerScrollbar: true,
  //   format:'d/m/Y'
  // });

  // $('#to').datetimepicker({
  //   onShow:function( ct ){
  //       this.setOptions({
  //         minDate:jQuery('#from').val()?jQuery('#from').val():false
  //       });

  //       $('.xdsoft_datepicker.active').find('.xdsoft_save_selected.blue-gradient-button').addClass('btnTo').text('').html('<i class="far fa-check"></i> My move-out date is flexible').show();

  //   },
  //   timepicker:false,
  //   inline:false,
  //   lang:'en', 
  //   closeOnDateSelect:true,
  //   todayButton: false,
  //   timepickerScrollbar: true,
  //   mask: false,
  //   format:'d/m/Y'
  // });

  // $('#visite').datetimepicker({
  //   onShow:function( ct ){
  //     $('.xdsoft_datepicker.active').find('.xdsoft_save_selected.blue-gradient-button').text('').html('<i class="far fa-check"></i> My move-in date is flexible').show();
  //   },
  //   timepicker:true,
  //   inline:false,
  //   lang:'en', 
  //   closeOnDateSelect:true,
  //   todayButton: true,
  //   timepickerScrollbar: true,
  //   format:'d/m/Y H:i'
  // });


  // $(".datetimepicker, .visite").keyup(function() {
  //   $(this).datetimepicker('hide');
  //   $('.datetimepicker').datetimepicker({ mask:true });
  //   $('.visite').datetimepicker({ mask:true });
  // });


 $('.type-select-form').click(function(e) {
  $('.combolist').css('visibility','hidden')
    e.stopPropagation();
    $('.nice-select').toggleClass('open');
    $('.bloco-busca').removeClass('show');
    if($(window).width() < 768) { $(this).find('.toggle-sm').show(); }
    $(this).parent().find('.bloco-busca').toggleClass('show');
  });  

  $('.toggle-sm').click(function(e) {
    e.stopPropagation();
    $(this).hide();
    $('.nice-select').removeClass('open');
    $('.bloco-busca').removeClass('show');
  }); 

  $('.min').change(function(){
    $('.range_min').text(formatCurrency($(this).val()));
  });

  $('.max').change(function(){
    $('.range_max').text(formatCurrency($(this).val()));
  });

  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  $('.ancora').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
        
    $('html, body').animate({ 
      scrollTop: targetOffset - 100
    }, 500);
  });


  function formatCurrency(total) {
    var neg = false;
    if(total < 0) {
        neg = true;
        total = Math.abs(total);
    } 
    //return (neg ? "-£ " : '£ ') + parseFloat(total, 10).toFixed(3).replace(/(\d)(?=(\d{3})+\.)/g, "£ 1,").toString();
    return (neg ? "-£ " : '£ ') + parseFloat(total, 10).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, "£ 1,").toString() + ' + pcm';

  }


  // back to top - start
  // --------------------------------------------------
  $(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
      $('#backtotop:hidden').stop(true, true).fadeIn();
    } else {
      $('#backtotop').stop(true, true).fadeOut();
    }
  });  

  $(window).scroll(function() {
    if ($(this).scrollTop() > 60) {
      $('header').addClass('fixo');
      $('header .brand-link').find('img').attr('src','http://roomeo.co.uk/roomeo/public/portal/assets/images/logoH.png').fadeIn(200);
    } else {
      $('header').removeClass('fixo');
      $('header .brand-link').find('img').attr('src','http://roomeo.co.uk/roomeo/public/portal/assets/images/logo.png').fadeIn(200);
    }
  });

  $(function() {
  $('#btlayoutlist').on('click',function(){

      $('#layout-list').addClass('show')
      $('#layout-grid').removeClass(' active show')
      
  })
  $('#btlayoutgrid').on('click',function(){

    $('#layout-grid').addClass('show')
    $('#layout-list').removeClass(' active show')
    
})
    //$('#layout-list').addClass('fade active show');
    // $("#scroll").on('click', function() {
    //   $("html,body").animate({
    //     scrollTop: $("#thetop").offset().top
    //   }, "slow");
    //   return false
    // })
  });
  // back to top - end
  // --------------------------------------------------

  // preloader - start
  // --------------------------------------------------
  $(window).on('load', function(){
    $('#preloader').fadeOut('slow',function(){$(this).remove();});
  });
  // preloader - end
  // --------------------------------------------------

  
  // mobile menu - start
  // --------------------------------------------------
  $(document).ready(function () {
    $('.close-btn, .overlay').on('click', function () {
      $('#sidebar-menu').removeClass('active');
      $('.overlay').removeClass('active');
    });

    $('#sidebar-collapse').on('click', function () {
      $('#sidebar-menu').addClass('active');
      $('.overlay').addClass('active');
    });
  });
  // mobile menu - end
  // --------------------------------------------------

  
  $('[data-toggle="tooltip"]').tooltip();

   $('#busca-lista').click(function(e) {
      e.preventDefault()
      $('#property-section').removeClass('hidden');

      setTimeout(function() {
        $('html, body').animate({ 
          //scrollTop: $($(this).attr('href')).offset().top + 360
          //scrollTop:$('.nav-link active').offset().top + 360
        }, 500);
      }, 100);
   });

    $('#btlayoutgrid').click(function(e){
      e.preventDefault()
      //$('#layout-grid').addClass('hidden');
    })
    $('#btlayoutlist').click(function(e){
      e.preventDefault()
      $('#layout-list').addClass('fade active show');
    })
  
  // testimonial-carousel - start
  // --------------------------------------------------
  $('#testimonial-carousel').owlCarousel({
    nav:true,
    loop:true,
    margin:30,
    dots:false,
    center:true,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:2
      },
      1100:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });
  // testimonial-carousel - end
  // --------------------------------------------------

  
  // details-image-carousel - start
  // --------------------------------------------------
  $('#details-image-carousel').owlCarousel({
    items:1,
    nav:true,
    loop:true,
    margin:0,
    dots:true,
    center:true,
    autoplay:true,
    smartSpeed:1000,
    autoplayTimeout:5000,
    autoplayHoverPause:true
  });
  // details-image-carousel - end
  // --------------------------------------------------



  // header-section (auto-hide) - Start
  // --------------------------------------------------
  var mainHeader = $('.auto-hide'),
  secondaryNavigation = $('.cd-secondary-nav'),
    //this applies only if secondary nav is below intro section
    belowNavHeroContent = $('.sub-nav-hero'),
    headerHeight = mainHeader.height();

    //set scrolling variables
    var scrolling = false,
    previousTop = 0,
    currentTop = 0,
    scrollDelta = 10,
    scrollOffset = 150;

    $(window).on('scroll', function(){
      if( !scrolling ) {
        scrolling = true;
        (!window.requestAnimationFrame)
        ? setTimeout(autoHideHeader, 250)
        : requestAnimationFrame(autoHideHeader);
      }
    });

    $(window).on('resize', function(){
      headerHeight = mainHeader.height();
    });

    function autoHideHeader() {
      var currentTop = $(window).scrollTop();

      ( belowNavHeroContent.length > 0 ) 
      ? checkStickyNavigation(currentTop) // secondary navigation below intro
      : checkSimpleNavigation(currentTop);

      previousTop = currentTop;
      scrolling = false;
    }

    function checkSimpleNavigation(currentTop) {
    //there's no secondary nav or secondary nav is below primary nav
    if (previousTop - currentTop > scrollDelta) {
        //if scrolling up...
        mainHeader.removeClass('is-hidden');
      } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
        //if scrolling down...
        mainHeader.addClass('is-hidden');
      }
    }

    function checkStickyNavigation(currentTop) {
    //secondary nav below intro section - sticky secondary nav
    var secondaryNavOffsetTop = belowNavHeroContent.offset().top - secondaryNavigation.height() - mainHeader.height();
    
    if (previousTop >= currentTop ) {
        //if scrolling up... 
        if( currentTop < secondaryNavOffsetTop ) {
          //secondary nav is not fixed
          mainHeader.removeClass('is-hidden');
          secondaryNavigation.removeClass('fixed slide-up');
          belowNavHeroContent.removeClass('secondary-nav-fixed');
        } else if( previousTop - currentTop > scrollDelta ) {
          //secondary nav is fixed
          mainHeader.removeClass('is-hidden');
          secondaryNavigation.removeClass('slide-up').addClass('fixed'); 
          belowNavHeroContent.addClass('secondary-nav-fixed');
        }
        
      } else {
        //if scrolling down...  
        if( currentTop > secondaryNavOffsetTop + scrollOffset ) {
          //hide primary nav
          mainHeader.addClass('is-hidden');
          secondaryNavigation.addClass('fixed slide-up');
          belowNavHeroContent.addClass('secondary-nav-fixed');
        } else if( currentTop > secondaryNavOffsetTop ) {
          //once the secondary nav is fixed, do not hide primary nav if you haven't scrolled more than scrollOffset 
          mainHeader.removeClass('is-hidden');
          secondaryNavigation.addClass('fixed').removeClass('slide-up');
          belowNavHeroContent.addClass('secondary-nav-fixed');
        }

      }
    };
  // header-section (auto-hide) - end
  // --------------------------------------------------



  // sticky menu - start
  // --------------------------------------------------
  var headerId = $(".sticky-header");
  $(window).on('scroll' , function() {
    var amountScrolled = $(window).scrollTop();
    if ($(this).scrollTop() > 80) {
      headerId.removeClass("not-stuck");
      headerId.addClass("stuck");
    } else {
      headerId.removeClass("stuck");
      headerId.addClass("not-stuck");
    }
  });
  // sticky menu - end
  // --------------------------------------------------

  
  // google map - start
  // --------------------------------------------------
  function isMobile() { 
    return ('ontouchstart' in document.documentElement);
  }

  function init_gmap() {
    if ( typeof google == 'undefined' ) return;
    var options = {
      center: [1.2960841, 103.8458455],
      zoom: 14,
      styles: [
      {elementType: 'geometry', stylers: [{color: '#eaeaea'}]},
      {elementType: 'labels.text.stroke', stylers: [{color: '#ffffff'}]},
      {elementType: 'labels.text.fill', stylers: [{color: '$pure-black'}]},
      {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{color: '#d59563'}]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{color: '#61605e'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{color: '#cbe99f'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#98786d'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#ffffff'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry.stroke',
        stylers: [{color: '#ffffff'}]
      },
      {
        featureType: 'road',
        elementType: 'labels.text.fill',
        stylers: [{color: '#39c2f8'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{color: '#fedd96'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry.stroke',
        stylers: [{color: '#eeca83'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{color: '#965c28'}]
      },
      {
        featureType: 'transit',
        elementType: 'geometry',
        stylers: [{color: '#fef5b6'}]
      },
      {
        featureType: 'transit.station',
        elementType: 'labels.text.fill',
        stylers: [{color: '#f1e0ca'}]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#a1cafe'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '$pure-black'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.stroke',
        stylers: [{color: '#ffffff'}]
      }
      ],
      mapTypeControl: true,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
      },
      navigationControl: true,
      scrollwheel: false,
      streetViewControl: true,
    }

    if (isMobile()) {
      options.draggable = false;
    }

    $('#google-map').gmap3({
      map: {
        options: options
      },
      marker: {
        latLng: [1.2960841, 103.8458455],
        // options: { icon: 'assets/img/map.png' }
      }
    });
  }
  init_gmap();
  // google map - end
  // --------------------------------------------------


})(jQuery);


/* Range */
   //(function() {

    // function addSeparator(nStr) {
    //     nStr += '';
    //     var x = nStr.split('.');
    //     var x1 = x[0];
    //     var x2 = x.length > 1 ? '.' + x[1] : '';
    //     var rgx = /(\d+)(\d{3})/;
    //     while (rgx.test(x1)) {
    //         x1 = x1.replace(rgx, '$1' + '.' + '$2');
    //     }
    //     return x1 + x2;
    // }

    // function rangeInputChangeEventHandler(e){
    //     var rangeGroup = $(this).attr('name'),
    //         minBtn = $(this).parent().children('.min'),
    //         maxBtn = $(this).parent().children('.max'),
    //         range_min = $(this).parent().children('.range_min'),
    //         range_max = $(this).parent().children('.range_max'),
    //         minVal = parseInt($(minBtn).val()),
    //         maxVal = parseInt($(maxBtn).val()),
    //         origin = $(this).context.className;

    //     if(origin === 'min' && minVal > maxVal-5){
    //         $(minBtn).val(maxVal-5);
    //     }
    //     var minVal = parseInt($(minBtn).val());
    //     $(range_min).html('£ ' + addSeparator(minVal*1000) );


    //     if(origin === 'max' && maxVal-5 < minVal){
    //         $(maxBtn).val(5+ minVal);
    //     }
    //     var maxVal = parseInt($(maxBtn).val());
    //     $(range_max).html('£ ' + addSeparator(maxVal*1000) );
    // }

 //$('input[type="range"]').on( 'input', rangeInputChangeEventHandler);
//})();

