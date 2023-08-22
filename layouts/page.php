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


  <?php if (have_rows('blocks')) :
    while (have_rows('blocks')) : the_row();

      $layout_name = get_row_layout();
      get_template_part("layouts/$layout_name");

    endwhile;
  endif;

  ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
