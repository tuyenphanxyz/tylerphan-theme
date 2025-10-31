<?php get_header(); ?>
<section class="archive container">
  <h1><?php the_archive_title(); ?></h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post-item">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <?php the_excerpt(); ?>
    </article>
  <?php endwhile; else : ?><p>Không có bài viết nào trong mục này.</p><?php endif; ?>
</section>
<?php get_footer(); ?>