<?php
$query = new WP_Query( array( 'page_id' => 6 ) );
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
$query->the_post();
?>
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
        <?php
        // Contents of the queried post results go here.
          } 
      }
            wp_reset_postdata();
      

           if(is_front_page()){?>
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
    <?php }
    else{?>
            <nav class="primary">
        <ul>
          <li onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i></li>
          <li><?php echo get_the_title( $post->post_parent );?></li>
          <li><?php the_title();?></li>
          <li class="search"><i class="fa fa-search" aria-hidden="true"></i>Szukaj</li>
        </ul>
      </nav>
    </div>
  </header>
    <?php }?>
  