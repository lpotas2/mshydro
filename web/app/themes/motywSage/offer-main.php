<?php
  $strony = get_pages( $args = array(
    'child_of' => 8,
    'sort_column' => 'ID',
    'order' => "ASC" 
  ));
?>

<section class="oferta">
  <h2>
    <a href="<?php the_permalink(8);?>"><?php echo get_the_title(8)?></a>
  </h2><!-- 
  <?php foreach ( $strony as $strona ) { ?>
    --><div class="box">
      <a href="<?php the_permalink($strona->ID);?>">
        <div class="container" style="background-image: url(<?php the_field('tło', $strona->ID);?>);">
          <div class="bar">
            <img class="icon" src="<?php the_field('ikona_2', $strona->ID)?>" />
            <h4><?php echo $strona->post_title; ?></h4>
          </div>
          <div class="desc">
            <?php the_field('opis', $strona->ID)?>
          </div>
        </div>
      </a>
    </div><!--
  <?php }?>
    --><div class="box">
      <div class="container">
        <a href="">
          <img src="<?php print get_template_directory_uri(); ?>/dist/images/pdf-icon.png" />
          <span>Pobierz całą ofertę</span>
        </a>
      </div>
    </div>
</section>