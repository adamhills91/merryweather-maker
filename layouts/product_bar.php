<section class="product-bar">
  <div class="container">
    <div class="text-container">
      <h2><?php echo get_sub_field('title'); ?></h2>
      <p><?php echo get_sub_field('description'); ?></p>

      <!-- <?php if (get_sub_field('product_type') == 'best') { ?>
        <a href="#" class="btn">See More</a>
      <?php } else if (get_sub_field('product_type') == 'sale') { ?>
        <a href="#" class="btn">See More</a>
      <?php } else if (get_sub_field('product_type') == 'featured') { ?>
        <a href="#" class="btn">See More</a>
      <?php } ?> -->

    </div>

    <div class="products">

      <?php if (get_sub_field('product_type') == 'best') {
        echo do_shortcode('[products limit="3"  orderby="popularity" class="best-selling-items" best_selling="true" ]');
      } else if (get_sub_field('product_type') == 'sale') {
        echo do_shortcode('[products limit="3" columns="3" orderby="popularity" class="sale-items" on_sale="true" ]');
      } else if (get_sub_field('product_type') == 'featured') {
        echo do_shortcode('[products limit="3" columns="3" orderby="popularity" class="featured-ites" visibility="featured" ]');
      } ?>

    </div>
  </div>
</section>