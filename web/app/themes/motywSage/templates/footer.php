<?php
  $query = new WP_Query( array( 'page_id' => 6 ) );
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
   
    $query->the_post(); ?>
  
    <footer class="content-info">
      <div class="container">
        <div class="wrapper">
          <nav>
            <ul>
              <li class="ms-hydro"><a>MS-Hydro</a></li>
              <li class="oferta"><a>Oferta</a></li>
              <li class="proces"><a>Proces</a></li>
              <li class="realizacje"><a>Realizacje</a></li>
              <li class="produkty"><a>Produkty</a></li>
              <li class="aktualnosci"><a>Aktualności</a></li>
              <li class="kontakt"><a>Kontakt</a></li>
              <li class="praca"><a>Praca <i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
            </ul>
          </nav>

          <a class="brand" href="/" title="MS-Hydro - hydraulika siłowa"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/ms-hydro-logo.png" /></a>

          <div class="copyright">Copyright © 2015 <strong>MS-Hydro s.c.</strong> All Rights Reserved</div>
        </div>
      </div>
    </footer>
<?php }} ?>