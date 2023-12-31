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

  <?php
  // echo do_shortcode('[products]')
  ?>

  <section class="cookie-policy">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </section>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
