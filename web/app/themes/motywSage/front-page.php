<?php while (have_posts()) : the_post(); ?>
<!-- <?php get_template_part('templates/page', 'header'); ?>-->
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<aside>
  <div class="wrapper">
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

      <a href="">
        <?php if( have_rows('pierwszy_ekran') ):
    while ( have_rows('pierwszy_ekran') ) : the_row();
    the_sub_field('język_angielski');
    endwhile; endif;?>
      </a>
    </div>
  </div>
</aside>

<header>
  <div class="wrapper">
    <?php if( have_rows('pierwszy_ekran') ):
      while ( have_rows('pierwszy_ekran') ) : the_row();
        if( get_sub_field('logo') ):?>
    <a class="brand" href="/" title="MS-Hydro - hydraulika siłowa"><img src="<?php the_sub_field('logo'); ?>" /></a>
    <?php endif; 
      endwhile; 
    endif;?>

    <div class="contact">
      <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>
        <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('telefon');
            endwhile;
          endif;?>
      </div>

      <div class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
        <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('e-mail');
            endwhile; 
          endif;?>
      </div>

      <div class="open"><i class="fa fa-clock-o" aria-hidden="true"></i>
        <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('godziny_otwarcia');
            endwhile; 
          endif;?>
      </div>
    </div>
    <!--tutaj powinno byc menu na sztywno-->
    <!--<?php 
$args =  array(
  "menu_class"=> 0,
  "menu_id"=> 0,
  "container"=>"nav",
  "container_class"=>"primary",
  "after"=>"<li class='search'><i class='fa fa-search' aria-hidden='true'></i>Szukaj</li>"
  );
wp_nav_menu($args);?>
  -->

    <nav class="primary">
      <ul>
        <li class="ms-hydro">MS-Hydro</li>
        <li class="proces">Proces</li>
        <li class="oferta">Oferta</li>
        <li class="realizacje">Realizacje</li>
        <li class="produkty">Produkty</li>
        <li class="aktualnosci">Aktualności</li>
        <li class="praca">Praca</li>
        <li class="kontakt">Kontakt</li>
        <li class="search"><i class="fa fa-search" aria-hidden="true"></i>Szukaj</li>
      </ul>
    </nav>
  </div>
</header>

<div class="bg-lines">
  <span></span>
  <!--
    --><span></span>
  <!--
    --><span></span>
  <!--
    --><span></span>
  <!--
    --><span></span>
</div>

<div class="bullets">
  <div class="ms-hydro"><span class="title">MS-HYDRO</span><span class="square"></span></div>
  <div class="proces"><span class="title">PROCES</span><span class="square"></span></div>
  <div class="oferta"><span class="title">OFERTA</span><span class="square"></span></div>
  <div class="realizacje"><span class="title">REALIZACJE</span><span class="square"></span></div>
  <div class="produkty"><span class="title">PRODUKTY</span><span class="square"></span></div>
  <div class="aktualnosci"><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
  <div class="praca"><span class="title">PRACA</span><span class="square"></span></div>
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

    <section class="proces">
    <div class="clip">
      <div class="bullets">
        <div class="ms-hydro"><span class="title">MS-HYDRO</span><span class="square"></span></div>
  <div class="proces"><span class="title">PROCES</span><span class="square"></span></div>
  <div class="oferta"><span class="title">OFERTA</span><span class="square"></span></div>
  <div class="realizacje"><span class="title">REALIZACJE</span><span class="square"></span></div>
  <div class="produkty"><span class="title">PRODUKTY</span><span class="square"></span></div>
  <div class="aktualnosci"><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
  <div class="praca"><span class="title">PRACA</span><span class="square"></span></div>
  <div class="kontakt"><span class="title">KONTAKT</span><span class="square"></span></div>
  </div>
  </div>

  <div class="bg-lines">
    <span></span>
    <!--
      --><span></span>
    <!--
      --><span></span>
    <!--
      --><span></span>
    <!--
      --><span></span>
  </div>

  <div class="wrapper">
    <h2>PROCES</h2>

    <div class="char">
      <ul>
        <li>
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



