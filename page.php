<?php get_header(); ?>
<section class="page container">
  <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="page-content"><?php the_content(); ?></div>
  <?php endwhile; ?>
</section>
<?php get_footer(); ?>