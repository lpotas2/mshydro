<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<aside>
    <div class="wrapper">
      <strong>MS-HYDRO s.c.</strong> ul. Barniewicka 54F, 80-299 Gdańsk, NIP: 583-30-34-296
      <div class="lang"><span>PL</span><a href="">EN</a></div>
    </div>
  </aside>

  <header>
    <div class="wrapper">
      <a href="/" title="MS-Hydro - hydraulika siłowa"><img src="<?php print get_template_directory_uri(); ?>/dist/images/ms-hydro-logo.png"/></a>

      <div class="contact">
        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+48 (58) 306 90 08</div>
        <div class="email"><i class="fa fa-envelope" aria-hidden="true"></i></i>biuro@mshydro.pl</div>
        <div class="open"><i class="fa fa-clock-o" aria-hidden="true"></i>Pon. - Pt.: 8:00 - 16:00</div>
      </div>

      <nav class="primary">
        <ul>
          <li><a href="">MS-Hydro</a></li>
          <li><a href="">Oferta</a></li>
          <li><a href="">Realizacje</a></li>
          <li><a href="">Produkty</a></li>
          <li><a href="">Aktualności</a></li>
          <li><a href="">Praca <span class="count">(3)</span></a></li>
          <li><a href="">Kontakt</a></li>
          <li class="search"><i class="fa fa-search" aria-hidden="true"></i>Szukaj</li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="bg-lines">
    <span></span><!--
    --><span></span><!--
    --><span></span><!--
    --><span></span><!--
    --><span></span>
  </div>

  <div class="bullets">
    <div><span class="title">MS-HYDRO</span><span class="square"></span></div>
    <div><span class="title">OFERTA</span><span class="square"></span></div>
    <div><span class="title">REALIZACJE</span><span class="square"></span></div>
    <div><span class="title">PRODUKTY</span><span class="square"></span></div>
    <div><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
    <div><span class="title">PRACY</span><span class="square"></span></div>
    <div><span class="title">KONTAKT</span><span class="square"></span></div>
  </div>

  <section class="top" style="  background-image: url('<?php print get_template_directory_uri(); ?>/dist/images/top.jpg'); position: relative;
  max-width: 100%;
  height: calc(100vh - 161.5px);
  margin-top: 161.5px;
  padding-top: 0;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  z-index: 11;">
    <div class="wrapper">
      <div>
        <h2>We're very serious about our jobs</br>and we always deliver above expectations.</h2>
        <p>We've started as a small but dedicated company 15 years ago and we've grown rapidly</br>ever since. Today we serve more than 100 great companies from all around the world.</p>
        <a href="" class="button">View our Services<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>

      <span class="scroll-down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </div>
  </section>

  <section class="ms-hydro" >
    <div class="bg" style="background-image: url('<?php print get_template_directory_uri(); ?>/dist/images/assembling-hydraulic-cylinders.jpg'); background-size: cover;
    background-position: center;
    opacity: 0.1;"></div>

    <div class="wrapper">
      <h2>MS-HYDRO</h2>

      <div class="desc">
        <p><strong>Jesteśmy dostawcą rozwiązań hydrauliki siłowej</strong> w różnych gałęziach przemysłu. Stawiamy na <strong>kompleksowość</strong> i <strong>sprawność działania</strong>. Jesteśmy elastyczni wobec indywidualnych potrzeb klienta. Dbamy o rozwój i bezpieczeństwo.</p>
      </div>

      <ul>
        <li>
          <h4>Co robimy:</h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>wykonujemy projekty układów hydraulicznych i maszyn</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>prowadzimy modernizacje i serwis istniejących układów hydrauliki siłowej</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>wykonujemy instalacje rurowe wraz z dostawą niezbędnych elementów</li>
          </ul>
        </li><!--
        --><li>
          <h4>Zapewniamy:</h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>profesjonalne doradztwo i dobór elementów układu</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>dostawę i uruchomienie zamówienia u klienta</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>pełny serwis gwarancyjny i pogwarancyjny</li>
          </ul>
        </li><!--
        --><li>
          <h4>Oferujemy także:</h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>usługi w zakresie obróbki skrawaniem</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>dorabianie węży i dystrybucję komponentów hydrauliki siłowej</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>diagnostykę, monitoring oraz dobór i sprzedaż olejów i środków smarnych</li>
          </ul>
        </li><!--
        --><li>
          <h4>Wykorzystujemy:</h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>agregaty hydrauliczne</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>serwomechanizmy tj. siłowniki, silniki hydrauliczne</li>
            <li><i class="fa fa-check" aria-hidden="true"></i>systemy sterowania i zintegrowanej automatyki</li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <section class="oferta">
    <h2>OFERTA</h2>

    <div class="box">
      <div class="container" style="background-image: url(<?php print get_template_directory_uri(); ?>/dist/images/projektowanie-bg.png);">
        <div class="bg"></div>

        <span class="index">.01</span>

        <img class="icon red" src="<?php print get_template_directory_uri(); ?>/dist/images/projektowanie-icon-red.png"/>
        <img class="icon white" src="<?php print get_template_directory_uri(); ?>/dist/images/projektowanie-icon.png"/>

        <h3>PROJEKTOWANIE</h3>
        <div class="desc">
          <p>Projektujemy urządzenia dla starych i nowych linii produkcyjnych. Modernizujemy istniejące projekty techniczne działających urządzeń i maszyn.</p>
        </div>

        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div><!--
    --><div class="box">
      <div class="container" style="background-image: url(<?php print get_template_directory_uri(); ?>/dist/images/remonty-bg.png);">
        <div class="bg"></div>

        <span class="index">.02</span>

        <img class="icon red" src="<?php print get_template_directory_uri(); ?>/dist/images/renovation-icon-red.png"/>
        <img class="icon white" src="<?php print get_template_directory_uri(); ?>/dist/images/renovation-icon.png"/>

        <h3>REMONTY I MODERNIZACJE</h3>
        <div class="desc">
          <p>Oferujemy kompleksowe remonty główne oraz remonty poszczególnych elementów roboczych istniejących maszyn.</p>
        </div>

        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div><!--
    --><div class="box">
      <div class="container" style="background-image: url(<?php print get_template_directory_uri(); ?>/dist/images/utrzymanie-ruchu-bg.png);">
        <div class="bg"></div>

        <span class="index">.03</span>

        <img class="icon red" src="<?php print get_template_directory_uri(); ?>/dist/images/gear_spiral_icon-red.png"/>
        <img class="icon white" src="<?php print get_template_directory_uri(); ?>/dist/images/gear_spiral_icon.png"/>

        <h3>UTRZYMANIE RUCHU</h3>
        <div class="desc">
          <p>Oferujemy kompleksowe remonty główne oraz remonty poszczególnych elementów roboczych istniejących maszyn.</p>
        </div>

        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div><!--
    --><div class="box">
      <div class="container" style="background-image: url(<?php print get_template_directory_uri(); ?>/dist/images/toczenie-bg.png);">
        <div class="bg"></div>

        <span class="index">.04</span>

        <img class="icon red" src="<?php print get_template_directory_uri(); ?>/dist/images/machining-icon-red.png"/>
        <img class="icon white" src="<?php print get_template_directory_uri(); ?>/dist/images/machining-icon.png"/>

        <h3>OBRÓBKA SKRAWANIEM</h3>
        <div class="desc">
          <p>Świadczymy usługi w zakresie obróbki skrawaniem na tokarce uniwersalnej.</p>
        </div>

        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div><!--
    --><div class="box">
      <div class="container" style="background-image: url(<?php print get_template_directory_uri(); ?>/dist/images/serwis-olejowy-bg.png);">
        <div class="bg"></div>

        <span class="index">.05</span>

        <img class="icon red" src="<?php print get_template_directory_uri(); ?>/dist/images/oil-icon-red.png"/>
        <img class="icon white" src="<?php print get_template_directory_uri(); ?>/dist/images/oil-icon.png"/>

        <h3>SERWIS OLEJOWY</h3>
        <div class="desc">
          <p></p>
        </div>

        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div><!--
    --><div class="box">
      <div class="container">
        <span>POBIERZ OFERTĘ</span>
        <img src="<?php print get_template_directory_uri(); ?>/dist/images/pdf-icon.png"/>
      </div>
    </div>
  </section>

  <section class="realizacje">
    <div class="clip">
      <div class="bullets">
        <div><span class="title">MS-HYDRO</span><span class="square"></span></div>
        <div><span class="title">OFERTA</span><span class="square"></span></div>
        <div><span class="title">REALIZACJE</span><span class="square"></span></div>
        <div><span class="title">PRODUKTY</span><span class="square"></span></div>
        <div><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
        <div><span class="title">PRACY</span><span class="square"></span></div>
        <div><span class="title">KONTAKT</span><span class="square"></span></div>
      </div>
    </div>

    <div class="bg-lines">
      <span></span><!--
      --><span></span><!--
      --><span></span><!--
      --><span></span><!--
      --><span></span>
    </div>
    <div class="wrapper">
      <h2>REALIZACJE</h2>

      <ul>
        <li><span>UKŁAD ROZŁADUNKU SAMOCHODÓW CIĘŻAROWYCH</span><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
        <li><span>UNIWERSALNY AGREGAT HYDRAULICZNY</span><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
        <li><span>PRASA HYDRAULICZNA</span><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
        <li><span>UKŁAD ROZŁADUNKU SAMOCHODÓW CIĘŻAROWYCH</span><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
        <li><span>UNIWERSALNY AGREGAT HYDRAULICZNY</span><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
        <li><span>PRASA HYDRAULICZNA</span><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
      </ul>
    </div>
  </section>

  <section class="produkty">
    <h2>PRODUKTY</h2>

    <ul>
      <li><i class="fa fa-times" aria-hidden="true"></i><span>Elementy i systemy hydrauliki</span></li><!--
      --><li><i class="fa fa-times" aria-hidden="true"></i><span>Filtry</span></li><!--
      --><li><i class="fa fa-times" aria-hidden="true"></i><span>Urządzenia pomiarowe</span></li><!--
      --><li><i class="fa fa-times" aria-hidden="true"></i><span>Inne</span></li><!--
      --><li><i class="fa fa-times" aria-hidden="true"></i><span>Węże hydrauliczne</span></li>
    </ul>

    <div class="slider-container">
      <div class="slider">
        <div>
          <a href="product.html">
            <strong>Rozdzielacze</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/337e5810f9.gif"/>
          </a>
          <a href="product.html">
            <strong>Zawory zwrotne</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/c46d4cb295.gif"/>
          </a>
          <a href="product.html">
            <strong>Zawory ciśnieniowe</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/zaworycisnieniowe.gif"/>
          </a>
          <a href="product.html">
            <strong>Zawory sterujące przepływem</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/zaworysterujaceprzepywem.gif"/>
          </a>
          <a href="product.html">
            <strong>Zawory hamujące</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/zaworyhamujace.gif"/>
          </a>
          <a href="product.html">
            <strong>Zawory proporcjonalne</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/zaworyproporcjonalne.gif"/>
          </a>
        </div>
        <div>
          <a href="product.html">
            <strong>Ssawne</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/cisnieniowe.gif"/>
          </a>
          <a href="product.html">
            <strong>Powrotne</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/d997b84202.gif"/>
          </a>
          <a href="product.html">
            <strong>Ssawno-powrotne</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/ssawnopowrotne.gif"/>
          </a>
          <a href="product.html">
            <strong>Ciśnieniowe</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/cisnieniowe.gif"/>
          </a>
          <a href="product.html">
            <strong>Wysoko ciśnieniowe</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/Wysoko-cinieniowe.gif"/>
          </a>
        </div>
        <div>
          <a href="product.html">
            <strong>Przekaźniki ciśnienia</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/przekaznikicisnienia.gif"/>
          </a>
          <a href="product.html">
            <strong>Diagnostyka oleju</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/diagnostykaoleju.gif"/>
          </a>
        </div>
        <div>
          <a href="product.html">
            <strong>Urządzenia do serwisowania płynów</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/diagnostykaoleju.gif"/>
          </a>
          <a href="product.html">
            <strong>Akcesoria</strong>
            <img src="<?php print get_template_directory_uri(); ?>/dist/images/produkty/agregatyfiltracyjne.gif"/>
          </a>
        </div>
      </div>
    </div>

    <div style="text-align: center;">
      <a class="button" href="">Warunki sprzedaży<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="aktualnosci">
    <h2>AKTUALNOŚCI</h2>
  </section>

  <section class="praca">
    <h2>PRACA</h2>

    <ul>
      <li>
        <div class="title">PRACA<i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        <div class="desc">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <a href="" class="button">APLIKUJ</a>
        </div>
      </li>
      <li>
        <div class="title">PRACA<i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        <div class="desc">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <a href="" class="button">APLIKUJ</a>
        </div>
      </li>
      <li>
        <div class="title">PRACA<i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        <div class="desc">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <a href="" class="button">APLIKUJ</a>
        </div>
      </li>
    </ul>
  </section>

  <section class="kontakt">
    <h2>KONTAKT</h2>

    <div>
      <div class="address">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <div>
          ul. Barniewicka 54F</br>
          80-299 Gdańsk
        </div>
      </div><!--
      --><div class="phone">
        <i class="fa fa-mobile" aria-hidden="true"></i>
        <div>
          Tel: +48 (58) 306 90 08</br>
          Fax: +48 (58) 320 11 13
        </div>
      </div><!--
      --><div class="email">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <div>biuro@mshydro.pl</div>
      </div>
    </div>

    <div class="left">
      <h4>FORMULARZ KONTAKTOWY</h4>

      <form>
        <fieldset>
          <input type="text" name="name" id="form-name" placeholder="Imię i nazwisko" required>
          <input type="email" name="email" id="form-email" placeholder="E-mail" required>
          <input type="text" name="phone" id="form-phone" placeholder="Nr telefonu">
          <input type="text" name="subject" id="form-subject" placeholder="Temat">
        </fieldset><!--
        --><fieldset>
          <textarea rows="11" name="message" id="form-message" placeholder="Treść wiadomości" required></textarea>
          <input type="submit" value="Wyślij">
        </fieldset>
      </form>
    </div><!--
    --><div class="right">
      <h4>MAPA</h4>
      <div id="map"></div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>


  <script src="<?php print get_template_directory_uri(); ?>/dist/scripts/main.js"></script>

