<?php
/**
 * Template Name: Zbiorczy realizacji
 */
?>
<section class="realizacje">
  <div class="wrapper"><!--

    <div>
      <div>
        <?php
          $strony = get_pages($args = array(
          'child_of'=>10,
          'sort_column' => 'ID',
          'order'=> "ASC"
       ));

          foreach ( $strony as $strona ) { 
?>
          --><div class="box">
            <a href="<?php the_permalink($strona->ID); ?>">
              <?php if( have_rows('realizacje',$strona->ID) ):
                while ( have_rows('realizacje',$strona->ID) ) : the_row();?>
              <img src="<?php the_sub_field('zdjecie_glowne')?>" />
              <?php endwhile;endif;?>
              <h3>
                <?php echo $strona->post_title; ?>
              </h3>
            </a>
          </div><!--
          
          <?php } ?>
      --></div>
    </div>
  </div>
</section>