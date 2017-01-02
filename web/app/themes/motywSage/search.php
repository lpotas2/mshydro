<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php use Roots\Sage\Titles; ?>

<section class="search">
  <div class="search-query">
    <h2><?= Titles\title(); ?></h2>
  </div>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'search'); ?>
  <?php endwhile; ?>

  <?php the_posts_navigation(); ?>
</section>