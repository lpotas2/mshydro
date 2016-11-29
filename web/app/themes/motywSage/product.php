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
    <img src="<?php the_field('grafika_-_lewa');?>" />
    <img src="<?php the_field('grafika_-_prawa')?>" />
    <?php the_content();?>
  </section>
