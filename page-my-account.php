<?php
/* Template Name: Flexible Content */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Merryweather_Maker
 */

get_header();
?>

<main id="primary" class="site-main">

  <div class="container account-page">

    <div class="container inner">
      <!-- <div class="image-container">
        <?php echo wp_get_attachment_image(get_field('logo', 'option'), "large"); ?>
      </div> -->
      <?php
      echo do_shortcode('[woocommerce_my_account]')
      ?>
    </div>
  </div>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
