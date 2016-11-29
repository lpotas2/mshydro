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
              <?php the_field('opis',$strona->ID)?>       

            </div><!--
            --><div class="gallery">
              <?php
                $rows = get_field('zdjęcia_galeryjne', $strona->ID);
                $rowsCount = count($rows);
                
                if($rows): ?>

                <div class="slider" style="width: <?php echo ($rowsCount * 436); ?>px;">
                  <!--
                  <?php
                    foreach($rows as $row) {
                      echo '--><div style="background-image: url(' . $row['zdjęcie'] . ');"></div><!--';
                    }
                  ?>
                  -->
                </div>

              <?php endif;?>
              <span class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
              <span class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
            </div>
          </div>
        <?php } ?>

      <?php if( !$isRealizationPage ): ?>
        <a class="button" href="<?php the_permalink(10); ?>">Zobacz wszystkie realizacje<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <?php endif; ?>
    </div>
  </div>
</section>