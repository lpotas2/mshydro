<?php
/**
 * Template Name: Strona główna
 */
?>

<?php while (have_posts()) : the_post(); ?>
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

  <?php if(have_rows('nieczynne')):
    $currentDate = getdate();
    $currentDate = $currentDate['year'] . $currentDate['mon'] . $currentDate['mday'];

    while(have_rows('nieczynne')) : the_row(); ?>
      <div class="monit">
        <i class="fa fa-times" aria-hidden="true"></i>
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <?php the_sub_field('nieczynne_komunikat'); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?> 

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
      <span class="button">
        <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();
              the_sub_field('napis_przycisku');
            endwhile; 
          endif;?>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </span>
    </div>

    <span class="scroll-down"><i class="fa fa-chevron-down" aria-hidden="true"></i>
  </div>
</section>

  <section class="ms-hydro" >
    <a id="ms-hydro"></a>
    <?php if( have_rows('sekcja_ms-hydro') ):
      while ( have_rows('sekcja_ms-hydro') ) : the_row();
        if( get_sub_field('tło_sekcji_ms-hydro') ):?>
          <div class="bg" style="background-image: url('<?php the_sub_field('tło_sekcji_ms-hydro')?>');"></div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="wrapper">
      <h2>MS-HYDRO</h2>

      <?php if( have_rows('sekcja_ms-hydro')):
        while ( have_rows('sekcja_ms-hydro')) : the_row();
            the_sub_field('ogolny_opis_sekcji_ms-hydro');
        endwhile;
      endif?>

      <?php if( have_rows('sekcja_ms-hydro')):
        while ( have_rows('sekcja_ms-hydro')) : the_row();
          if( get_row_layout() == 'szczegołowy_opis' ): ?>
          <div>
            <h4><?php the_sub_field('tytuł_kolumny'); ?></h4>
            <?php the_sub_field('szczegoły');?>
          </div>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
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
      <ul><!--
      <?php $item = 0;
       if( have_rows('sekcja_proces')):
          while ( have_rows('sekcja_proces')) : the_row();
              if( get_row_layout() == 'etap' ):
              if($item == 2){ ?>
                --><li class="parent">
                <div>
                  <ul><!--
              <?php } ?>
                --><li class="<?php echo ($item == 0 ? 'active' : ''); ?>">
                  <div class="title"><span><?php the_sub_field('nazwa');?></span></div>
                  <div class="desc">
                    <div class="icon">
                      <img src="<?php the_sub_field('ikona');?>" />
                    </div>
                    <p><?php the_sub_field('opis'); ?></p>
                  </div>
                </li><!--
                 <?php if($item == 4){?>
                --></ul>
                </div>
                  </li><!--
              <?php } ?>
          <?php $item++;
           endif;
        endwhile; 
      endif;?>
      --></ul>
    </div>
  </div>
</section>

<?php include "realization-main.php" ?>
<?php include "products-main.php" ?>

<section class="aktualnosci">
  <h2>AKTUALNOŚCI</h2>
  <div class="wrapper">
    <!--
    <?php query_posts('cat = 10 & posts_per_page = 8'); while (have_posts()) : the_post(); ?>
    --><div class="box<?php echo (get_field("wpis_wyrozniony") ? " red" : ""); ?>">
      <h3><?php echo get_the_title(); ?></h3>
      <p><?php the_field('zajawka'); ?></p>
      <?php if(get_field('zdjecie_wpisu')){?>
        <div class="image">
          <div style="background-image: url(<?php the_field('zdjecie_wpisu'); ?>);"></div>
        </div>
      <?php } ?>
      <div class="content"><?php echo get_the_content(); ?></div>
      <div class="footer">
        <span class="date">
          <?php 
            $date = get_field('data', false, false);
            $date = new DateTime($date);
            echo $date->format('d/m/Y');
          ?>
        </span>
      </div>
    </div><!--
    <?php endwhile; ?>
    -->
    <?php wp_reset_query(); ?>

    <div style="text-align: center;">
      <a class="button" href="">Zobacz wszystkie aktualności<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

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
      <i class="fa fa-phone" aria-hidden="true"></i>
      <div>
        <?php the_sub_field('telefon');?>
        </br>
        <?php the_sub_field('fax');?>
      </div>
    </div><!--
    --><div class="email">
      <i class="fa fa-envelope" aria-hidden="true"></i>
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

<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd35rlK75_qBzEaEsQwzTWtrzXc66T4ro&sensor=false&extension=.js"></script>
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