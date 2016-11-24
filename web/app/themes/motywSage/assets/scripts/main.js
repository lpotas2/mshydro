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
        } else {
          header.removeClass("fixed");
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

      Macy.init({
        container: 'section.aktualnosci > div',
        trueOrder: false,
        waitForImages: false,
        margin: 30,
        columns: 4,
      });

      menu.find('li').on('click', function() {
        if($(this).hasClass == 'search') {
          return false;
        }

        Jump('section.' + this.className, {
          offset: -75
        });
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

    if($("body").hasClass("product-page")) {
      $('table').filterTable({
        placeholder: "Szukaj",
        label: "",
        minRows: "1"
      });
    }

    if($("body").hasClass("realization-page") || $("body").hasClass("offer-page")) {
      var baguetteBoxInitialized = false;

      baguetteBox.run('.gallery', {
        buttons: false,
        overlayBackgroundColor: 'rgba(254, 255, 255, 0.95)',
        afterShow: function() {
          if(!baguetteBoxInitialized) {
            var nextButton = document.createElement('span');
            nextButton.className = 'next-button';
            nextButton.innerHTML = '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
            document.querySelectorAll('#baguetteBox-overlay')[0].appendChild(nextButton);

            nextButton.addEventListener('click', function() {
              baguetteBox.showNext();
            });

            var prevButton = document.createElement('span');
            prevButton.className = 'prev-button';
            prevButton.innerHTML = '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
            document.querySelectorAll('#baguetteBox-overlay')[0].appendChild(prevButton);

            prevButton.addEventListener('click', function() {
              baguetteBox.showPrevious();
            });

            baguetteBoxInitialized = true;
          }
        }
      });
    }
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