<?php
/**
 * Template Name: Oferta
 */
?>

<section class="oferta">
  <div class="bg-lines">
    <span></span><!--
    --><span></span><!--
    --><span></span><!--
    --><span></span><!--
    --><span></span>
  </div>

  <div class="wrapper">
    <div class="icon">
      <img src="<?php the_field('ikona_1')?>" />
    </div>

    <div class="desc">
      <h2><?php the_title()?></h2>

      <div class="content">
        <?php the_field('opis')?>
      </div>
    </div>
        
    <div class="gallery">
      <!--
      <?php if( have_rows('galeria') ):
        while ( have_rows('galeria') ) : the_row();?>
          --><div style="background-image: url(<?php the_sub_field('zdjecie')?>);"></div><!--
      <?php endwhile; endif;?>
      -->
    </div>

    <div class="other-projects">
      <?php
        $pagelist = get_pages($args = array(
          'child_of' => $post->post_parent,
          'sort_column' => 'ID',
          'order' => 'ASC',
          'parent' => $post->post_parent
        ));

        $pages = array();
        foreach ($pagelist as $page) {
          $pages[] += $page->ID;
        }

        $current = array_search($post->ID, $pages);
        if($current != 0) {
          $prevID = $pages[$current - 1];
        }

        if($current < count($pages) - 1) {
          $nextID = $pages[$current + 1];
        }
      ?>

      <?php if (!empty($prevID)) { ?>
        <div class="prev"><a href="<?php the_permalink($prevID)?>" title="<?php echo get_the_title($prevID); ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></div>
      <?php }?>

      <div class="all"><a href="<?php the_permalink($post->post_parent)?>" title="Oferta"><i class="fa fa-th" aria-hidden="true"></i></a></div>

      <?php if (!empty($nextID)) { ?>         
        <div class="next"><a href="<?php the_permalink($nextID)?>" title="<?php echo get_the_title($nextID); ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
      <?php }?>
    </div>
  </div>
</section>