<!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js"></script> 
  <script>
    google.maps.event.addDomListener(window, 'load', init);
    var map;

    function init() {
      var LatLng = new google.maps.LatLng(54.4236226,18.4559181);
      var mapOptions = {
        center: new google.maps.LatLng(54.4236226,18.4559181),
        zoom: 10,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
        },
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        scaleControl: true,
        scrollwheel: false,
        streetViewControl: false,
        draggable : true,
        overviewMapControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [
          {
              "featureType": "landscape",
              "elementType": "labels",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "transit",
              "elementType": "labels",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "poi",
              "elementType": "labels",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "featureType": "road",
              "elementType": "labels.icon",
              "stylers": [
                  {
                      "visibility": "off"
                  }
              ]
          },
          {
              "stylers": [
                  {
                      "hue": "#0000FF"
                  },
                  {
                      "saturation": -100
                  },
                  {
                      "gamma": 2.15
                  },
                  {
                      "lightness": 12
                  }
              ]
          },
          {
              "featureType": "road",
              "elementType": "labels.text.fill",
              "stylers": [
                  {
                      "visibility": "on"
                  },
                  {
                      "lightness": 24
                  }
              ]
          },
          {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                  {
                      "lightness": 57
                  }
              ]
          }
      ]
      }

      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);

      var icon = { 
          url: '<?php print get_template_directory_uri(); ?>/dist/images/ms-hydro-marker.png'
      };

      marker = new google.maps.Marker({
          icon: '',
          position: LatLng,
          map: map,
          icon: icon
      });
      
      google.maps.event.addListener(map, 'click', function(event){
          this.setOptions({scrollwheel:true});
      });
    }
    
  </script>