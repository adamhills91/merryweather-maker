<section class="customer-reviews">
  <div class="title-container">
    <h2><?= get_sub_field('title') ?></h2>
  </div>

  <div class="swiper review-swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

      <?php foreach (get_sub_field('reviews') as $review) { ?>
        <div class="swiper-slide">
          <span class="review"><?= $review['review']; ?></span>
          <span class="name"><?= $review['name']; ?></span>
        </div>
      <?php } ?>

    </div>


  </div>

  <div class="bottom-row">
    <div class="navigation-buttons">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <div class="button">
      <a href="<?= get_sub_field('button_url'); ?>" class="btn"><?= get_sub_field('button_text'); ?></a>
    </div>
  </div>
</section>