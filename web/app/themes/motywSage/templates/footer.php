  <?php
$query = new WP_Query( array( 'page_id' => 6 ) );
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
$query->the_post();
?>
  <footer class="content-info" style="background-image: url('<?php print get_template_directory_uri(); ?>/dist/images/footer-bg.png');">
    <div class="container">
      <div class="wrapper">
        <nav>
          <ul>
            <li><a href="">MS-Hydro</a></li>
            <li><a href="">Proces</a></li>
            <li><a href="">Oferta</a></li>
            <li><a href="">Realizacje</a></li>
            <li><a href="">Produkty</a></li>
            <li><a href="">Warunki sprzedaży</a></li>
            <li><a href="">Aktualności</a></li>
            <li><a href="">Praca <span class="count">(3)</span></a></li>
            <li><a href="">Kontakt</a></li>
          </ul>
        </nav>
        <?php if( have_rows('stopka') ):
      while ( have_rows('stopka') ) : the_row();?>
        <img src="<?php the_sub_field('logo'); ?>" />
        <?php endwhile; 
      endif;?>

        <div class="copyright">Copyright © 2015 <strong>MS-Hydro s.c.</strong> All Rights Reserved</div>
      </div>
      <!--<?php dynamic_sidebar('sidebar-footer'); ?>-->
    </div>
  </footer>
<?php }}?>