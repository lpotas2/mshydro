<section class="praca">
  <h2>PRACA</h2>

  <ul><!--
    <?php
      $podstronyPraca = get_pages( $args = array(
        'child_of'=>16,
        'sort_column' => 'ID',
        'order'=> "ASC"              
      ));
          
      foreach ( $podstronyPraca as $strona ) { ?>
      --><li>
        <div class="title"><a href=""><strong><?php echo get_the_title($strona->ID) ?></strong></a>
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>

        <div class="desc">
          <?php $page = get_post($strona->ID); $content = apply_filters('the_content', $page->post_content); echo $content ?>
          <a href="<?php echo get_page_link($strona->ID)?>" class="button">APLIKUJ</a>
        </div>
      </li>
      <?php } ?>
  </ul><!--
    --><img src="<?php the_field('sekcja_praca');?>" /><!--
--></section>