/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */


(function ($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function () {

        // JavaScript to be fired on all pages
  var header = $('header');
  var footer = $('footer');
  var sections = $('section');
  var sectionsCount = $('section').length;
  var bullets = $('.bullets');
  var jobOffers = $('section.praca ul li');
  var menu = $('nav.primary');
  var menuOffer = $('nav.secondary');

  function menuSelect(name) {
    menu.find('li').removeClass('active');
    menu.find('.' + name).addClass('active');
  }
  function init() {
    if($("body").hasClass("home")) {
      $("section.ms-hydro").fixTypography([
        "bastards"
      ]);

      $(window).on("scroll", function() {
        if((document.documentElement.scrollTop || document.body.scrollTop) >= 45) {
          header.addClass("fixed");
          menuOffer.addClass("fixed");
        } else {
          header.removeClass("fixed");
          menuOffer.removeClass("fixed");
        }
      });

      var waypointsUp = $('section').waypoint({
        handler: function(direction) {
          if(direction == 'up') {
            bullets.children().removeClass('active');
            bullets.find('.' + this.element.className).addClass('active');

            menuSelect(this.element.className);
          }
        },
        offset: '-50%'
      });

      var waypointsDown = $('section').waypoint({
        handler: function(direction) {
          if(direction == 'down') {
            bullets.children().removeClass('active');
            bullets.find('.' + this.element.className).addClass('active');

            menuSelect(this.element.className);
          }
        },
        offset: '50%'
      });

      menu.find('li').on('click', function() {
        if($(this).hasClass == 'search') {
          return false;
        }

        Jump('section.' + this.className, {
          offset: -75
        });
      });

      function slideUpMenu() {
        menuOffer.removeClass("slideDown");
      }

      menu.find('li').on('mouseenter', function() {
        if($(this).hasClass('oferta')) {
          menuOffer.addClass("slideDown");
          menuOffer.on("mouseleave", slideUpMenu);
        } else {
          menuOffer.removeClass("slideDown");
          menuOffer.off("mouseleave", slideUpMenu);
        }        
      });

      bullets.children().on('click', function() {
        if($(this).hasClass == 'active') {
          return false;
        }

        menu.find('li.' + this.className).trigger('click');
      });

      $('.scroll-down').on('click', function() {
        menu.find('li').first().trigger('click');
      });

      footer.find('li').on('click', function() {
        menu.find('li.' + this.className).trigger('click');
      });
    }

    $("a").on("click", function(e) {
      e.preventDefault();

      var url = $(this).attr("href");

      if(url && url !== '') {
        $(".overlay").show();

        setTimeout(function() {
          window.location.href = url;
        }, Math.floor(Math.random() * (15 - 10 + 1) + 10) * 100);
      }
      
      return true;
    });

    if($("body").hasClass("product-page")) {
      $('table').filterTable({
        placeholder: "Szukaj",
        label: "",
        minRows: "1"
      });
    }

    //praca
    jobOffers.children(".title").on("click", function() {
      var parent = $(this).parent();

      if(parent.hasClass("active")) {
        parent.removeClass("active");
        $(this).next(".desc").slideUp();
      } else {
        jobOffers.removeClass("active");
        jobOffers.children(".desc").not(this).slideUp();
        parent.addClass("active");
        $(this).next(".desc").slideDown();
      }
    });

    $("section.produkty > ul li").on("click", function() {
      if($(this).hasClass("active")) {
        return false;
      }

      var pos = $(this).attr("class").substr(1);

      $(this).addClass("active");
      $(this).siblings().removeClass("active");

      var slider = $("section.produkty .slider");

      slider.css("left", -pos * slider.parent().innerWidth());
    });

    //realizacje
    $("section.realizacje .desc").perfectScrollbar();

    $("section.realizacje .gallery span").on("click", function() {
      var gallery = $(this).parent();
      var galleryWidth = gallery.innerWidth();
      var gallerySlider = gallery.children(".slider");
      var gallerySliderWidth = gallerySlider.innerWidth();

      var leftPos = gallerySlider.css("left");
      leftPos = parseInt(leftPos);

      if($(this).hasClass("next") && -(leftPos - galleryWidth) < gallerySliderWidth) {
        gallerySlider.css("left", leftPos - galleryWidth);
      } else if($(this).hasClass("prev") && leftPos < 0) {
        gallerySlider.css("left", leftPos + galleryWidth);
      }
    });

    //proces
    var stages = $("section.proces .char ul li").not(".parent");
    stages.children(".title").on("mouseenter", function() {
      stages.removeClass("active");
      $(this).parent().addClass("active");
    });

    $(".monit .fa-times").on("click", function() {
      $(this).parent().hide();
    });

     var handler = function () {
            var mshydroScrollValue = $("section.ms-hydro").offset().top;
            var windowScrollValue = $(document).scrollTop();
            if (windowScrollValue > mshydroScrollValue) {
              setTimeout(function() {
                $("#contactUs").css("display","none");
              }, 3000);
              window.removeEventListener("scroll", handler);
            }
          }

          window.addEventListener("scroll", handler);

  }

  init();

      },
      finalize: function () {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function () {

      },
      finalize: function () {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function () {

        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function (func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function () {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.