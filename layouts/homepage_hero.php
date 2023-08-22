<section class="homepage-hero">

  <div class="container">
    <div class="text-container">
      <h1><?php echo get_sub_field('title'); ?></h1>
      <h3><?php echo get_sub_field('subtitle'); ?></h3>
      <div class="image-container mobile">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/flowers.svg" alt="Flowers">
      </div>
      <div class="search-bar">
        <?php aws_get_search_form(true); ?>
      </div>
    </div>

    <div class="image-container">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/flowers.svg" alt="Flowers">
    </div>
  </div>

</section>