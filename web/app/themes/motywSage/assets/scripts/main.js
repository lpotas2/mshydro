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

        function init() {
          $("a").on("click", function (e) {
            e.preventDefault();

            var url = $(this).attr("href");

            if (url && url !== '') {
              $(".overlay").show();

              setTimeout(function () {
                window.location.href = url;
              }, Math.floor(Math.random() * (15 - 10 + 1) + 10) * 100);
            }

            return true;
          });

          $("section.realizacje .slider").each(function () {
            $(this).lory({
              infinite: 1
            });
          })

          $("section.produkty > ul li").on("click", function () {
            if ($(this).hasClass("active")) {
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

          $("section.realizacje .gallery span").on("click", function () {
            var gallery = $(this).parent();
            var galleryWidth = gallery.innerWidth();
            var gallerySlider = gallery.children(".slider");
            var gallerySliderWidth = gallerySlider.innerWidth();

            var leftPos = gallerySlider.css("left");
            leftPos = parseInt(leftPos);

            if ($(this).hasClass("next") && -(leftPos - galleryWidth) < gallerySliderWidth) {
              gallerySlider.css("left", leftPos - galleryWidth);
            } else if ($(this).hasClass("prev") && leftPos < 0) {
              gallerySlider.css("left", leftPos + galleryWidth);
            }
          });
        }

        init();
      },
      finalize: function () {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    'page-template-product': {
      init: function () {
        $('table').filterTable({
          placeholder: "Szukaj",
          label: "",
          minRows: "1"
        });
      }
    },
    'page_template_jobs_page': {
      init: function () {
        var jobOffers = $('section.praca ul li');

        jobOffers.children(".title").on("click", function () {
          var parent = $(this).parent();

          if (parent.hasClass("active")) {
            parent.removeClass("active");
            $(this).next(".desc").slideUp();
          } else {
            jobOffers.removeClass("active");
            jobOffers.children(".desc").not(this).slideUp();
            parent.addClass("active");
            $(this).next(".desc").slideDown();
          }
        });
      }
    },
    'home': {
      init: function () {
        var header = $('header');
        var footer = $('footer');
        var sections = $('section');
        var sectionsCount = $('section').length;
        var bullets = $('.bullets');
        var menu = $('nav.primary');
        var menuOffer = $('nav.secondary');

        function menuSelect(name) {
          menu.find('li').removeClass('active');
          menu.find('.' + name).addClass('active');
        }

        $("section.ms-hydro").fixTypography([
          "bastards"
        ]);

        $(window).on("scroll", function () {
          if ((document.documentElement.scrollTop || document.body.scrollTop) >= 45) {
            header.addClass("fixed");
            menuOffer.addClass("fixed");
          } else {
            header.removeClass("fixed");
            menuOffer.removeClass("fixed");
          }
        });

        var waypointsUp = $('section').waypoint({
          handler: function (direction) {
            if (direction == 'up') {
              bullets.children().removeClass('active');
              bullets.find('.' + this.element.className).addClass('active');

              menuSelect(this.element.className);
            }
          },
          offset: '-50%'
        });

        var waypointsDown = $('section').waypoint({
          handler: function (direction) {
            if (direction == 'down') {
              bullets.children().removeClass('active');
              bullets.find('.' + this.element.className).addClass('active');

              menuSelect(this.element.className);
            }
          },
          offset: '50%'
        });

        menu.find('li').on('click', function () {
          if ($(this).hasClass == 'search') {
            return false;
          }

          Jump('section.' + this.className, {
            offset: -75
          });
        });

        function slideUpMenu() {
          menuOffer.removeClass("slideDown");
        }

        menu.find('li').on('mouseenter', function () {
          if ($(this).hasClass('oferta')) {
            menuOffer.addClass("slideDown");
            menuOffer.on("mouseleave", slideUpMenu);
          } else {
            menuOffer.removeClass("slideDown");
            menuOffer.off("mouseleave", slideUpMenu);
          }
        });

        bullets.children().on('click', function () {
          if ($(this).hasClass == 'active') {
            return false;
          }

          menu.find('li.' + this.className).trigger('click');
        });

        $('.scroll-down').on('click', function () {
          menu.find('li.ms-hydro').trigger('click');
        });

        $('section.top .button').on('click', function () {
          menu.find('li.oferta').trigger('click');
        });

        footer.find('li').on('click', function () {
          menu.find('li.' + this.className).trigger('click');
        });

        //proces
        var stages = $("section.proces .char ul li").not(".parent");
        stages.children(".title").on("mouseenter", function () {
          stages.removeClass("active");
          $(this).parent().addClass("active");
        });

        $(".monit .fa-times").on("click", function () {
          $(this).parent().hide();
        });

        var myCookie;
        var timeToGetEmail = 300; //w milisekundach

        if (document.cookie != "") {
          var cookies = document.cookie;
          cookies = cookies.split(';');
          myCookie = cookies.find(function (cookieValue) {
            cookieValue = cookieValue.trim();
            return cookieValue == 'canSee=true';
          })
        }

        var handler = function () {
          var mshydroScrollValue = $("section.ms-hydro").offset().top;
          var windowScrollValue = $(document).scrollTop();
          var cookieLifeTimeInHours = 1;

          if ((windowScrollValue > mshydroScrollValue) && (myCookie == undefined)) {
            setTimeout(function () {
              $("#contactUs").css("display", "block");
              var currentTime = new Date();
              currentTime.setTime(currentTime.getTime() + (cookieLifeTimeInHours * 60 * 60 * 1000));
              document.cookie = 'canSee=true;expires=' + currentTime + ';';
            }, timeToGetEmail);
            window.removeEventListener("scroll", handler);
          }
        }
        window.addEventListener("scroll", handler);
      } 
    },
    'for_contact': {
      init: function () {
        var myCookie;
        var cookieLifeTimeInHours = 1;
        var timeToGetEmail = 300; //w milisekundach

        if (document.cookie != "") {
          var cookies = document.cookie;
          cookies = cookies.split(';');
          myCookie = cookies.find(function (cookieValue) {
            cookieValue = cookieValue.trim();
            return cookieValue == 'canSeeOnNonFrontPage=true';
          })
        }

        if (myCookie == undefined) {
          setTimeout(function () {
            $("#contactUs").css("display", "block");
            var currentTime = new Date();
            currentTime.setTime(currentTime.getTime() + (cookieLifeTimeInHours * 60 * 60 * 1000));
            document.cookie = 'canSeeOnNonFrontPage=true;expires=' + currentTime + ';';
          }, timeToGetEmail);
        }
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