<section class="produkty">
  <h2><?php echo get_the_title(12); ?></h2>

  <ul>
  <!--
  <?php
    $categorys = [];

    $strony = get_pages($args = array(
      'child_of' => 12,
      'sort_column' => 'ID',
      'order'=> 'ASC'
    ));

    foreach ( $strony as $strona ) { 
      if( have_rows('produkty', $strona->ID) ) :
        while ( have_rows('produkty', $strona->ID) ) : the_row();
          $strona->category = get_sub_field('kategoria', $strona->ID);
          array_push($categorys, $strona->category);
        endwhile;
      endif;
    }

    $categorys = array_unique($categorys);
    sort($categorys);

    $lastCategory = $categorys[0];

    function cmp($a, $b) {
      return strcmp($a->category, $b->category);
    }

    usort($strony, "cmp");

    $i = 0;
    foreach ( $categorys as $category ) {
      echo '--><li class="' . ($i == 0 ? 'active ' : '') . 's' . $i++ . '"><i class="fa fa-times" aria-hidden="true"></i><span>' . $category . '</span></li><!--';
    }
  ?>
  -->
  </ul>
  
  <div class="slider-container">
    <div class="slider">
      <div>
        <?php foreach ( $strony as $strona ) {
          if( have_rows('produkty', $strona->ID) ) :
            while ( have_rows('produkty', $strona->ID) ) : the_row();
              $currentCategory = get_sub_field('kategoria', $strona->ID);

              if ( $currentCategory != $lastCategory ) {
                echo '</div><div>';
              }

              $lastCategory = $currentCategory;
            ?>

            <a href="<?php echo get_page_link($strona->ID) ?>">
              <strong><?php echo get_the_title($strona->ID) ?></strong>
              <img src="<?php the_sub_field('zdjęcie', $strona->ID);?>" />
            </a>
        <?php endwhile; endif; } ?>

          </div>
        <div> 
      </div>
    </div>
  </div>
</div>

  <div style="text-align: center;">
    <a class="button" href="">Warunki sprzedaży<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>
</section>