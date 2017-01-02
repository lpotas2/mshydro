<article class="search-result">
  <div class="page-title">
    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>

