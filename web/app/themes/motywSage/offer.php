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
      <?php if( have_rows('tło_ikony_opis') ):
                while ( have_rows('tło_ikony_opis') ) : the_row();?>
      <img class="icon" src="<?php the_sub_field('ikona_1')?>"/>
        <?php endwhile;endif;?>

      <h2><?php the_title()?></h2>

      <div class="desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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