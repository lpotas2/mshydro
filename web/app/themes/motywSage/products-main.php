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

    foreach($strony as $strona) {
      $strona->category = get_field('kategoria', $strona->ID);
    }

    $strony = array_merge(array_flip($categorys), $strony);

    $categorys = get_field_object('kategoria', $strony[0]->ID)['choices'];
    $lastCategory = $categorys[0];

    $i = 0;
    foreach($categorys as $category) {
      echo '--><li class="' . ($i == 0 ? 'active ' : '') . 's' . $i++ . '"><i class="fa fa-times" aria-hidden="true"></i><span>' . $category . '</span></li><!--';
    }
  ?>
  -->
  </ul>
  
  <div class="slider-container">
    <div class="slider">
      <?php foreach($categorys as $category) {
        echo '<div>';

        foreach($strony as $strona) {
          if($category == get_field('kategoria', $strona->ID)) : ?>
            <a href="<?php echo get_page_link($strona->ID) ?>">
              <strong><?php echo get_the_title($strona->ID) ?></strong>
              <img src="<?php the_field('thumb', $strona->ID);?>" />
            </a>
          <?php endif; ?>
        <?php }

        echo '</div>';
      } ?>
    </div>
  </div>

  <div style="text-align: center;">
    <a class="button" href="">Warunki sprzedaży<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>
</section>