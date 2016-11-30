<?php
/**
 * Template Name: Praca
 */
?>
<section class="praca">
  <h2>PRACA</h2>

  <ul>

        <?php if( have_rows('praca') ):
              while ( have_rows('praca') ) : the_row();?>
      <li>
        <div class="title"><a href=""><strong><?php the_sub_field('stanowisko')?></strong></a>
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>

        <div class="desc">
          <?php the_sub_field('opis'); ?>
          <a href="mailto: mshydro@mshydro.pl" class="button">APLIKUJ</a>
        </div>
      </li>
        <?php endwhile;endif;?>
  </ul><!--
    --><img src="<?php the_field('zdjecie');?>" /><!--
--></section>