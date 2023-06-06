<?php 
// Template name: Front page
get_header(); ?>

<section class="front">
  <div class="container">
    <h1 class="front__title"><?php the_field('title'); ?></h1>

    <div class="front__img">
      <?php $img = get_field('fscreen_donut_img'); 
        if($img) : ?>
        <img src="<?php echo $img['sizes']['medium']; ?>" alt="">
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="instagram">
  <div class="container">
    <div class="instagram__images">
      <div class="instagram__donuts1">
        <!-- <img src="" alt=""> -->
      </div>
      <div class="instagram__mobile">
        <div class="instagram__mobile-img">
          <?php $img = get_field('mobile_frame'); 
            if($img) : ?>
          <img src="<?php echo $img['sizes']['large']; ?>" alt="">
          <?php endif; ?>
        </div>
        <button class="instagram__play-icon">
          <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.2991 13L0.852263 25.3823L0.852264 0.617699L22.2991 13Z" fill="#E21E2D" />
          </svg>
        </button>
        <?php $file = get_field('video');
        if($file) : ?>
        <div class="instagram__video">
          <video muted>
            <source src="<?php echo $file; ?>" type="video/mp4">
          </video>
        </div>
        <?php endif; ?>

        <p class="instagram__video-text"><?php the_field('video_text'); ?></p>
      </div>
      <div class="instagram__donuts2">
        <!-- <img src="" alt=""> -->
      </div>
    </div>
    <!-- Hebrew -->
    <h2 dir='rtl' class="instagram__title"><?php the_field('instagram_title'); ?></h2>
    <p dir='rtl' class="instagram__text-field"><?php the_field('text_field'); ?></p>
    <div class="instagram__img-wrap">
      <div class="instagram__img">
        <?php $img = get_field('instagram_right_image'); 
          if($img) : ?>
          <img src="<?php echo $img['sizes']['medium']; ?>" alt="">
        <?php endif; ?>
      </div>
    </div>
    <div class="instagram__ticker-container">
      <p class="instagram__ticker marquee"><?php the_field('ticker'); ?></p>  
    </div>
  </div>
</section>


<?php get_footer(); ?>