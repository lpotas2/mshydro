<?php
/**
 * Template Name: Realizacje
 */
?>
  <section class="realizacje">
    <div class="bg-lines">
      <span></span><!--
      --><span></span><!--
      --><span></span><!--
      --><span></span><!--
      --><span></span>
    </div>
    <div class="wrapper">
      <div class="desc">

              <?php the_field('opis')?>       

      </div>

      <div class="gallery">
        <?php if( have_rows('zdjęcia_galeryjne') ):
                while ( have_rows('zdjęcia_galeryjne') ) : the_row();?>
        <a class="thumb" href="<?php the_sub_field('zdjęcie')?>">
          <div style="background-image: url(<?php the_sub_field('zdjęcie')?>);"></div>
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
                        <?php endwhile;endif;?>
        
      
      </div>
    </div>

    <div class="wrapper other-projects">
          <?php $pagelist = get_pages($args = array(
          'child_of'=>$post->post_parent,
          'sort_column' => 'ID',
          'order'=> "ASC",
          'parent'=>$post->post_parent
       ));
       ?>
        <?php
            $pages = array();
            foreach ($pagelist as $page) {
              $pages[] += $page->ID;
            }

            $current = array_search($post->ID, $pages);
            $prevID = $pages[$current-1];
            $nextID = $pages[$current+1];
            ?>

      <div>
        <?php if (!empty($prevID)) { ?>
        <a href="<?php the_permalink($prevID)?>">
        <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div></a>
          <?php }?>

        <a href="<?php the_permalink($post->post_parent)?>">
          <div class="all"><i class="fa fa-th" aria-hidden="true"></i></div></a>

        <?php if (!empty($nextID)) { ?>         
        <a href="<?php the_permalink($nextID)?>">
        <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></a>
          <?php }?>
      </div>
    </div>
  </section>