<!--tutaj dodać <a href offer-->
<!-- OFERTA -->
<section class="oferta">
  <h2>
    <a href="<?php the_permalink(8);?>">
      <?php echo get_the_title(8)?>
    </a>
  </h2>
  <!--
    -->
  <?php
        $strony = get_pages( $args = array(
        'child_of'=>8,
        'sort_column' => 'ID',
     ));
    $i = 1;
    foreach ( $strony as $strona ) { 
    $i =& $numer;
    $i++;
    ?>
    <div class="box">
      <a href="<?php the_permalink($strona->ID);?>">
        <?php if( have_rows('tło_ikony_opis',$strona->ID) ):
                while ( have_rows('tło_ikony_opis',$strona->ID) ) : the_row();?>
        <div class="container" style="background-image: url(<?php the_sub_field('tło',$strona->ID);?>);">

          <div class="bg"></div>

          <img class="icon red" src="<?php the_sub_field('ikona_1',$strona->ID);?>" />
          <img class="icon white" src="<?php the_sub_field('ikona_2',$strona->ID)?>" />

          <h3>
            <?php echo $strona->post_title; ?>
          </h3>
          <div class="desc">
            <p>
              <?php the_sub_field('opis',$strona->ID)?>
            </p>
          </div>

        </div>
      </a>
    </div>
    <!--
    -->
    <?php endwhile;endif;}?>

    <div class="box">
      <div class="container">
        <span>Pobierz ofertę</span>
        <i class="fa fa-file-text-o" aria-hidden="true"></i>
      </div>
    </div>

</section>


<section class="realizacje">
  <div class="clip">
    <div class="bullets">
      <div class="ms-hydro"><span class="title">MS-HYDRO</span><span class="square"></span></div>
      <div class="proces"><span class="title">PROCES</span><span class="square"></span></div>
      <div class="oferta"><span class="title">OFERTA</span><span class="square"></span></div>
      <div class="realizacje"><span class="title">REALIZACJE</span><span class="square"></span></div>
      <div class="produkty"><span class="title">PRODUKTY</span><span class="square"></span></div>
      <div class="aktualnosci"><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
      <div class="praca"><span class="title">PRACA</span><span class="square"></span></div>
      <div class="kontakt"><span class="title">KONTAKT</span><span class="square"></span></div>
    </div>
  </div>

  <div class="bg-lines">
    <span></span>
    <!--
      --><span></span>
    <!--
      --><span></span>
    <!--
      --><span></span>
    <!--
      --><span></span>
  </div>

  <div class="wrapper">
    <h2>
      <a href="<?php the_permalink(10);?>">
        <?php echo get_the_title(10)?>
      </a>
    </h2>

    <div>
      <div>
        <?php
        $strony = get_pages( $args = array(
        'child_of'=>10,
        'sort_column' => 'ID',
     ));
          foreach ( $strony as $strona ) { 
    ?>

          <div class="box">
            <a href="<?php the_permalink($strona->ID); ?>">
              <?php if( have_rows('realizacje',$strona->ID) ):
                while ( have_rows('realizacje',$strona->ID) ) : the_row();?>
              <img src="<?php the_sub_field('zdjecie_glowne')?>" />
              <?php endwhile;endif;?>
              <h3>
                <?php echo $strona->post_title; ?>
              </h3>
            </a>
          </div>
          <!--
          -->
          <?php } ?>
      </div>
    </div>
  </div>
</section>

