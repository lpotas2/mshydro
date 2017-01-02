<?php use Roots\Sage\Titles; ?>

<section class="search">
  <div class="search-query">
    <h2><?= Titles\title(); ?></h2>
  </div>

  <article <?php post_class(); ?>>
    <header>
      <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
      <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </article>
</section>
