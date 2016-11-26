<?php
/**
* Template Name: Zbiorczy ofert
 */
?>
<section class="oferta"><!--
  
  <?php
        $strony = get_pages( $args = array(
        'child_of'=>8,
        'sort_column' => 'ID',
        'order'=> "ASC" 
     ));
    

    foreach ( $strony as $strona ) { 


    ?>
    --><div class="box">
      <a href="<?php the_permalink($strona->ID);?>">
        <?php if( have_rows('tło_ikony_opis',$strona->ID) ):
                while ( have_rows('tło_ikony_opis',$strona->ID) ) : the_row();?>
        <div class="container" style="background-image: url(<?php the_sub_field('tło',$strona->ID);?>);">

          <div class="bg"></div>

          <img class="icon red" src="<?php the_sub_field('ikona_1',$strona->ID);?>" />
          <img class="icon white" src="<?php the_sub_field('ikona_2',$strona->ID)?>" />

          <h3>
            <?php echo $strona->post_title; ?>
          </h3>
          <div class="desc">
            <p>
              <?php the_sub_field('opis',$strona->ID)?>
            </p>
          </div>

        </div>
      </a>
    </div><!--
    <?php endwhile;endif;}?>

    --><div class="box">
      <div class="container">
        <span>Pobierz ofertę</span>
        <i class="fa fa-file-text-o" aria-hidden="true"></i>
      </div>
    </div>
</section>