<section class="produkty">
  <h2>
    <a href="<?php the_permalink(12);?>">
      <?php echo get_the_title(12); ?>
    </a>
  </h2>

  <ul>
    <li><i class="fa fa-times" aria-hidden="true"></i><span>Elementy i systemy hydrauliki</span></li>
    <!--
      -->
    <li><i class="fa fa-times" aria-hidden="true"></i><span>Filtry</span></li>
    <!--
      -->
    <li><i class="fa fa-times" aria-hidden="true"></i><span>Urządzenia pomiarowe</span></li>
    <!--
      -->
    <li><i class="fa fa-times" aria-hidden="true"></i><span>Inne</span></li>
    <!--
      -->
    <li><i class="fa fa-times" aria-hidden="true"></i><span>Węże hydrauliczne</span></li>
  </ul>

  <!--dodac <a href product-->
  <div class="slider-container">
    <div class="slider">
      <div>
        <?php
              $strony = get_pages( $args = array(
              'child_of'=>12,
              'sort_column' => 'ID',
          ));
                foreach ( $strony as $strona ) { 
                if( have_rows('produkty',$strona->ID) ):
                while ( have_rows('produkty',$strona->ID) ) : the_row();?>

          <a href="<?php echo get_page_link($strona->ID) ?>">
            <strong><?php echo get_the_title($strona->ID) ?></strong>
            <img src="<?php the_sub_field('zdjęcie',$strona->ID);?>" />
          </a>
          <?php
          endwhile; endif; } ?>
      </div>
    </div>
  </div>

  <div style="text-align: center;">
    <a class="button" href="">Warunki sprzedaży<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>
</section>

<section class="aktualnosci">
  <h2>
    <a href="<?php the_permalink(14);?>">
      <?php echo get_the_title(14); ?>
    </a>
  </h2>
  <div>
    <?php query_posts('cat=10&posts_per_page=8'); while (have_posts()) : the_post(); ?>
    <div class="box">
      <div class="inner">
        <div class="heading">
          <?php if(get_field('zdjecie_wpisu')){?>
          <div class="image" style="background-image: url(<?php the_field('zdjecie_wpisu');?>);"></div>
          <?php } ?>
          <span><?php echo get_the_date();?></span>
          <h3>
            <a href="<?php the_permalink();?>">
              <?php echo get_the_title();?>
            </a>
          </h3>
        </div>
        <p>
          <?php echo get_excerpt();?>
        </p>
      </div>
    </div>

    <?php endwhile; ?>

    <?php wp_reset_query(); ?>
  </div>
</section>

<section class="praca">
  <h2>PRACA</h2>

  <ul>
    <?php
              $podstronyPraca = get_pages( $args = array(
              'child_of'=>16,
              'sort_column' => 'ID',
              'order'=> "ASC"              
          ));
                foreach ( $podstronyPraca as $strona ) { ?>
      <li>
        <div class="title"><a href=""><strong><?php echo get_the_title($strona->ID) ?></strong></a>
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>

        <div class="desc">

          <?php $page = get_post($strona->ID); $content = apply_filters('the_content', $page->post_content); echo $content ?>

          <a href="<?php echo get_page_link($strona->ID) ?>" class="button">APLIKUJ</a>
        </div>
      </li>
      <?php } ?>
  </ul>
  <!--
    --><img src="<?php the_field('sekcja_praca');?>"/>
</section>

<section class="kontakt">
  <h2>
    <?php echo get_the_title(18);?>
  </h2>
  <div>
    <?php if( have_rows('sekcja_kontakt') ):
      while ( have_rows('sekcja_kontakt') ) : the_row();?>

    <div class="address">
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      <div>
        <?php the_sub_field('ulica');?><br>
        <?php the_sub_field('kod_pocztowy_i_miasto');?>
      </div>
    </div>
    <!--
      -->
    <div class="phone">
      <i class="fa fa-mobile" aria-hidden="true"></i>
      <div>
        <?php the_sub_field('telefon');?></br>
        <?php the_sub_field('fax');?>
      </div>
    </div>
    <!--
      -->
    <div class="email">
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
      <div><?php the_sub_field('e-mail');?></div>
    </div>
    <?php endwhile; 
      endif;?>
  </div>

  <div class="left">
    <h4>FORMULARZ KONTAKTOWY</h4>

    <form>
      <fieldset>
        <input type="text" name="name" id="form-name" placeholder="Imię i nazwisko" required>
        <input type="email" name="email" id="form-email" placeholder="E-mail" required>
        <input type="text" name="phone" id="form-phone" placeholder="Nr telefonu">
        <input type="text" name="subject" id="form-subject" placeholder="Temat">
      </fieldset>
      <!--
        -->
      <fieldset>
        <textarea rows="11" name="message" id="form-message" placeholder="Treść wiadomości" required></textarea>
        <input type="submit" value="Wyślij">
      </fieldset>
    </form>
  </div>
  <!--
    -->
  <div class="right">
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