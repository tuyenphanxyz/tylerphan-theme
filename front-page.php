<?php get_header(); ?>

<!-- HERO SECTION -->
<section class="hero" style="padding: 100px 0; text-align:center; background:#f9fafb;">
  <h1 style="font-size:48px; font-weight:700; margin-bottom:20px;">Xin chào, tôi là Tyler Phan 👋</h1>
  <p style="font-size:20px; color:#555;">Designer & Developer — yêu thích tạo ra những sản phẩm số tinh tế.</p>
  <a href="#case-studies" style="display:inline-block; margin-top:30px; padding:14px 30px; background:#006CCF; color:#fff; border-radius:8px; text-decoration:none;">Xem Dự Án</a>
</section>

<!-- INTRO TEXT -->
<section class="intro" style="padding:80px 0; text-align:center; max-width:800px; margin:auto;">
  <p style="font-size:24px; line-height:1.6; color:#333;">
    Tôi tin rằng thiết kế tốt là khi công nghệ và cảm xúc giao thoa.  
    Mục tiêu của tôi là tạo ra trải nghiệm số mang tính thẩm mỹ và hữu ích.
  </p>
</section>

<!-- CASE STUDIES (Swiper Slider) -->
<section id="case-studies" style="padding:100px 0; background:#f3f4f6;">
  <div class="container" style="max-width:1200px; margin:auto;">
    <h2 style="font-size:36px; text-align:center; margin-bottom:50px;">Case Studies</h2>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Card 1 -->
        <div class="swiper-slide">
          <div class="card" style="background:white; border-radius:12px; padding:20px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
            <img src="https://picsum.photos/400/300?1" alt="" style="border-radius:8px; width:100%; height:auto;">
            <h3 style="margin-top:20px;">TrackAsia — Logistics Platform</h3>
            <p style="color:#555;">Thiết kế trải nghiệm giao hàng và bản đồ thông minh cho doanh nghiệp Việt Nam.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="card" style="background:white; border-radius:12px; padding:20px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
            <img src="https://picsum.photos/400/300?2" alt="" style="border-radius:8px; width:100%; height:auto;">
            <h3 style="margin-top:20px;">Friendzy — Dating App</h3>
            <p style="color:#555;">Ứng dụng kết nối bạn bè với trải nghiệm trò chuyện vui vẻ, hiện đại.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="swiper-slide">
          <div class="card" style="background:white; border-radius:12px; padding:20px; box-shadow:0 4px 10px rgba(0,0,0,0.1); text-align:center;">
            <img src="https://picsum.photos/400/300?3" alt="" style="border-radius:8px; width:100%; height:auto;">
            <h3 style="margin-top:20px;">Pixzy World</h3>
            <p style="color:#555;">Kênh hoạt hình 3D vui nhộn và truyền cảm hứng cho trẻ em.</p>
          </div>
        </div>

      </div>

      <!-- Swiper Buttons -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

<!-- LATEST POSTS -->
<section style="padding:100px 0;">
  <div class="container" style="max-width:1200px; margin:auto;">
    <h2 style="font-size:36px; text-align:center; margin-bottom:50px;">Bài viết mới nhất</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px,1fr)); gap:30px;">

      <?php
      $latest_posts = new WP_Query(['posts_per_page' => 4]);
      if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
          <div style="background:white; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.1); padding:20px;">
            <a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit;">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium', ['style' => 'width:100%; border-radius:8px;']); ?>
              <?php endif; ?>
              <h3 style="margin-top:15px; font-size:20px;"><?php the_title(); ?></h3>
            </a>
          </div>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
