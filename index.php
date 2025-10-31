<?php get_header(); ?>
<section class="post-list container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post-item">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <?php if ( has_post_thumbnail() ) : ?><div class="thumb"><?php the_post_thumbnail('medium'); ?></div><?php endif; ?>
      <p class="excerpt"><?php the_excerpt(); ?></p>
      <a class="read-more" href="<?php the_permalink(); ?>">Đọc tiếp →</a>
    </article>
  <?php endwhile; else : ?><p>Chưa có bài viết nào.</p><?php endif; ?>
</section>
<?php get_footer(); ?>