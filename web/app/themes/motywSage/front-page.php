<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/page', 'header'); ?>-->
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<aside>
    <div class="wrapper">
      <!-- <strong>MS-HYDRO s.c.</strong> ul. Barniewicka 54F, 80-299 Gdańsk, NIP: 583-30-34-296-->
       <strong><?php if( have_rows('pierwszy_ekran') ):
    while ( have_rows('pierwszy_ekran') ) : the_row();
    the_sub_field('nazwa_firmy');
    endwhile; endif;?></strong>
       
        <?php if( have_rows('pierwszy_ekran') ):
    while ( have_rows('pierwszy_ekran') ) : the_row();
    the_sub_field('adres');
    the_sub_field('nip');
    endwhile; endif;?>

      <div class="lang">
      <span>
      <?php if( have_rows('pierwszy_ekran') ):
    while ( have_rows('pierwszy_ekran') ) : the_row();
    the_sub_field('język_polski');
    endwhile; endif;?></span>

      <a href="">  <?php if( have_rows('pierwszy_ekran') ):
    while ( have_rows('pierwszy_ekran') ) : the_row();
    the_sub_field('język_angielski');
    endwhile; endif;?></a></div>
    </div>
  </aside>

  <header>
    <div class="wrapper">
    <?php if( have_rows('pierwszy_ekran') ):
      while ( have_rows('pierwszy_ekran') ) : the_row();
        if( get_sub_field('logo') ):?>
          <a href="/" title="MS-Hydro - hydraulika siłowa"><img src="<?php the_sub_field('logo'); ?>" /></a>
        <?php endif; 
      endwhile; 
    endif;?>





      <div class="contact">
        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('telefon');
            endwhile;
          endif;?></div>

        <div class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('e-mail');
            endwhile; 
          endif;?></div>

        <div class="open"><i class="fa fa-clock-o" aria-hidden="true"></i>
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('godziny_otwarcia');
            endwhile; 
          endif;?></div>
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


    <?php if( have_rows('pierwszy_ekran') ):
      while ( have_rows('pierwszy_ekran') ) : the_row();
        if( get_sub_field('zdjęcie_zajawki') ):?>
            <section class="top" style="background-image: url('<?php the_sub_field('zdjęcie_zajawki')?>');">
        <?php endif; 
      endwhile; 
    endif;?>

    <div class="wrapper">
      <div>
        <h2>
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('duzy_napis');
            endwhile; 
          endif;?>
        </h2>
        <p>
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('mały_napis');
            endwhile; 
          endif;?>
        </p>
        <a href="" class="button">
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('napis_przycisku');
            endwhile; 
          endif;?>
          <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>

      <span class="scroll-down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
    </div>
  </section>

  <section class="ms-hydro" >
        <?php if( have_rows('sekcja_ms-hydro') ):
      while ( have_rows('sekcja_ms-hydro') ) : the_row();
        if( get_sub_field('tło_sekcji_ms-hydro') ):?>
    <div class="bg" style="background-image: url('<?php the_sub_field('tło_sekcji_ms-hydro')?>');"></div>
        <?php endif; 
      endwhile; 
    endif;?>


    <div class="wrapper">
      <h2>MS-HYDRO</h2>

 <!--     <div class="desc">
        <p><strong>Jesteśmy dostawcą rozwiązań hydrauliki siłowej</strong> w różnych gałęziach przemysłu. Stawiamy na <strong>kompleksowość</strong> i <strong>sprawność działania</strong>. Jesteśmy elastyczni wobec indywidualnych potrzeb klienta. Dbamy o rozwój i bezpieczeństwo.</p>
      </div>-->

      <div class="desc">
        <p>
          <?php if( have_rows('sekcja_ms-hydro')):
            while ( have_rows('sekcja_ms-hydro')) : the_row();
                the_sub_field('ogolny_opis_sekcji_ms-hydro');
            endwhile;
            endif?>
        </p>
      </div>

      <ul>

<!-- 1 kolumna --> 
        <li>
          <h4>
          <?php if( have_rows('sekcja_ms-hydro')):
            while ( have_rows('sekcja_ms-hydro')) : the_row();
              if( get_row_layout() == 'szczegołowy_opis_-_kolumna_1' ):
                the_sub_field('tytuł_kolumny');?>
          </h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>
          <?php the_sub_field('punkt_1');?>
  
            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>

                <?php the_sub_field('punkt_2');?>

            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>
               <?php the_sub_field('punkt_3');
              endif;
            endwhile; 
          endif;?>
            </li>
          </ul>
        </li>

<!-- 2 kolumna -->        
        <li>
          <h4>
          <?php if( have_rows('sekcja_ms-hydro')):
            while ( have_rows('sekcja_ms-hydro')) : the_row();
              if( get_row_layout() == 'szczegołowy_opis_-_kolumna_2' ):
                the_sub_field('tytuł_kolumny');?>
          </h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>
          <?php the_sub_field('punkt_1');?>
  
            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>

                <?php the_sub_field('punkt_2');?>

            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>
               <?php the_sub_field('punkt_3');
              endif;
            endwhile; 
          endif;?>
            </li>
          </ul>
        </li>

<!-- 3 kolumna -->        
        <li>
          <h4>
          <?php if( have_rows('sekcja_ms-hydro')):
            while ( have_rows('sekcja_ms-hydro')) : the_row();
              if( get_row_layout() == 'szczegołowy_opis_-_kolumna_3' ):
                the_sub_field('tytuł_kolumny');?>
          </h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>
          <?php the_sub_field('punkt_1');?>
  
            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>

                <?php the_sub_field('punkt_2');?>

            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>
               <?php the_sub_field('punkt_3');
              endif;
            endwhile; 
          endif;?>
            </li>
          </ul>
        </li>
<!-- 4 kolumna -->        
        <li>
          <h4>
          <?php if( have_rows('sekcja_ms-hydro')):
            while ( have_rows('sekcja_ms-hydro')) : the_row();
              if( get_row_layout() == 'szczegołowy_opis_-_kolumna_4' ):
                the_sub_field('tytuł_kolumny');?>
          </h4>
          <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i>
          <?php the_sub_field('punkt_1');?>
  
            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>

                <?php the_sub_field('punkt_2');?>

            </li>
            <li><i class="fa fa-check" aria-hidden="true"></i>
               <?php the_sub_field('punkt_3');
              endif;
            endwhile; 
          endif;?>
            </li>
          </ul>
        </li>



      </ul>
    </div>
  </section>
  
<!-- OFERTA -->
  <section class="oferta">
    <h2>OFERTA</h2>

<?php $walker_oferta = new walker_oferta();
  wp_list_pages(array(
  'walker' => $walker_oferta,
  'sort_column' => "ID",
  "title_li" => 0,
  "child_of" => 8
  ));?>
  
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