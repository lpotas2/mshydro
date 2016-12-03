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
          <div class="realization">
            <div class="desc">
              <h3><?php echo $strona->post_title; ?></h3>
              <?php the_field('opis',$strona->ID)?>       

            </div><!--
            --><div class="gallery">
              <?php
                $rows = get_field('galeria', $strona->ID);
                $rowsCount = count($rows);
                
                if($rows): ?>
                <div class="slider js_percentage percentage">
                  <div class="frame js_frame">
                    <ul class="slides js_slides">
                      <?php
                        foreach($rows as $row) {
                          echo '<li class="js_slide" style="background-image: url(' . $row['zdjecie'] . ');"></li>';
                        }
                      ?>
                    </ul>
                  </div>
                  <span class="js_prev prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                  <span class="js_next next"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                </div>
              <?php endif;?>
            </div>
          </div>
        <?php } ?>

      <?php if( !$isRealizationPage ): ?>
      <div style="text-align: center;">
        <a class="button" href="<?php the_permalink(10); ?>">Zobacz wszystkie realizacje<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>