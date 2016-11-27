<?php while (have_posts()) : the_post(); ?>
<!-- <?php get_template_part('templates/page', 'header'); ?>-->
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="bg-lines">
  <span></span><!--
  --><span></span><!--
  --><span></span><!--
  --><span></span><!--
  --><span></span>
</div>

<div class="bullets">
  <div class="ms-hydro"><span class="title">MS-HYDRO</span><span class="square"></span></div>
  <div class="oferta"><span class="title">OFERTA</span><span class="square"></span></div>
  <div class="proces"><span class="title">PROCES</span><span class="square"></span></div>
  <div class="realizacje"><span class="title">REALIZACJE</span><span class="square"></span></div>
  <div class="produkty"><span class="title">PRODUKTY</span><span class="square"></span></div>
  <div class="aktualnosci"><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
  <div class="kontakt"><span class="title">KONTAKT</span><span class="square"></span></div>
</div>

<?php if( have_rows('pierwszy_ekran') ):
      while ( have_rows('pierwszy_ekran') ) : the_row();
        if( get_sub_field('zdjęcie_zajawki') ):?>
<section class="top" style="background-image: url('<?php the_sub_field('zdjęcie_zajawki')?>');">
  <?php endif; 
      endwhile; 
    endif;?>

  <div class="wrapper">
        <div style="height:300px; width: 500px; position:absolute; bottom:0; right:0; background-color: red;">
          <?php if( have_rows('nieczynne') ):
            while ( have_rows('nieczynne') ) : the_row();
              echo "nieczynne od  ";
              the_sub_field('nieczynne_od');
              echo "   nieczynnne do  ";
              the_sub_field('nieczynne_do');
            endwhile; 
          endif;?>
    </div>
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
    <a id="ms-hydro"></a>
        <?php if( have_rows('sekcja_ms-hydro') ):
      while ( have_rows('sekcja_ms-hydro') ) : the_row();
        if( get_sub_field('tło_sekcji_ms-hydro') ):?>
    <div class="bg" style="background-image: url('<?php the_sub_field('tło_sekcji_ms-hydro')?>');"></div>
        <?php endif; 
      endwhile; 
    endif;?>

    <div class="wrapper">
      <h2>MS-HYDRO</h2>

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
        </li><!--     
       --><li>
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
        </li><!--     
       --><li>
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
        </li><!--     
       --><li>
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

<?php include "offer-main.php" ?>

<section class="proces">
  <div class="clip">
    <div class="bullets">
      <div class="ms-hydro"><span class="title">MS-HYDRO</span><span class="square"></span></div>
      <div class="oferta"><span class="title">OFERTA</span><span class="square"></span></div>
      <div class="proces"><span class="title">PROCES</span><span class="square"></span></div>
      <div class="realizacje"><span class="title">REALIZACJE</span><span class="square"></span></div>
      <div class="produkty"><span class="title">PRODUKTY</span><span class="square"></span></div>
      <div class="aktualnosci"><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
      <div class="kontakt"><span class="title">KONTAKT</span><span class="square"></span></div>
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
    <h2>PROCES</h2>

    <div class="char">
      <ul>
        <li class="active">
          <div class="title"><span>Specyfikacja</span></div>
          <div class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </li>
        <li>
          <div class="title"><span>Planowanie</span></div>
          <div class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </li>
        <li class="parent">
          <div>
            <ul>
              <li>
                <div class="title"><span>Projekt</span></div>
                <div class="desc">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                </div>
              </li>
              <li>
                <div class="title"><span>Konstrukcja</br>i montaż</span></div>
                <div class="desc">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                </div>
              </li>
              <li>
                <div class="title"><span>Testowanie</span></div>
                <div class="desc">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="title"><span>Serwisowanie</span></div>
          <div class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php include "realization-main.php" ?>

<?php include "products-main.php" ?>

<section class="kontakt">
  <h2>
    <?php echo get_the_title(18);?>
  </h2>
  <div><!--
    <?php if( have_rows('sekcja_kontakt') ):
      while ( have_rows('sekcja_kontakt') ) : the_row();?>

    --><div class="address">
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      <div>
        <?php the_sub_field('ulica');?><br>
        <?php the_sub_field('kod_pocztowy_i_miasto');?>
      </div>
    </div><!--
    --><div class="phone">
      <i class="fa fa-mobile" aria-hidden="true"></i>
      <div>
        <?php the_sub_field('telefon');?>
        </br>
        <?php the_sub_field('fax');?>
      </div>
    </div><!--
    --><div class="email">
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
      <div>
        <?php the_sub_field('e-mail');?>
      </div>
    </div>
  </div>

  <div class="left">
    <h4>FORMULARZ KONTAKTOWY</h4>
    <?php the_sub_field('formularz_kontaktowy');?>

    <?php endwhile; 
      endif;?>

  </div><!--

  --><div class="right">
    <h4>MAPA</h4>
    <div id="map"></div>
  </div>
</section>

<!--<script src="<?php print get_template_directory_uri(); ?>/dist/scripts/main.js"></script>-->

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