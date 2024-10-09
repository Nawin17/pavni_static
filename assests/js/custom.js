window.onload = function() {
    AOS.init({
      disable:'mobile',
          easing: 'ease',
           duration: 1000,
        }); 
  
      // breadcum parallax and sectioon parallax 
  
      var width=$(window).width();
      if (width > 767) {
        $('.breadcum').parallax_content(); 
        $('.parallax').parallax(); 
      }
    }
  
  $(document).ready(function(argument) {
  //active menu navigation
  var loc = window.location.pathname;
  var page = location.pathname.split('/').pop();
  $('.mobile-navbar ul.navbar-active li  a[href*="'+page+'"]').addClass('active');
  $('.mobile-navbar ul.navbar-nav li  a.project-active[href*="'+page+'"]').addClass('active');
  
  var loc = window.location.pathname;
  var page = location.pathname.split('/').pop();
  if(page=='') {
    page = 'index.php';
  }
  
  if($('a[href*="'+page+'"]').parents().hasClass('dropdown-menu')) {
    
    $('a[href*="'+page+'"]').parents('.dropdown').find('a:first').addClass('active');
  }
  else {
    $('.navbar-nav li > a[href*="'+page+'"]').addClass('active');
  }
  });
  
  
  // //cross icon header navigation 
  
  $('#mobile-menu-action').click(function() {
    // if($('.mobile-navbar').hasClass('open')) {
    //   $('.mobile-navbar').removeClass('open');
    //   $(this).removeClass('active');
    // }
    // else {
    //   $('.mobile-navbar').addClass('open');
    //   $(this).addClass('active');
  
    // }
    $('.mobile-navbar').toggleClass('open');
      $(this).toggleClass('active');
  });
  $('.accordion-button').click(function() {
    $('ul.dropdown-menu.mobile-services').css('display','block !important');
  });
  
  // $(document).on('click','.mobile-navbar',function() {
  //       $('#mobile-menu-action').trigger('click');
  //     });
  
  // // header shrink js
  
  $(document).on("scroll", function(){
    var width=$(window).width();
    if (width > 767) {
       if($(document).scrollTop() > 100) {
        $("header").addClass("shrink");
      }
      else 
      {
        $("header").removeClass("shrink");
      }
  
    }
     
  });
   // AOS.init();
  // <--------------- top arrow --------------------->
  
      $(document).on("scroll", function() {
  
          if ($(document).scrollTop() > 800) {
              $(".top-arrow").show();
          } else {
              $(".top-arrow").hide();
          }
      });
  
      $(document).on('click','.top-arrow', function() {
      $("html, body").animate({ scrollTop: 0 }, 50);
      });
  
  
  // smooth scroll hash click
     // var hash=window.location.hash;
     //  var ele=$('.nav-tabs a[href="'+hash+'"][data-toggle="tab"]');
     //  var ele_top=$('.tab-content');
     //  if(ele.length > 0) {
     //    $(ele).trigger('click');
     //    $("html, body").animate({ scrollTop: $(ele_top).offset().top - ($('.breadcum').height() - 50) }, 1000);
     //  }
      
         $( window ).on('hashchange', function() {
           var hash = window.location.hash;
         if (hash!='') {
             $('html, body').animate({
                 scrollTop:$(hash).offset().top - ($('header').height() - 80)}, 1000);
       }
         });
  
               // home-slider
  
  
  
  // counter js animation script start 
  
     function formatter (value) {
                return value.toFixed(0).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
              }
  
              var a = 0;
              $(window).scroll(function() {
                if($('.counter').length > 0) {
                  var oTop = $('.counter').offset().top - window.innerHeight;
                  if (a == 0 && $(window).scrollTop() > oTop) {
                    $('.counter-value').each(function() {
                      var $this = $(this),
                      countTo = $this.attr('data-count');
                      $({
                        countNum: $this.text()
                      }).animate({
                        countNum: countTo
                      },
                      {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                          $this.text(formatter(Math.floor(this.countNum)));
                        },
                        complete: function() {
                          $this.text(formatter(this.countNum));
                        }
                      });
                    });
                    a = 1;
                  }
                }
  
  
                
              });
  
  
  
  
  
  