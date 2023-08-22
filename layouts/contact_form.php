<section class="contact-form">
  <div class="container">
    <div class="text-container">
      <h1><?= get_sub_field('title') ?></h1>
      <?= get_sub_field('copy') ?>
    </div>
    <div class="form-container">
      <div class="container">
        <div class="contact-information">
          <h2>Contact Information</h2>
          <div class="contact-details">
            <div class="detail phone">
              <a href="tel:<?= the_field("phone_number", "option"); ?>">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/svg/phone.svg" alt="phone icon">
                <p><?php the_field("phone_number", "option"); ?></p>
              </a>
            </div>
            <div class="detail email">
              <a href="mailto:<?= the_field("email_address", "option"); ?>">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/svg/email.svg" alt="email icon">
                <p><?php the_field("email_address", "option"); ?></p>
              </a>
            </div>
            <div class="detail location">
              <img src="<?= get_stylesheet_directory_uri() ?>/assets/svg/location.svg" alt="location icon">
              <p><?php the_field("address", "option"); ?></p>
            </div>
          </div>
          <div class="socials">
            <a href="<?php echo get_field('footer', 'option')['facebook_page'] ?>" target="_blank" class="social-account">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/facebook.svg" alt="">
            </a>
            <a href="<?php echo get_field('footer', 'option')['instagram_page'] ?>" target="_blank" class="social-account">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/instagram.svg" alt="">
            </a>
            <a href="<?php echo get_field('footer', 'option')['etsy_store'] ?>" target="_blank" class="social-account">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/etsy.svg" alt="">
            </a>
          </div>
        </div>
        <div class="form">
          <?= do_shortcode('[wpforms id="131" title="false"]') ?>
        </div>
      </div>
    </div>
  </div>
</section>