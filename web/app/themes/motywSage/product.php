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

      <!--<img src="img/produkty/zawory-cisnieniowe-3.png" />-->
      <!--<img src="img/produkty/zawory-cisnieniowe-1.png" />-->
<?php if( have_rows('produkty') ):
                while ( have_rows('produkty') ) : the_row();?>
          <img src="<?php the_sub_field('grafika_-_lewa');?>" />
          <img src="<?php the_sub_field('grafika_-_prawa')?>" />

    <?php endwhile;endif;

      the_content();
      ?>
  </section>
