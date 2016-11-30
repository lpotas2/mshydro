<?php
/**
 * Template Name: Produkty
 */
?>
<section class="produkty">
  <div class="bg-lines">
    <span></span><!--
    --><span></span>
    <!--
    --><span></span>
    <!--
    --><span></span>
    <!--
    --><span></span>
  </div>

  <div class="wrapper">
    <h2><?php echo get_the_title()?></h2>
    <img src="<?php the_field('grafika_lewa');?>" />
    <img src="<?php the_field('grafika_prawa')?>" />
    <?php the_content();?>
  </section>
