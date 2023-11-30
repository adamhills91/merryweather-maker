<section class="images-with-links">
  <div class="container">
    <div class="links">
      <?php foreach (get_sub_field('links') as $link) { ?>
        <div class="link">
          <div class="img-container">
            <a href="<?= get_term_link($link['link']); ?>" class=""><?php echo wp_get_attachment_image($link['image']['id'], "large"); ?></a>
          </div>
          <a href="<?= get_page_link($link['link']); ?>" class="btn"><?= $link['link_text']; ?></a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>