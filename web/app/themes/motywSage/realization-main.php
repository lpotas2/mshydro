<section class="realizacje">
  <?php 
    $isRealizationPage = get_the_ID() == 10;

  if( !$isRealizationPage ): ?>
    <div class="clip">
      <div class="bullets">
        <div class="ms-hydro"><span class="title">MS-HYDRO</span><span class="square"></span></div>
        <div class="oferta"><span class="title">OFERTA</span><span class="square"></span></div>
        <div class="proces"><span class="title">PROCES</span><span class="square"></span></div>
        <div class="realizacje"><span class="title">REALIZACJE</span><span class="square"></span></div>
        <div class="produkty"><span class="title">PRODUKTY</span><span class="square"></span></div>
        <div class="aktualnosci"><span class="title">AKTUALNOŚCI</span><span class="square"></span></div>
        <div class="kontakt"><span class="title">KONTAKT</span><span class="square"></span></div>
      </div>
    </div>

    <div class="bg-lines">
      <span></span><!--
      --><span></span><!--
      --><span></span><!--
      --><span></span><!--
      --><span></span>
    </div>
  <?php endif; ?>

  <div class="wrapper">
    <h2>Realizacje</h2>

      <?php
        if ( $isRealizationPage ) {
          $strony = get_pages($args = array(
            'child_of' => 10,
            'sort_column' => 'ID',
            'order' => 'ASC'
          ));
        } else {
          $strony = get_pages($args = array(
            'parent' => 10,
            'sort_column' => 'ID',
            'hierarchical' => false,
            'order' => 'ASC',
            'number' => 3
          ));
        }

        foreach ( $strony as $strona ) { ?>
        <div>
          <div class="desc">
            <h3><?php echo $strona->post_title; ?></h3>
            <?php the_content(); ?>
          </div><!--
          --><div class="gallery">
            <div class="slider" style="width: 1100px;">
              <!--
              <?php if( have_rows('realizacje', $strona->ID) ):
                while ( have_rows('realizacje', $strona->ID) ) : the_row();?>
                  --><div style="background-image: url(<?php the_sub_field('zdjecie_glowne')?>);"></div><!--
              <?php endwhile; endif;?>
              -->
            </div>
            <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
          </div>
        </div>
      <?php } ?>

      <?php if( !$isRealizationPage ): ?>
        <a class="button" href="<?php the_permalink(10); ?>">Zobacz wszystkie realizacje<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <?php endif; ?>
    </div>
  </div>
</section>