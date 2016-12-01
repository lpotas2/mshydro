<?php
$query = new WP_Query( array( 'page_id' => 6 ) );
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post(); ?>
  
  <aside>
    <div class="wrapper">
      <?php if( have_rows('pierwszy_ekran') ):
        while ( have_rows('pierwszy_ekran') ) : the_row(); ?>
          <strong><?php the_sub_field('nazwa_firmy'); ?></strong> <?php the_sub_field('adres'); ?> <?php the_sub_field('nip'); ?>
        <?php endwhile; endif;?>
      </div>
    </div>
  </aside>

  <header>
    <div class="wrapper">
      <?php if( have_rows('pierwszy_ekran') ):
        while ( have_rows('pierwszy_ekran') ) : the_row();
          if( get_sub_field('logo') ):?>
            <a class="brand" href="/" title="MS-Hydro - hydraulika siłowa"><img src="<?php the_sub_field('logo'); ?>" /></a>
        <?php endif; endwhile; endif;?>

      <div class="contact">
        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>
          <?php if( have_rows('pierwszy_ekran') ):
          while ( have_rows('pierwszy_ekran') ) : the_row();
            the_sub_field('telefon');
          endwhile; endif;?>
        </div>

        <div class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
          <?php if( have_rows('pierwszy_ekran') ):
          while ( have_rows('pierwszy_ekran') ) : the_row();
            the_sub_field('e-mail');
          endwhile; endif;?>
        </div>

        <div class="open"><i class="fa fa-clock-o" aria-hidden="true"></i>
          <?php if( have_rows('pierwszy_ekran') ):
          while ( have_rows('pierwszy_ekran') ) : the_row();
            the_sub_field('godziny_otwarcia');
          endwhile; endif;?>
        </div>
      </div>

      <?php wp_reset_postdata();
    }
  } 
?>

    <nav class="primary">
      <ul>
        <?php if(is_front_page()){ ?>
          <li class="ms-hydro"><a>MS-Hydro</a></li>
          <li class="oferta"><a>Oferta</a> <i class="fa fa-chevron-down" aria-hidden="true"></i></li>
          <li class="proces"><a>Proces</a></li>
          <li class="realizacje"><a>Realizacje</a></li>
          <li class="produkty"><a>Produkty</a></li>
          <li class="aktualnosci"><a>Aktualności</a></li>
          <li class="kontakt"><a>Kontakt</a></li>
          <li class="praca"><a href="<?php echo get_permalink(16); ?>">Praca <i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
          <li class="warunki-sprzedazy"><a href="<?php echo get_permalink(540); ?>">Warunki sprzedaży <i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
          <li class="search"><i class="fa fa-search" aria-hidden="true"></i>Szukaj</li>
        <?php } else { ?>
          <li><a href="<?php echo get_home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>

          <?php if( $post->post_parent != 0 ) { ?>
            <li><a href="<?php echo get_permalink( $post->post_parent );?>"><?php echo get_the_title( $post->post_parent );?></a></li>
          <?php } ?>

          <li><?php the_title();?></li>
          <li class="search"><i class="fa fa-search" aria-hidden="true"></i>Szukaj</li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</header>

<?php
  if(is_front_page()) {
    $strony = get_pages( $args = array(
      'child_of' => 8,
      'sort_column' => 'ID',
      'order' => "ASC"
    )); ?>

    <nav class="secondary">
      <div class="wrapper">
        <ul>
          <!--
          <?php foreach ($strony as $strona) { ?>
          --><li>
            <a href="<?php the_permalink($strona->ID); ?>">
              <img class="icon" src="<?php the_field('ikona_2', $strona->ID)?>" />
              <span><?php echo $strona->post_title; ?></span>
            </a>
          </li><!--
          <?php }?>
          -->
        </ul>
      </div>
    </nav>
<?php } ?>
<div id="contactUs">
  Podaj nam swój ades email
</div>
<div class="overlay">
  <img src="<?php print get_template_directory_uri(); ?>/dist/images/gear-icon.png" />
</div>
