<section class="produkty">
  <h2><?php echo get_the_title(12); ?></h2>

  <ul>
    <li class="s0"><i class="fa fa-times" aria-hidden="true"></i><span>Elementy i systemy hydrauliki</span></li><!--
  --><li class="s1"><i class="fa fa-times" aria-hidden="true"></i><span>Filtry</span></li><!--
  --><li class="s2"><i class="fa fa-times" aria-hidden="true"></i><span>Urządzenia pomiarowe</span></li><!--
  --><li class="s3"><i class="fa fa-times" aria-hidden="true"></i><span>Inne</span></li><!--
  --><li class="s4"><i class="fa fa-times" aria-hidden="true"></i><span>Węże hydrauliczne</span></li>
  </ul>

  <div class="slider-container">
    <div class="slider">
      <div>

      <?php
        $lastCategory = 'ELEMENTY I SYSTEMY HYDRAULIKI';

        $strony = get_pages($args = array(
          'child_of' => 12,
          'sort_column' => 'ID',
          'order'=> 'ASC'
        ));

        foreach ( $strony as $strona ) { 
          if( have_rows('produkty', $strona->ID) ) :
            while ( have_rows('produkty', $strona->ID) ) : the_row();
              $strona->category = get_sub_field('kategoria', $strona->ID);
            endwhile;
          endif;
        }

        function cmp($a, $b) {
          return strcmp($a->category, $b->category);
        }

        usort($strony, "cmp");

        foreach ( $strony as $strona ) {
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