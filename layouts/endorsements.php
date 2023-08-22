<section class="endorsements">
  <div class="container">
    <div class="text-container">
      <h2><?= get_sub_field('title'); ?></h2>
      <?= get_sub_field('copy'); ?>
    </div>

    <div class="endorsements-container">
      <?php foreach (get_sub_field('endorsements') as $endorsement) { ?>
        <div class="endorsement">
          <?php echo wp_get_attachment_image($endorsement['logo']['id'], "full"); ?>
          <div class="text-container">
            <h3><?php echo $endorsement['company_name'] ?></h3>
            <?php echo $endorsement['description'] ?>
          </div>
          <a href="<?php echo $endorsement['store_url'] ?>" class="btn">Visit Store</a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>