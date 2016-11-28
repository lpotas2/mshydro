<?php
  $query = new WP_Query( array( 'page_id' => 6 ) );
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
   
    $query->the_post(); ?>
  
    <footer class="content-info">
      <div class="container">
        <div class="wrapper">

          <?php 
            if(is_front_page()) : ?>
              <nav>
                <ul>
                  <li class="ms-hydro"><a>MS-Hydro</a></li>
                  <li class="oferta"><a>Oferta</a></li>
                  <li class="proces"><a>Proces</a></li>
                  <li class="realizacje"><a>Realizacje</a></li>
                  <li class="produkty"><a>Produkty</a></li>
                  <li class="aktualnosci"><a>Aktualności</a></li>
                  <li class="kontakt"><a>Kontakt</a></li>
                  <li class="praca"><a href="<?php echo get_permalink(16);?>">Praca <i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
                </ul>
              </nav>
          <?php endif; ?>

          <a class="brand" href="/" title="MS-Hydro - hydraulika siłowa"></a>
          <?php if( have_rows('pierwszy_ekran') ):
            while ( have_rows('pierwszy_ekran') ) : the_row();?>
              <img src="<?php the_sub_field('logo')?>";/></a>
            <?php endwhile; 
          endif;?>

          <div class="copyright">Copyright © 2015 <strong>MS-Hydro s.c.</strong> All Rights Reserved</div>
        </div>
      </div>
    </footer>
<?php }}
wp_reset_postdata(); 
 ?>