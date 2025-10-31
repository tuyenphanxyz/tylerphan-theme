<?php get_header(); ?>
<article class="single container">
  <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="meta">Đăng ngày <?php echo get_the_date(); ?></div>
    <?php if ( has_post_thumbnail() ) : ?><div class="thumb"><?php the_post_thumbnail('large'); ?></div><?php endif; ?>
    <div class="content"><?php the_content(); ?></div>
  <?php endwhile; ?>
</article>
<?php get_footer(); ?>