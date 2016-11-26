<?php
/**
 * Template Name: Zbiorczy produktów
 */
?>
<section class="produkty">
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
          $strony = get_pages($args = array(
          'child_of'=>$post->post_parent,
          'sort_column' => 'ID',
          'order'=> "ASC"
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